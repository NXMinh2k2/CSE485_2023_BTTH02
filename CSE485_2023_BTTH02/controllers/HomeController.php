<?php
    include ('services/ArticleService.php');
class HomeController {
    private $articleService;

    public function __construct() {
        $this->articleService = new ArticleService();
    }

    public function index() {
        $articles = $this->articleService->getAllArticles();
        include 'views/home/index.php';
    }
}
?>