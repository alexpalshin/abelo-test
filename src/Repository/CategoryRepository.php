<?php
declare(strict_types=1);

namespace App\Repository;

use PDO;

class CategoryRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Returns all articles with at least one article
     * @return array
     */
    public function getAllWithArticleCounts(): array
    {
        $sql = "
            SELECT c.id, c.name, c.description, COUNT(ac.article_id) AS article_count
            FROM categories c
            INNER JOIN article_category ac ON c.id = ac.category_id
            GROUP BY c.id, c.name, c.description
            ORDER BY c.name
        ";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    /**
     * Returns a category by id
     * @param int $id
     * @return array|null
     */
    public function getById(int $id): ?array
    {
        $stmt = $this->pdo->prepare("SELECT id, name, description FROM categories WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch();
        return $result ?: null;
    }
}