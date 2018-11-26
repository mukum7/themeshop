
<?php get_header();?>


<section class="single-product-block">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-lg-4">
                <div class="single-product-img">
                    <?php 
                        $image = false;
                        if( has_post_thumbnail( $post->ID )){
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'singe-post-thumbnail' ); 
                        }?>
                        <?php if( $image ): ?>
                          <img src="<?php echo $image[0]; ?>" alt="" class="img-fluid img-thumbnail">
                    <?php endif; ?>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card single-product-details">
                    <div class="card-body">
                        <h2>Product Info</h2>

                        <p><span class="info-title">Upload Date: </span><?php the_field('upload_date'); ?></p>
                        <p><span class="info-title">Files Included: </span><?php the_field('files_included'); ?></p>
                        <p><span class="info-title">Dimensions: </span> <?php  the_field('dimensions'); ?></p>
                        <p><span class="info-title">Tags: </span><?php  the_field('tags'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card custom-block">
                    <div class="card-body">
                        <h2 class="text-center">Purchase Now</h2>
                        <div class="atc text-center">

                        	
                           
                          <?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID(),'price'=> false, 'class'=>'btn btn-primary theme-button buynow-btn', 'text'=>'Add to Cart', 'style'=>'')); ?>
                                    
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                <div class="single-page-button-cluster text-center">

                    <?php if(get_field('free_download') == 1 ): ?>
                    <a href="<?php echo get_field("free_download_url"); ?>" class="btn btn-primary theme-button1">Download the Free Version</a>
                    <?php endif; ?>
                    <a href="<?php echo get_field("edd_live_demo"); ?>" class="btn btn-primary theme-button1">View Live Demo</a>
                    <a href="" class="btn btn-primary theme-button1">View Documentation</a>
                </div>


            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="single-product-tabs">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="free-premium-tab" data-toggle="tab" href="#free-premium" role="tab" aria-controls="free-premium" aria-selected="false">Free vs Premium</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="screenshots-tab" data-toggle="tab" href="#screenshots" role="tab" aria-controls="screenshots" aria-selected="false">Screenshots</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="qna-tab" data-toggle="tab" href="#qna" role="tab" aria-controls="qna" aria-selected="false">Questions & Answers</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <div class="overview-content">
                                <div class="row">
                                    <div class="col-md-8">
                                      
                                      <?php the_excerpt();?> 
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <h2>Quick Info</h2>
                                        <div class="quick-info">
                                            <table class="quick-info-table table-bordered">
                                                <tbody><tr>
                                                    <th>Requires:</th>
                                                    <td><?php echo the_field('requires'); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Compatible up to:</th>
                                                    <td><?php echo the_field('compatible_up_to'); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Minimum PHP version:</th>
                                                    <td><?php echo the_field('minimum_php_version'); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Version:</th>
                                                    <td><?php echo the_field('version'); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Released:</th>
                                                    <td><?php echo the_field('released'); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>100% WPML Compatible:</th>
                                                        <?php if(get_field('100_wpwl_compatible') == 0 ): ?>
                                                        <?php  echo '<td>yes</td>'; ?>
                                                       
                                                        <?php else : ?> 
                                                                                                        
                                                        <?php  echo '<td>No</td>'; ?>
                                                        <?php endif; ?>
                                                </tr>
                                                
                                                <tr>
                                                    <th>Translation ready:</th>
                                                    <?php if(get_field('translation_ready') == 0 ): ?>
                                                    <?php  echo "<td>yes</td>"; ?>
                                                   
                                                    <?php else : ?> 

                                                    <?php  echo "<td>No</td>"; ?>
                                                    <?php endif; ?>
                                                </tr>
                                                <tr>
                                                    <th>Languages:</th>
                                                    <td><?php echo the_field('language'); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Support to:</th>
                                                    <td>
                                                        <?php echo the_field('support_to_'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>GDPR Compliant:</th>
                                                    <td><?php echo the_field('gdpr_compliant'); ?> </td>
                                                </tr>
                                                </tbody></table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="free-premium" role="tabpanel" aria-labelledby="free-premium-tab">
                            <div class="free-premium-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php $freefeatures = get_field_object('free_features'); ?>
                                        <h2><?php echo $freefeatures['label'] ?></h2>
                                        <ul class="list-unstyled compare-list">
                                            <li><?php echo $freefeatures['value'] ?></li>
                                           
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <?php $premiumfeatures = get_field_object('premium_features'); ?>
                                        <h2><?php echo $premiumfeatures['label']; ?></h2>
                                        <ul class="list-unstyled compare-list">
                                            <li><?php echo $premiumfeatures['value'] ?></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="screenshots" role="tabpanel" aria-labelledby="screenshots-tab">
                            <div class="screenshots-content">
                                <ul id="lightgallery" class="list-unstyled row">
                                    <li class="col-sm-6 col-md-4 single-screenshot" data-src="img/product/product1.png" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                        <a href="">
                                            <img class="img-fluid" src="img/product/product1.png">
                                            <div class="demo-gallery-poster">
                                                <img src="img/zoom.png">
                                            </div>
                                        </a>
                                        <div class="caption-block">
                                            <p class="text-center">Screenshot 1</p>
                                        </div>
                                    </li>

                                    <li class="col-sm-6 col-md-4 single-screenshot" data-src="img/product/product2.png" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                        <a href="">
                                            <img class="img-fluid" src="img/product/product2.png">
                                            <div class="demo-gallery-poster">
                                                <img src="img/zoom.png">
                                            </div>
                                        </a>
                                        <div class="caption-block">
                                            <p class="text-center">Screenshot 2</p>
                                        </div>
                                    </li>

                                    <li class="col-sm-6 col-md-4 single-screenshot" data-src="img/product/product3.png" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                        <a href="">
                                            <img class="img-fluid" src="img/product/product3.png">
                                            <div class="demo-gallery-poster">
                                                <img src="img/zoom.png">
                                            </div>
                                        </a>
                                        <div class="caption-block">
                                            <p class="text-center">Screenshot 3</p>
                                        </div>
                                    </li>

                                    <li class="col-sm-6 col-md-4 single-screenshot" data-src="img/product/product4.png" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                        <a href="">
                                            <img class="img-fluid" src="img/product/product4.png">
                                            <div class="demo-gallery-poster">
                                                <img src="img/zoom.png">
                                            </div>
                                        </a>
                                        <div class="caption-block">
                                            <p class="text-center">Screenshot 4</p>
                                        </div>
                                    </li>

                                    <li class="col-sm-6 col-md-4 single-screenshot" data-src="img/product/product5.png" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                        <a href="">
                                            <img class="img-fluid" src="img/product/product5.png">
                                            <div class="demo-gallery-poster">
                                                <img src="img/zoom.png">
                                            </div>
                                        </a>
                                        <div class="caption-block">
                                            <p class="text-center">Screenshot 5</p>
                                        </div>
                                    </li>

                                    <li class="col-sm-6 col-md-4 single-screenshot" data-src="img/product/product6.png" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                        <a href="">
                                            <img class="img-fluid" src="img/product/product6.png">
                                            <div class="demo-gallery-poster">
                                                <img src="img/zoom.png">
                                            </div>
                                        </a>
                                        <div class="caption-block">
                                            <p class="text-center">Screenshot 6</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="reviews-content">
                                <div class="row">
                                    <div class="col 12">
                                       <?php dynamic_sidebar('reviews_bar'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="qna" role="tabpanel" aria-labelledby="qna-tab">
                            <div class="qna-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Questions Asked by the Customers</h2>
                                        <div id="accordion" role="tablist">
                                            <div class="card">
                                                <div class="card-header" id="headingOne" role="tab">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            <?php echo the_field('question1'); ?>
                                                        </a>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <?php echo the_field('answer1'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Question #2
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Question #3
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="question-form">
                                            <h2>Do you have any question for us?</h2>
                                            <form action="">
                                                <div class="form-row">
                                                    <div class="form-group col-sm-6">
                                                        <input type="text" class="form-control" placeholder="Full Name">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Add your question here"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary theme-button">Submit Now!</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Related Products</h2>
            </div>
        </div>
        <div class="row product-slider">
            <div class="col">
                <div class="product-list paid">
                    <div class="product-image">
                        <img src="img/product/product1.png" alt="" class="img-fluid">
                        <div class="product_price">
                            <div class="price_tag">
                                <del><small>$</small>40</del>
                                <span><small>$</small>24</span>
                            </div>
                        </div>
                        <div class="cover-overlay">
                            <div class="button-cluster">
                                <a href="" class="details">details</a>
                                <a href="" class="live-demo">live demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-body">
                        <!--<div class="product-tag">-->
                        <!--<span class="badge badge-default badge-purple">Premium</span>-->
                        <!--<span class="badge badge-default badge-yellow">New</span>-->
                        <!--<span class="badge badge-default badge-orange">Sale</span>-->
                        <!--</div>-->

                        <div class="product-info">
                            <h2 class="product-title">ICO Token- Multipurpose theme</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet, sem id lobortis interdum, odio lacus luctus lacus.</p>

                            <div class="buy-now">
                                <div class="product-action">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <div class="download-free-button">
                                                <p>Download<span class="highlight"> free version</span></p>
                                                <a href="" class="btn btn-primary btn-download">Download</a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="add-to-cart">
                                                <p>Purchase<span class="highlight"> premium version</span></p>
                                                <a href="#" class="btn btn-primary theme-button buynow-btn">Add to Cart</a>
                                            </div>
                                        </div>
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

            <div class="col">
                <div class="product-list free">
                    <div class="product-image">
                        <img src="img/product/product2.png" alt="" class="img-fluid">
                        <div class="product_price">
                            <div class="price_tag price_free">
                                <span>free</span>
                            </div>
                        </div>
                        <div class="cover-overlay">
                            <div class="button-cluster">
                                <a href="" class="details">details</a>
                                <a href="" class="live-demo">live demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-body">
                        <!--<div class="product-tag">-->
                        <!--<span class="badge badge-default badge-purple">Premium</span>-->
                        <!--<span class="badge badge-default badge-yellow">New</span>-->
                        <!--<span class="badge badge-default badge-orange">Sale</span>-->
                        <!--</div>-->

                        <div class="product-info">
                            <h2 class="product-title">ICO Token- Multipurpose theme</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet, sem id lobortis interdum, odio lacus luctus lacus.</p>

                            <div class="buy-now">
                                <div class="product-action">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="download-free-button">
                                                <p>Download<span class="highlight"> free version</span></p>
                                                <a href="" class="btn btn-primary btn-download">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product-list paid">
                    <div class="product-image">
                        <img src="img/product/product1.png" alt="" class="img-fluid">
                        <div class="product_price">
                            <div class="price_tag">
                                <del><small>$</small>40</del>
                                <span><small>$</small>24</span>
                            </div>
                        </div>
                        <div class="cover-overlay">
                            <div class="button-cluster">
                                <a href="" class="details">details</a>
                                <a href="" class="live-demo">live demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-body">
                        <!--<div class="product-tag">-->
                        <!--<span class="badge badge-default badge-purple">Premium</span>-->
                        <!--<span class="badge badge-default badge-yellow">New</span>-->
                        <!--<span class="badge badge-default badge-orange">Sale</span>-->
                        <!--</div>-->

                        <div class="product-info">
                            <h2 class="product-title">ICO Token- Multipurpose theme</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet, sem id lobortis interdum, odio lacus luctus lacus.</p>

                            <div class="buy-now">
                                <div class="product-action">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <div class="download-free-button">
                                                <p>Download<span class="highlight"> free version</span></p>
                                                <a href="" class="btn btn-primary btn-download">Download</a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="add-to-cart">
                                                <p>Purchase<span class="highlight"> premium version</span></p>
                                                <a href="#" class="btn btn-primary theme-button buynow-btn">Add to Cart</a>
                                            </div>
                                        </div>
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

            <div class="col">
                <div class="product-list free">
                    <div class="product-image">
                        <img src="img/product/product2.png" alt="" class="img-fluid">
                        <div class="product_price">
                            <div class="price_tag price_free">
                                <span>free</span>
                            </div>
                        </div>
                        <div class="cover-overlay">
                            <div class="button-cluster">
                                <a href="" class="details">details</a>
                                <a href="" class="live-demo">live demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-body">
                        <!--<div class="product-tag">-->
                        <!--<span class="badge badge-default badge-purple">Premium</span>-->
                        <!--<span class="badge badge-default badge-yellow">New</span>-->
                        <!--<span class="badge badge-default badge-orange">Sale</span>-->
                        <!--</div>-->

                        <div class="product-info">
                            <h2 class="product-title">ICO Token- Multipurpose theme</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet, sem id lobortis interdum, odio lacus luctus lacus.</p>

                            <div class="buy-now">
                                <div class="product-action">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="download-free-button">
                                                <p>Download<span class="highlight"> free version</span></p>
                                                <a href="" class="btn btn-primary btn-download">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>













<?php get_footer();?>