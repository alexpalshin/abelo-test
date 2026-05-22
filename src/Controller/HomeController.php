<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ArticleRepository;
use PDO;
use Smarty;

class HomeController
{
    /**
     * Render main page with categories and three last posts form each category.
     * @param Smarty $smarty
     * @param PDO $pdo
     * @return void
     */
    public function index(Smarty $smarty, PDO $pdo): void
    {
        $categoryRepo = new CategoryRepository($pdo);
        $articleRepo  = new ArticleRepository($pdo);

        $categories = $categoryRepo->getAllWithArticleCounts();
        $data = [];

        foreach ($categories as $cat) {
            $latestArticles = $articleRepo->getLatestByCategory((int)$cat['id'], 3);
            $data[] = [
                'category' => $cat,
                'articles' => $latestArticles,
            ];
        }

        $smarty->assign('categories_data', $data);
        $smarty->display('home.tpl');
    }
}