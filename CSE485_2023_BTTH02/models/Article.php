<?php
class Article {
    private $hinhanh;
    private $tieude;
    private $ma_bviet;

    public function __construct($hinhanh, $tieude, $ma_bviet){
        $this->hinhanh = $hinhanh;
        $this->tieude = $tieude;
        $this->ma_bviet = $ma_bviet;
    }

    // Setter và Getter
    public function getHinhAnh(){
        return $this->hinhanh;
    }

    public function getTieuDe(){
        return $this->tieude;
    }

    public function getMaBaiViet(){
        return $this->ma_bviet;
    }
}