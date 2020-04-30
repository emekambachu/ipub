<?php 
   if (!empty($posts)):
    foreach($posts as $post):
?>        
            <div class="col-md-9 col-sm-6">
				<div class="small-news-item">
					<a href="view_post.php?id=<?php echo $post->id; ?>" class="preview">
                        <amp-img src="admin/<?php echo $post->imagePathPlace(); ?>" layout="responsive" alt="<?php echo prettyUrl($post->title); ?>" title="<?php echo $post->title; ?>" width=320 height=200></amp-img>
                    </a>
					<div class="details">
						<a href="Post/<?php echo $post->id; ?>/<?php echo prettyUrl($post->title); ?>">
                            <h3><?php echo $post->title; ?></h3>
                        </a>
						<div class="meta clearfix">
                            <a href=""><i class="fa fa-user"></i> 
                                <?php echo $post->author; ?>
                            </a>
                            
                            <a href=""><i class="fa fa-eye"></i> 
                                <?php echo countPostViews($post->id); ?>
                            </a>
                            
							<a href="Category/<?php echo $post->cat_id; ?>/<?php echo catName($post->cat_id); ?>" title="<?php echo catName($post->cat_id); ?>">
                                <i class="fa fa-bars"></i> 
                                <?php echo catName($post->cat_id); ?>
                            </a>
							<a href="">
                                <i class="fa fa-clock-o"></i> 
                                <?php echo formatDate($post->created); ?>
                            </a>
						</div>
					</div>
				</div><!-- SMALL NEWS ITEM ENDS -->
			</div><!-- COL-XS-6 COL-SM-4 ENDS -->
            <?php endforeach; ?>
                
            <?php else: ?>
               <h3>No posts available for <?php echo catName($catId); ?></h3>
            <?php endif; ?>