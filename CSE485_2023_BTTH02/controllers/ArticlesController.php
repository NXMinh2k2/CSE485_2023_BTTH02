<?php
    include ('services/ArticleService.php');
class ArticlesController {
    private $articleService;

    public function __construct(ArticleService $articleService) {
        $this->articleService = $articleService;
    }

    public function index() {
        $articles = $this->articleService->getAllArtilces();
        include 'views/home/index.php';
    }
}
?>