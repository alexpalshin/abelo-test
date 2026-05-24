<?php
declare(strict_types=1);

/**
 * Database seeder + XML exporter
 * 
 * Usage: php seeds/seed.php
 * 
 * - Truncates existing data
 * - Creates categories and articles using Faker
 * - Exports all articles (with categories) to public/feed.xml
 */

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load(); // load .env file

require_once __DIR__ . '/../config/database.php';

$pdo = getPDO();

// ---- CONFIGURATION ----
$numberOfCategories = 4;
$numberOfArticles   = 24;       // 6 per category if distributed evenly

$faker = Faker\Factory::create();

// ---- CLEAN TABLES ----
echo "Clearing existing data...\n";
$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("TRUNCATE TABLE article_category");
$pdo->exec("TRUNCATE TABLE articles");
$pdo->exec("TRUNCATE TABLE categories");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

// ---- SEED CATEGORIES ----
echo "Creating $numberOfCategories categories...\n";
$categoryIds = [];
for ($i = 0; $i < $numberOfCategories; $i++) {
    $stmt = $pdo->prepare("INSERT INTO categories (name, description) VALUES (:name, :desc)");
    $name = ucwords($faker->words(rand(1, 3), true));
    $desc = $faker->sentence(rand(8, 15));
    $stmt->execute(['name' => $name, 'desc' => $desc]);
    $categoryIds[] = (int)$pdo->lastInsertId();
}

// ---- SEED ARTICLES ----
echo "Creating $numberOfArticles articles...\n";
$articleIds = [];
for ($i = 0; $i < $numberOfArticles; $i++) {
    $title       = $faker->sentence(rand(4, 8));
    $description = $faker->paragraph(2);
    $content     = implode("\n\n", $faker->paragraphs(rand(3, 6)));
    $views       = rand(50, 1500);
    $createdAt   = $faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d H:i:s');
    $image       = '/assets/images/placeholder.svg';   // relative path (no leading slash)

    $stmt = $pdo->prepare("
        INSERT INTO articles (image, title, description, content, views, created_at)
        VALUES (:image, :title, :desc, :content, :views, :created_at)
    ");
    $stmt->execute([
        'image'      => $image,
        'title'      => $title,
        'desc'       => $description,
        'content'    => $content,
        'views'      => $views,
        'created_at' => $createdAt,
    ]);
    $articleIds[] = (int)$pdo->lastInsertId();
}

// ---- ASSIGN ARTICLES TO CATEGORIES (random 1-3 categories each) ----
echo "Assigning categories to articles...\n";
$assignStmt = $pdo->prepare("INSERT INTO article_category (article_id, category_id) VALUES (:aid, :cid)");
foreach ($articleIds as $aid) {
    $numCats = rand(1, min(3, count($categoryIds)));
    $randomCats = $faker->randomElements($categoryIds, $numCats);
    foreach ($randomCats as $cid) {
        $assignStmt->execute(['aid' => $aid, 'cid' => $cid]);
    }
}

echo "Database seeded successfully!\n";