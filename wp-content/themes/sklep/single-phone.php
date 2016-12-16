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
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2><? the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
						<? $query = new WP_Query(array('post_type' => 'phone','category-phone' => 'phones','posts_per_page' => 4,'orderby' => 'rand')); ?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="thubmnail-recent">
								<? $img = get_field('p_photo'); ?> 
								<? if(!empty($img['url'])): ?>
									<img src="<? echo $img['url']; ?>" class="recent-thumb" alt="">
								<? endif; ?>
								<h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
								<div class="product-sidebar-price">
									<ins>$<? $field = get_field('p_old_price'); ?> <? if(!empty($field)): ?> <? echo $field; ?> <? endif; ?></ins> <del>$<? $field = get_field('p_price'); ?> <? if(!empty($field)): ?> <? echo $field; ?> <? endif; ?></del>
								</div>                             
							</div>
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
							<? $query = new WP_Query(array('post_type' => 'phone','category-phone' => 'phones','posts_per_page' => 6,'orderby' => 'rand')); ?>
							<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
								<li><a href="<? the_permalink(); ?>"><? the_title(); ?></a></li>
							<?php endwhile; ?>
							<!-- post navigation -->
							<?php else: ?>
							<!-- no posts found -->
							<?php endif; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        
						
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
							<div class="row">
								<div class="col-sm-6">
									<div class="product-images">
										
										<div class="product-main-img">
											<? $img = get_field('p_photo'); ?> 
											<? if(!empty($img['url'])): ?>
												<img src="<? echo $img['url']; ?>" alt="">
											<? endif; ?>
										</div>
										
										<div class="product-gallery">
											<? $gallery = get_field('p_gallery'); ?>
											<? foreach($gallery as $img): ?>
												<? if(!empty($img['url'])): ?>
													<img src="<? echo $img['url']; ?>" alt="">
												<? endif; ?>
											<? endforeach; ?>
										</div>
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="product-inner">
										<h2 class="product-name"><? the_title(); ?></h2>
										<div class="product-inner-price">
											<ins>$<? $field = get_field('p_old_price'); ?> <? if(!empty($field)): ?> <? echo $field; ?> <? endif; ?></ins> <del>$<? $field = get_field('p_price'); ?> <? if(!empty($field)): ?> <? echo $field; ?> <? endif; ?></del>
										</div>    
										
										<form action="" class="cart">
											<a href="?add_cart=<? echo get_the_ID(); ?>">Add to cart</a>
										</form>   
										
										
										
										<div role="tabpanel">
											<ul class="product-tab" role="tablist">
												<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
											</ul>
											<div class="tab-content">
												<div role="tabpanel" class="tab-pane fade in active" id="home">
													<h2>Product Description</h2>  
													<? $field = get_field('p_description'); ?> 
													<? if(!empty($field)): ?>
														<? echo $field; ?>
													<? endif; ?>
												</div>
												<div role="tabpanel" class="tab-pane fade" id="profile">
													<h2>Reviews</h2>
													<div class="submit-review">
														<p><label for="name">Name</label> <input name="name" type="text"></p>
														<p><label for="email">Email</label> <input name="email" type="email"></p>
														<div class="rating-chooser">
															<p>Your rating</p>

															<div class="rating-wrap-post">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>
														</div>
														<p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
														<p><input type="submit" value="Submit"></p>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
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
        </div>
    </div>


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
    </div>
   
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
	
	<? wp_footer(); ?>
  </body>
</html>