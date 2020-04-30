<?php foreach ($postsRand as $pr): ?>

    <a href="Post/<?php echo $pr->id; ?>/<?php echo prettyUrl($pr->title); ?>" class="news-carousel-item">
        <amp-img  src="admin/<?php echo $pr->imagePathPlace(); ?>" width=400 height=300></amp-img>
        <div class="news-carousel-item-caption">
            <h4 class="margin-0"><?php echo $pr->title; ?></h4>
            <span><i class="fa fa-bars"></i> <?php echo catName($pr->cat_id); ?></span>
        </div>
    </a>

<?php endforeach; ?>