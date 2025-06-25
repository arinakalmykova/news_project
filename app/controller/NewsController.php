<?php
     require_once __DIR__ . '/../model/datanews.php';
    class NewsController{
        public function show(){
    
         $obj=new DataNews();
         $limit=4;
           $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
             $offset = ($page - 1) * $limit;
         $count_news=$obj->getTotalCountNews();
         $late=$obj->getLastNews();
         $showall=$obj->getPagesNews($limit, $offset);
         $count_pages=ceil($count_news/$limit);  
        $content_view = __DIR__ . '/../view/news_list.php';
        include __DIR__ . '/../view/layout.php';

        }
        public function choice($id){   
            
            $obj=new DataNews();
            $item = $obj->getNewsById($id);
            if(!$item){
                echo "Новость не найдена.";
                return;
            }
          $content_view = __DIR__ . '/../view/news_detail.php';
         include __DIR__ . '/../view/layout.php';

        }

    }
?>