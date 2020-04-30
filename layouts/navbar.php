        <figure class="primary-bg">
            <a id="panel-logo" href="Home"><amp-img src="img/ipub_logo.png" width="120" height="105"></amp-img></a>

            <form id="panel-search" method="POST" action-xhr="<?php echo $webUrl; ?>" target="_top">
                <input type="search" class="panel-search" placeholder="Search..." name="mainSiteSearchQuery">
                <input type="submit">
            </form>
            <button on='tap:mainSideBar.toggle' class="fa fas-caret-left light-color"></button>
        </figure><!-- NAVBAR SEARCH ENDS -->

        <nav id="menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <a href="Home"><i class="fa fa-home"></i>Home</a>

        <amp-accordion>
            <section>
                <h6><span><i class="fa fa-archive"></i>Categories</span></h6>
                <div>

                    <?php foreach ($categories as $cat): ?>
                        <a href="Category/<?php echo $cat->id; ?>/<?php echo $cat->name; ?>" title="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></a>
                    <?php endforeach; ?>

                </div>
            </section>
        </amp-accordion>
            
            <a href="Advertise"><i class="fa fa-comment"></i>Advertise</a>
            <a href="Contact"><i class="fa fa-envelope"></i>Contact</a>
        </nav><!-- MENU ENDS -->

        <div class="divider colored"></div>

        <div>
            <!--<p class="margin-top-0"><strong>Address:</strong> Lipsum Street Lorem<br>Way PO 60009 Dolor/ALASKA</p>-->

            <p><strong>Phone:</strong> <a href="tel:+12345678">08033919051</a></p>
            <p class="margin-bottom-0"><strong>E-Mail:</strong> <a href="mailto:info@ipublicizenaija.com">info@ipublicizenaija.com</a></p>
        </div><!-- CONTACT INFORMATION ENDS -->

        <div>
            <a href="http://facebook.com/ipublicizenaija"> <i class="fab fa-facebook fa-2x fa-facebook-color"></i> </a>
            <a href="https://twitter.com/ipublicizenaija"> <i class="fab fa-twitter-square fa-2x fa-twitter-color"></i> </a>
            <a href="https://instagram.com/ipublicizenaija"> <i class="fab fa-instagram fa-2x fa-instagram-color"></i> </a>
            <a href="mailto:info@ipublicizenaija.com"> <i class="fas fa-at fa-2x"></i> </a>
        </div><!-- SOCIAL ICONS ENDS -->