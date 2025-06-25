<section>
<div class="late_list" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('/news_project/public/images/<?= $late['image'] ?>')">
    <div class=text>
     <h1> <?=$late['title']?></h1>
    <?=$late['announce']?></div>
 </div>

<div  class="title-news"><h1>Новости</h1></div>
<div class="news_list">
      <?php foreach ($showall as $item): ?>
        <article class="item-news"> 
             <div class="news-content">
            <div class="date"><span><?= date('d.m.Y', strtotime($item['date'])) ?></span></div>
            <h2><?= htmlspecialchars($item['title']) ?></h2>
            <?= $item['announce'] ?> 
            <div class="btn-wrap"><a href="?action=show&id=<?= $item['id'] ?>" class="btn">
  Подробнее
  <span class="arrow">
    <svg class="arrow-icon" style="transform:translateY(1px);" width="26" height="16" viewBox="0 0 26 16" fill="none" >
      <path d="M25.707 8.70711C26.0975 8.31658 26.0975 7.68342 25.707 7.2929L19.343 0.928934C18.9525 0.538409 18.3193 0.538409 17.9288 0.928934C17.5383 1.31946 17.5383 1.95262 17.9288 2.34315L23.5857 8L17.9288 13.6569C17.5383 14.0474 17.5383 14.6805 17.9288 15.0711C18.3193 15.4616 18.9525 15.4616 19.343 15.0711L25.707 8.70711ZM-8.74228e-08 9L24.9999 9L24.9999 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor"/>
    </svg>
  </span>
      </a>
 </div>
 </div>
        </article>
    <?php endforeach; ?>
 <?php
  $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
  $page = max(1, min($page, $count_pages)); 
  ?>

  <div class="pagination">
  <?php
  $visible_pages = 3;

  if ($page == $count_pages) {
      $start = 1;
      $end = $count_pages;
  } else {
    if ($page <= $visible_pages) {
      $visible_pages = 3;
  } else {
      $visible_pages += 1;
  }
      $end = min($visible_pages, $count_pages);
  }

  for ($i = 1; $i <= $end; $i++): ?>
    <a href="?page=<?= $i ?>" class="<?= $i == $page ? 'active' : '' ?>"><?= $i ?></a>
  <?php endfor; ?>

  <?php if ($page < $count_pages): ?>
    <a href="?page=<?= $page + 1 ?>" class="pag-arrow">
      <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 10C2.44772 10 2 10.4477 2 11C2 11.5523 2.44772 12 3 12L3 10ZM18.466 11.7071C18.8565 11.3166 18.8565 10.6834 18.466 10.2929L12.102 3.92893C11.7115 3.53841 11.0783 3.53841 10.6878 3.92893C10.2973 4.31946 10.2973 4.95262 10.6878 5.34315L16.3447 11L10.6878 16.6569C10.2973 17.0474 10.2973 17.6805 10.6878 18.0711C11.0783 18.4616 11.7115 18.4616 12.102 18.0711L18.466 11.7071ZM3 12L17.7589 12L17.7589 10L3 10L3 12Z" fill="#841844"/>
      </svg>
    </a>
  <?php endif; ?>
  </div>


 </div>
</section>

