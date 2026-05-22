<?php
declare(strict_types=1);

namespace App\Repository;

use PDO;

class ArticleRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Returns $limit recent articles sorted by date (DESC)
     * @param int $categoryId
     * @param int $limit
     * @return array
     */
    public function getLatestByCategory(int $categoryId, int $limit = 3): array
    {
        $sql = "
            SELECT a.id, a.title, a.description, a.image, a.views, a.created_at
            FROM articles a
            INNER JOIN article_category ac ON a.id = ac.article_id
            WHERE ac.category_id = :category_id
            ORDER BY a.created_at DESC
            LIMIT :limit
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('category_id', $categoryId, PDO::PARAM_INT);
        $stmt->bindValue('limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Returns articles for category page with pagination
     * @param int $categoryId
     * @param string $sort 'date' или 'views'
     * @param int $page
     * @param int $perPage
     * @return array ['articles' => [...], 'total' => int]
     */
    public function getByCategoryPaginated(int $categoryId, string $sort, int $page, int $perPage = 10): array
    {
        // Allowed sorting
        $allowedSort = ['date' => 'a.created_at DESC', 'views' => 'a.views DESC'];
        $orderBy = $allowedSort[$sort] ?? $allowedSort['date'];

        // Get total number of articles
        $countSql = "
            SELECT COUNT(*)
            FROM articles a
            INNER JOIN article_category ac ON a.id = ac.article_id
            WHERE ac.category_id = :category_id
        ";
        $countStmt = $this->pdo->prepare($countSql);
        $countStmt->execute(['category_id' => $categoryId]);
        $total = (int) $countStmt->fetchColumn();

        // Offset calculation
        $offset = ($page - 1) * $perPage;

        // the Query
        $sql = "
            SELECT a.id, a.title, a.description, a.image, a.views, a.created_at
            FROM articles a
            INNER JOIN article_category ac ON a.id = ac.article_id
            WHERE ac.category_id = :category_id
            ORDER BY $orderBy
            LIMIT :limit OFFSET :offset
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('category_id', $categoryId, PDO::PARAM_INT);
        $stmt->bindValue('limit', $perPage, PDO::PARAM_INT);
        $stmt->bindValue('offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $articles = $stmt->fetchAll();

        return [
            'articles' => $articles,
            'total'    => $total,
        ];
    }

    /**
     * Returns an article by id, with categories list
     * @param int $id
     * @return array|null
     */
    public function getById(int $id): ?array
    {
        $sql = "SELECT id, image, title, description, content, views, created_at FROM articles WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $article = $stmt->fetch();
        if (!$article) {
            return null;
        }
        // Attaching categories
        $article['categories'] = $this->getCategoriesForArticle($id);
        return $article;
    }

    /**
     * Increments views counter by 1
     * @param int $id
     * @return void
     */
    public function incrementViews(int $id): void
    {
        $stmt = $this->pdo->prepare("UPDATE articles SET views = views + 1 WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    /**
     * Returns array of related articles from the same category (up to $limit items) excluding the article itself.
     * @param int $articleId
     * @param int $limit
     * @return array
     */
    public function getRelated(int $articleId, int $limit = 3): array
    {
        $sql = "
            SELECT DISTINCT a.id, a.title, a.description, a.image, a.views, a.created_at
            FROM articles a
            INNER JOIN article_category ac ON a.id = ac.article_id
            WHERE ac.category_id IN (
                SELECT category_id FROM article_category WHERE article_id = :article_id
            )
            AND a.id != :article_id
            ORDER BY a.created_at DESC
            LIMIT :limit
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('article_id', $articleId, PDO::PARAM_INT);
        $stmt->bindValue('limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Returns categories for specific article
     * @param int $articleId
     * @return array
     */
    private function getCategoriesForArticle(int $articleId): array
    {
        $sql = "
            SELECT c.id, c.name
            FROM categories c
            INNER JOIN article_category ac ON c.id = ac.category_id
            WHERE ac.article_id = :article_id
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['article_id' => $articleId]);
        return $stmt->fetchAll();
    }
}