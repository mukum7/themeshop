    <?php get_header(); ?>

<section class="hero-banner d-flex">
    <div class="container align-self-center">
        <div class="row justify-content-center ">
            <div class="col-xl-10 col-md-12 col-sm-12">

                <div class="hero-text">
                    <h1>Everything you need for your next creative project.</h1>
                    <p>Over 4.5 million digital products created by a global community of designers,
                        developers, photographers, illustrators & producers.</p>
                </div>
                <div class="main-search-form">
                    <div class="form-row row no-gutters ">

                        <div class="col-md-7 col-sm-12 pr-md-0">
                            <div class="form-group">
                                <input name="search" type="text" class="form-control border-radius-left" id="input-location" placeholder="Search theme and plugins">
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 pl-md-0">
                            <div class="form-group">
                                <select name="category" id="category" data-placeholder="Browse our Plugins">
                                    <option value="">Browse our Plugins</option>
                                    <option value="1">Theme 1</option>
                                    <option value="2">Theme 2</option>
                                    <option value="3">Theme 3</option>
                                    <option value="4">Theme 4</option>
                                    <option value="5">Theme 5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-12">
                            <button type="submit" class="btn btn-primary theme-button btn-search">Search Now!</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Our Wordpress Themes</h2>
                </div>
            </div>
        </div>
        <div class="row">
         <?php
            $current_page = get_query_var('paged');
            $per_page = get_option('posts_per_page');
            $offset = $current_page > 0 ? $per_page * ($current_page-1) : 0;
            $product_args = array(
                'post_type' => 'download',
                'posts_per_page' => $per_page,
                'offset' => $offset
            );
            $products = new WP_Query($product_args);
            if ($products->have_posts()) : $i = 1;
                while ($products->have_posts()) : $products->the_post(); ?>       
            <div class="col-lg-4 col-sm-6">
                <div class="product-list paid">
                    <div class="product-image">
                        <?php 
                        $image = false;
                        if( has_post_thumbnail( $post->ID )){
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'singe-post-thumbnail' ); 
                        }?>
                        <?php if( $image ): ?>
                          <img src="<?php echo $image[0]; ?>" alt="" class="img-fluid">
                        <?php endif; ?>
                        <div class="product_price">
                            <div class="price_tag">
                                <del><small></small></del>
                                <span><?php edd_price($post->ID); ?></span>
                            </div>
                        </div>
                        <div class="cover-overlay">
                            <div class="button-cluster">
                                <a href="<?php the_permalink(); ?>" class="details">details</a>
                                <a href="<?php echo get_field("edd_live_demo"); ?>" class="live-demo">live demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-tag">


                    <?php if (get_field('paid') == 1 ): ?>

                        <span class="badge badge-default badge-orange">Premium</span>
                        
                    <?php endif; ?>  

                    <?php 

                    if(edd_has_variable_prices(get_the_ID())){
                       echo '<span class="badge badge-default badge-yellow">Sale</span>';

                    } ?>
                       

                    <?php 

                        $newtillvalue= strtotime(get_field("new_till")); 
                        //echo "DIRECT: " . get_field("new_till");
                        $currentdate = time();
                        //echo "NEW: " . $newtillvalue;
                        //echo "<br />";
                        //echo "CURRENT: " . $currentdate;
                        if( $newtillvalue > $currentdate){

                            echo '<span class="badge badge-default badge-yellow">New</span>';
                        }

                    ?>

                           
                        </div>



                       

                        <div class="product-info">
                            <h2 class="product-title"><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <div class="buy-now">
                                <div class="product-action">
                                    <div class="row no-gutters">
                                        <?php if( get_field('free_download') == 1 && get_field("paid") == 1 ): ?>
                                            <div class="col-6">
                                                <div class="download-free-button">
                                                    <p>Download<span class="highlight"> free version</span></p>
                                                    <a href="<?php echo get_field("free_download_url"); ?>" class="btn btn-primary btn-download">Download</a>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="add-to-cart">
                                                    <p>Purchase<span class="highlight"> premium version</span></p>
                                                   <?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID(),'price'=> false, 'class'=>'btn btn-primary theme-button buynow-btn', 'text'=>'Add to Cart', 'style'=>'')); ?>

                                                </div>
                                            </div>
                                        <?php endif; ?>


                                    <?php if( get_field('free_download') == 1 && get_field("paid") != 1 ): ?>
                                        <div class="buy-now">
                                            <div class="product-action">
                                                <div class="row no-gutters">
                                                    <div class="col-12">
                                                        <div class="download-free-button">
                                                            <p>Download<span class="highlight"> free version</span></p>
                                                            <a href="<?php echo get_field("free_download_url"); ?>" class="btn btn-primary btn-download">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>


                                    <?php if( get_field('free_download') != 1 && get_field("paid") == 1 ): ?>
                                        <div class="buy-now">
                                            <div class="product-action">
                                                <div class="row no-gutters">
                                                    <div class="col-12">
                                                        <div class="download-free-button">
                                                            <p>Purchase<span class="highlight"> premium version</span></p>
                                                           <?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID(),'price'=> false, 'class'=>'btn btn-primary theme-button buynow-btn', 'text'=>'Add to Cart', 'style'=>'')); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stickers">
                        <div class="premium1">
                            <img src="img/premium.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; endif;?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="more-item">
                    <a href="http://themeshop.local/downloads/category/wordpress-themes/" class="btn btn-primary theme-button more-item-btn">View All Wordpress Themes</a>
                </div>
            </div>
        </div>



    </div>
</section>




<section class="subscription">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div class="subscription_body row">
                    <div class="subscription_box col-lg-6">
                        <div class="icon-block">
                            <i class="icon ion-ios-email-outline"></i>
                        </div>
                        <div class="subscription_header">
                            <h2>Subscribe to our Newsletter</h2>
                            <p>And receive the latest news & offers. </p>
                        </div>
                    </div>
                    <form class="col-lg-6 subscription_form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email..." aria-describedby="btnGroupAddon2">
                        <button class="btn btn-secondary input-group-addon subscription-btn" type="submit">Subscribe</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>