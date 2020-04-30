            
                <div class="news-sidebar-box">
                    <div class="normal-title">
                        <h2 class="margin-0">Featured Posts</h2>
                    </div>

					<ul class="media-list">
                        
                        <?php foreach($posts5 as $p5): ?>
						<span class="rightside-span">
							<a class="clearfix" href="<?php echo $p5->id; ?>/<?php echo prettyUrl($p5->title); ?>">
								<amp-img src="admin/<?php echo $p5->imagePathPlace(); ?>" layout="fixed" width="80" height="80" class='pull-left circle'>
                                    <!--<img decoding="async" class="i-amphtml-fill-content i-amphtml-replaced-content" src="admin/<?php // echo $p5->imagePathPlace(); ?>">-->
                                </amp-img>

								<div>
									<h4 class="margin-0"><?php echo $p5->title; ?></h4>
									<span class="margin-0"><?php echo formatDate($p5->created); ?></span>
								</div>

								<i class="fa fa-angle-right"></i>
							</a>
						</span>
                        <?php endforeach; ?>
                        
					</ul><!-- PHOTO-ROW ENDS -->
				</div><!-- SIDEBAR-BOX ENDS -->

                <div class="news-sidebar-box">
                    
                </div>

                <div class="news-sidebar-box">
                    <div class="normal-title">
                        <h2 class="margin-0">Categories</h2>
                    </div>
					
					<ul class="bordered-list">
                        
						<?php foreach ($categories as $cat): ?>            
                            <li>
                                <a href="Category/<?php echo $cat->id; ?>/<?php echo $cat->name; ?>" title="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></a>
                            </li>
                        <?php endforeach; ?>
                        
					</ul><!-- PHOTO-ROW ENDS -->
                    
				</div><!-- SIDEBAR-BOX ENDS -->

                <div class="news-sidebar-box">
                    <div class="normal-title">
                        <h2 class="margin-0">IPN Adverts</h2>
                    </div>
					
					
                    
				</div><!-- SIDEBAR-BOX ENDS -->

                <div class="news-sidebar-box">
                    
                </div>

                <div class="news-sidebar-box">
                    
                </div>