<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<? wp_head(); ?>
  </head>
  <body>
  
  
	<div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
						<? $firs_link = 1; ?>
						<? $menu = menu_mass('menu'); ?>
						<? foreach($menu as $item): ?>
							<li <? if($firs_link == 1): ?> class="active" <? endif; ?>><a href="<? echo $item['url'] ?>"><? echo $item['title'] ?></a></li>
							<? $firs_link = 2; ?>
						<? endforeach; ?>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="<?php bloginfo('template_url') ?>/img/h4-slide.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								iPhone <span class="primary">6 <strong>Plus</strong></span>
							</h2>
							<h4 class="caption subtitle">Dual SIM</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="<?php bloginfo('template_url') ?>/img/h4-slide2.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								by one, get one <span class="primary">50% <strong>off</strong></span>
							</h2>
							<h4 class="caption subtitle">school supplies & backpacks.*</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="<?php bloginfo('template_url') ?>/img/h4-slide3.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="<?php bloginfo('template_url') ?>/img/h4-slide4.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">& Phone</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
							<? $query = new WP_Query(array('post_type' => 'phone','category-phone' => 'phones','posts_per_page' => 10)); ?>
							<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
								<div class="single-product">
									<div class="product-f-image">
										<? $img = get_field('p_photo'); ?> 
										<? if(!empty($img['url'])): ?>
											<img src="<? echo $img['url']; ?>" alt="">
										<? endif; ?>
										
										<div class="product-hover">
											<a href="?add_cart=<? echo get_the_ID(); ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											<a href="<? the_permalink(); ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
										</div>
									</div>
									
									<h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
									
									<div class="product-carousel-price">
										<ins>$<? $field = get_field('p_old_price'); ?> <? if(!empty($field)): ?> <? echo $field; ?> <? endif; ?></ins> <del>$<? $field = get_field('p_price'); ?> <? if(!empty($field)): ?> <? echo $field; ?> <? endif; ?></del>
									</div> 
								</div>
							<?php endwhile; ?>
							<!-- post navigation -->
							<?php else: ?>
							<!-- no posts found -->
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="<?php bloginfo('template_url') ?>/img/brand1.png" alt="">
                            <img src="<?php bloginfo('template_url') ?>/img/brand3.png" alt="">
                            <img src="<?php bloginfo('template_url') ?>/img/brand4.png" alt="">
                            <img src="<?php bloginfo('template_url') ?>/img/brand5.png" alt="">
                            <img src="<?php bloginfo('template_url') ?>/img/brand6.png" alt="">
                            <img src="<?php bloginfo('template_url') ?>/img/brand1.png" alt="">
                            <img src="<?php bloginfo('template_url') ?>/img/brand2.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <? $query = new WP_Query(array('post_type' => 'phone','category-phone' => 'phones','posts_per_page' => 3,'orderby' => 'rand')); ?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="single-wid-product">
								<a href="<? the_permalink(); ?>">
									<? $img = get_field('p_photo'); ?> 
									<? if(!empty($img['url'])): ?>
										<img src="<? echo $img['url']; ?>" alt="" class="product-thumb">
									<? endif; ?>	
								</a>
								<h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
								<div class="product-wid-price">
									<ins>$400.00</ins> <del>$425.00</del>
								</div>                            
							</div>
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <? $query = new WP_Query(array('post_type' => 'phone','category-phone' => 'phones','posts_per_page' => 3,'orderby' => 'rand')); ?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="single-wid-product">
								<a href="<? the_permalink(); ?>">
									<? $img = get_field('p_photo'); ?> 
									<? if(!empty($img['url'])): ?>
										<img src="<? echo $img['url']; ?>" alt="" class="product-thumb">
									<? endif; ?>	
								</a>
								<h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
								<div class="product-wid-price">
									<ins>$400.00</ins> <del>$425.00</del>
								</div>                            
							</div>
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <? $query = new WP_Query(array('post_type' => 'phone','category-phone' => 'phones','posts_per_page' => 3,'orderby' => 'rand')); ?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="single-wid-product">
								<a href="<? the_permalink(); ?>">
									<? $img = get_field('p_photo'); ?> 
									<? if(!empty($img['url'])): ?>
										<img src="<? echo $img['url']; ?>" alt="" class="product-thumb">
									<? endif; ?>	
								</a>
								<h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
								<div class="product-wid-price">
									<ins>$400.00</ins> <del>$425.00</del>
								</div>                            
							</div>
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <? $cat = get_terms(array('taxonomy' => array('category-phone'), 'child_of' => 2));  ?>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
							<? foreach($cat as $item): ?>
								<li><a href="<? echo get_term_link($item->term_id) ?>"><? echo $item->name ?></a></li>
							<? endforeach; ?>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="<?php bloginfo('template_url') ?>/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="<?php bloginfo('template_url') ?>/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="<?php bloginfo('template_url') ?>/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bxslider.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/script.slider.js"></script>
	<? wp_footer(); ?>
  </body>
</html>