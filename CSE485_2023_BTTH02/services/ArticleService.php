<?php
include("configs/DBConnection.php");
include("models/Article.php");
class ArticleService {
    public function getAllArticles(){
        // 4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();

        // B2. Truy vấn
        $sql = "SELECT * FROM baiviet";
        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả
        $articles = [];
        while($row = $stmt->fetch()){
            $article = new Article($row['hinhanh'], $row['tieude'], $row['ma_bviet']);
            array_push($articles, $article);
        }
        // Mảng (danh sách) các đối tượng Article Model

        return $articles;
    }
}