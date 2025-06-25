<?php  
class configDB { 
    private $pdo;
    public function connect(){
    $host = 'localhost';
    $dbname = 'news';
    $user = 'root';
    $password = '1234';
     $port='3306';
    try {
        $this->pdo= new PDO ("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",$user,$password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $this->pdo;
    }
    catch (PDOException $e){
        echo 'Ошибка подключения к базе данных' . $e->getMessage();
    }
}
}

