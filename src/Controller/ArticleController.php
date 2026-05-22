<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\ArticleRepository;
use PDO;
use Smarty;

class ArticleController
{
    /**
     * Renders single article and increments views counter
     * @param Smarty $smarty
     * @param PDO $pdo
     * @return void
     */
    public function show(Smarty $smarty, PDO $pdo): void
    {
        $articleId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if ($articleId <= 0) {
            $this->notFound($smarty);
            return;
        }

        $articleRepo = new ArticleRepository($pdo);
        $article = $articleRepo->getById($articleId);

        if (!$article) {
            $this->notFound($smarty);
            return;
        }

        // Incrementing counter
        $articleRepo->incrementViews($articleId);

        $article['views'] += 1;

        $related = $articleRepo->getRelated($articleId, 3);

        $smarty->assign('article', $article);
        $smarty->assign('related', $related);
        $smarty->display('article.tpl');
    }

    private function notFound(Smarty $smarty): void
    {
        $smarty->assign('error', 'Статья не найдена');
        $smarty->display('404.tpl');
    }
}