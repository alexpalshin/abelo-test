<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ArticleRepository;
use PDO;
use Smarty;

class CategoryController
{
    /**
     * Renders specific category page
     * @param Smarty $smarty
     * @param PDO $pdo
     * @return void
     */
    public function show(Smarty $smarty, PDO $pdo): void
    {
        $categoryId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if ($categoryId <= 0) {
            $this->notFound($smarty);
            return;
        }

        $categoryRepo = new CategoryRepository($pdo);
        $category = $categoryRepo->getById($categoryId);

        if (!$category) {
            $this->notFound($smarty);
            return;
        }

        $sort = $_GET['sort'] ?? 'date';
        $allowedSorts = ['date', 'views'];
        if (!in_array($sort, $allowedSorts)) {
            $sort = 'date';
        }

        $page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
        $perPage = 10; 

        $articleRepo = new ArticleRepository($pdo);
        $result = $articleRepo->getByCategoryPaginated($categoryId, $sort, $page, $perPage);

        $totalPages = (int)ceil($result['total'] / $perPage);

        $smarty->assign('category', $category);
        $smarty->assign('articles', $result['articles']);
        $smarty->assign('currentSort', $sort);
        $smarty->assign('currentPage', $page);
        $smarty->assign('totalPages', $totalPages);
        $smarty->display('category.tpl');
    }

    private function notFound(Smarty $smarty): void
    {
        $smarty->assign('error', 'Категория не найдена');
        $smarty->display('404.tpl');
    }
}