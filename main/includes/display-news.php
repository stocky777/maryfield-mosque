<?php
require_once "./classes/news.php";
$news = new News();
$allnews = $news->fetch_news();?>

<?php if(!empty($allnews)): ?>
<?php foreach($allnews as $row):?>
<a href="#" class="list-group-item list-group-item-action">
    <h5 class="mb-1"><?=$row['title']?></h5>
    <p class="mb-1"><?=$row['content']?></p>
    <?php if (!empty($row['image'])):?>
        <img class="img-fluid rounded" src="../images/<?=$row['image']?>" alt="">
    <?php endif; ?>
    <p class="mb-0"><?=$row['mydate'] | $row['user_id']?></p>
</a>
<?php endforeach;?>
<?php else: ?>
    <p>No news to show come back later</p>
<?php endif; ?>





