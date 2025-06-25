<?php 
require_once __DIR__ . '/../core/db.php';

    class DataNews{
        private $db;
        public function __construct(){
            $this->db = database::getinstance()->getconnect();
        }
        public function getTotalCountNews(){
            return $this->db->query("SELECT COUNT(*) FROM news")->fetchColumn();
        }
         public function getLastNews(){
            return $this->db->query("SELECT * FROM news ORDER BY date DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
        }
        public function getPagesNews($limit,$offset){
            $sql="SELECT * FROM news ORDER BY date DESC LIMIT :limit OFFSET :offset";
            $news=$this->db->prepare($sql);
            $news->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
             $news->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
            $news->execute();
            return $news->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getNewsById($id) {
        $sql = "SELECT * FROM news WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    }