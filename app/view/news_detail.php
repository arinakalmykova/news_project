<section class="news-detail">
  <div class="navigation"><a href="javascript:history.back()">Главная /  </a><span><?= htmlspecialchars($item['title']) ?><span></div>
  <h1 class="title"><?= htmlspecialchars($item['title']) ?></h1>
  <article class="news-columns">
    <div class="news-text"> 
      <div class="date"><span><?= date('d.m.Y', strtotime($item['date'])) ?></span></div>
      <h2><?= strip_tags($item['announce']) ?></h2>
      <div class="paragraph"><?=$item['content']?></div>
        <div class="btn-wrap"><a href="javascript:history.back()" class="btn-detail">
  <span class="arrow">
    <svg class="arrow-icon" style="transform: rotate(180deg) translateY(-1px);" width="26" height="16" viewBox="0 0 26 16" fill="none" >
      <path d="M25.707 8.70711C26.0975 8.31658 26.0975 7.68342 25.707 7.2929L19.343 0.928934C18.9525 0.538409 18.3193 0.538409 17.9288 0.928934C17.5383 1.31946 17.5383 1.95262 17.9288 2.34315L23.5857 8L17.9288 13.6569C17.5383 14.0474 17.5383 14.6805 17.9288 15.0711C18.3193 15.4616 18.9525 15.4616 19.343 15.0711L25.707 8.70711ZM-8.74228e-08 9L24.9999 9L24.9999 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor"/>
    </svg>
  </span>Назад к новостям
      </a>
 </div>
    </div>
    <div class="news-image" style="background-image: url('/news_project/public/images/<?= $item['image'] ?>')">
    </div>
  </article>
</section>
