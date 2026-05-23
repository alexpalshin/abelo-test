<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load(); // load .env file

require_once __DIR__ . '/config/database.php'; // returns getPDO()

use App\Controller\HomeController;
use App\Controller\CategoryController;
use App\Controller\ArticleController;

$baseUrl = dirname($_SERVER['SCRIPT_NAME']);

$smarty = new Smarty();
$smarty->assign('base_url', rtrim($baseUrl, '/'));
$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');
$smarty->setConfigDir(__DIR__ . '/configs');
$smarty->setCompileCheck(true);

$pdo = getPDO();

// Router
$page = $_GET['page'] ?? 'home';

try {
    match ($page) {
        'home'     => (new HomeController())->index($smarty, $pdo),
        'category' => (new CategoryController())->show($smarty, $pdo),
        'article'  => (new ArticleController())->show($smarty, $pdo),
        default    => (new HomeController())->index($smarty, $pdo), // fallback
    };
} catch (Exception $e) {
    http_response_code(500);
    echo "Internal server error.";
    var_dump($e->getMessage());
}