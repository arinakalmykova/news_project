<?php
  require_once __DIR__ . '/../../config.php';

class database{
    private $pdo;
    private static $instance=null; 
        private function __construct(){
        
            $dbconn=new configDB();
            $this->pdo=$dbconn->connect();
        }

        public static function getinstance() {
        if (self::$instance === null) {
            self::$instance = new database();
        }
        return self::$instance;
    } //для работы с одним экземпляром подключения к базе данных во всем проекте

         public function getconnect() {
        return $this->pdo;
    }
    }