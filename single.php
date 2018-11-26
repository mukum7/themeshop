<?php get_header(); ?>


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
                    <img src="img/product/single-product.png" alt="" class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card single-product-details">
                    <div class="card-body">
                        <h2>Product Info</h2>
                        <p><span class="info-title">Upload Date:</span> August 18th, 2018</p>
                        <p><span class="info-title">Files Included:</span> PSD -Photoshop CS6, AI Illustrator CS3, Jpeg, Png</p>
                        <p><span class="info-title">Dimensions:</span> 4500x2800 PX</p>
                        <p><span class="info-title">Tags:</span> <a href="">Photoshop</a>, <a href="">flat</a>, <a
                                href="">icon</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card custom-block">
                    <div class="card-body">
                        <h2 class="text-center">Purchase Now</h2>
                        <div class="atc text-center">
                            <a href="#" class="btn btn-primary theme-button buynow-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="single-page-button-cluster text-center">
                    <a href="" class="btn btn-primary theme-button1">Download the Free Version</a>
                    <a href="" class="btn btn-primary theme-button1">View Live Demo</a>
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
                                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                        <p>Cras commodo pellentesque eleifend. Ut a libero neque. Praesent sed aliquam eros. Praesent quis faucibus augue. Donec diam augue, aliquam et ipsum ac, sollicitudin pretium ex. Praesent non ultrices diam, tincidunt sodales odio. Donec ut nisl eget sem pharetra sollicitudin aliquet sed felis. Nulla et mollis velit. Nullam sodales ante vel erat faucibus ultricies. Praesent a imperdiet lectus. Duis id dapibus nisi. In ac semper mauris. Quisque sed egestas est. Etiam vitae lacus non urna ultrices facilisis. Maecenas varius commodo eros fringilla consequat.</p>
                                        <p>Aenean convallis arcu magna, vitae pharetra ipsum auctor quis. Sed non ornare diam. Quisque eget posuere turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla sit amet venenatis ligula. Sed interdum elementum fringilla. Cras fringilla interdum velit vel condimentum. Sed ultricies est ac est malesuada interdum.</p>
                                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec luctus enim eget massa placerat pellentesque ac non risus. Donec suscipit leo eu diam fringilla elementum. Duis pretium turpis vel nisi pellentesque, sit amet fermentum ipsum fringilla. Nam convallis ut sapien quis faucibus. Proin ullamcorper blandit tempus. Aenean maximus aliquam venenatis. Maecenas quis porttitor nisi.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h2>Quick Info</h2>
                                        <div class="quick-info">
                                            <table class="quick-info-table table-bordered">
                                                <tbody><tr>
                                                    <th>Requires:</th>
                                                    <td>WordPress 4.6 or higher</td>
                                                </tr>
                                                <tr>
                                                    <th>Compatible up to:</th>
                                                    <td>WordPress 4.9.x</td>
                                                </tr>
                                                <tr>
                                                    <th>Requires:</th>
                                                    <td>WooCommerce 3.2.x or higher</td>
                                                </tr>
                                                <tr>
                                                    <th>Compatible up to:</th>
                                                    <td>WooCommerce 3.4.x</td>
                                                </tr>
                                                <tr>
                                                    <th>Minimum PHP version:</th>
                                                    <td>5.4</td>
                                                </tr>
                                                <tr>
                                                    <th>Version:</th>
                                                    <td>1.0.7</td>
                                                </tr>
                                                <tr>
                                                    <th>Released:</th>
                                                    <td>2018-02-26</td>
                                                </tr>
                                                <tr>
                                                    <th>100% WPML Compatible:</th>
                                                    <td>yes</td>
                                                </tr>
                                                <tr>
                                                    <th>Translation ready:</th>
                                                    <td>yes</td>
                                                </tr>
                                                <tr>
                                                    <th>Languages:</th>
                                                    <td>Dutch, English, Italian, Spanish</td>
                                                </tr>
                                                <tr>
                                                    <th>Support to:</th>
                                                    <td>
                                                        All ThemeShop themes
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>GDPR Compliant:</th>
                                                    <td>
                                                        UNNECESSARY </td>
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
                                        <h2>Features of Free Version</h2>
                                        <ul class="list-unstyled compare-list">
                                            <li>Create restriction rules for all the payment gateways enabled</li>
                                            <li>Set one or more conditions for each restriction rule</li>
                                            <li>Disable the payment gateway when the cart includes one or more products of those selected</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Features of Premium Version</h2>
                                        <ul class="list-unstyled compare-list">
                                            <li>Create restriction rules for all the payment gateways enabled</li>
                                            <li>Set one or more conditions for each restriction rule</li>
                                            <li>Notify the lack of a payment gateway with a custom message at the checkout</li>
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
                                    <div class="col-md-6">
                                        <h2>Customer's Reviews</h2>
                                        <div class="ratings-block">
                                            <span class="star-rating">
                                                <span class="rating-value" style="width: 50%"></span>
                                            </span>
                                            <span class="rating-count">100 Reviews</span>
                                        </div>
                                        <div class="rating-info">
                                            <div class="rating-bar-single">
                                                <div class="row">
                                                    <div class="col stars">
                                                        5 Stars
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col review-count">
                                                        50
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="rating-bar-single">
                                                <div class="row">
                                                    <div class="col stars">
                                                        4 Stars
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col review-count">
                                                        15
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="rating-bar-single">
                                                <div class="row">
                                                    <div class="col stars">
                                                        3 Stars
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col review-count">
                                                        10
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="rating-bar-single">
                                                <div class="row">
                                                    <div class="col stars">
                                                        2 Stars
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col review-count">
                                                        15
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="rating-bar-single">
                                                <div class="row">
                                                    <div class="col stars">
                                                        1 Star
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width:10%" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col review-count">
                                                        10
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card custom-block add-review">
                                            <div class="card-body">
                                                <h2 class="text-center">Are you a customer? Submit a Review</h2>
                                                <div class="atc text-center">
                                                    <a href="#" class="btn btn-primary theme-button buynow-btn">Submit Review</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-review-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="text-center">Most recent Reviews</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card single-user-review">
                                            <div class="card-body">
                                                <div class="user-info">
                                                    <div class="media">
                                                        <img class="d-flex mr-3" src="https://via.placeholder.com/80x80" >
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Sheldon Cooper</h5>
                                                            <p>Los Angeles, California</p>
                                                            <p>– September 14, 2018</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-user-review-content">
                                                    <h3>Good support</h3>
                                                    <p>I've experienced a couple of issues but nothing serious. I had the chance to know how ThemeShop support service works and how great they are when it comes to solve problems and help you. Professional and friendly at the same time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card single-user-review">
                                            <div class="card-body">
                                                <div class="user-info">
                                                    <div class="media">
                                                        <img class="d-flex mr-3" src="https://via.placeholder.com/80x80" >
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Sheldon Cooper</h5>
                                                            <p>Los Angeles, California</p>
                                                            <p>– September 14, 2018</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-user-review-content">
                                                    <h3>Good support</h3>
                                                    <p>I've experienced a couple of issues but nothing serious. I had the chance to know how ThemeShop support service works and how great they are when it comes to solve problems and help you. Professional and friendly at the same time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card single-user-review">
                                            <div class="card-body">
                                                <div class="user-info">
                                                    <div class="media">
                                                        <img class="d-flex mr-3" src="https://via.placeholder.com/80x80" >
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Sheldon Cooper</h5>
                                                            <p>Los Angeles, California</p>
                                                            <p>– September 14, 2018</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-user-review-content">
                                                    <h3>Good support</h3>
                                                    <p>I've experienced a couple of issues but nothing serious. I had the chance to know how ThemeShop support service works and how great they are when it comes to solve problems and help you. Professional and friendly at the same time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card single-user-review">
                                            <div class="card-body">
                                                <div class="user-info">
                                                    <div class="media">
                                                        <img class="d-flex mr-3" src="https://via.placeholder.com/80x80" >
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Sheldon Cooper</h5>
                                                            <p>Los Angeles, California</p>
                                                            <p>– September 14, 2018</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-user-review-content">
                                                    <h3>Good support</h3>
                                                    <p>I've experienced a couple of issues but nothing serious. I had the chance to know how ThemeShop support service works and how great they are when it comes to solve problems and help you. Professional and friendly at the same time.</p>
                                                </div>
                                            </div>
                                        </div>
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
                                                            Question #1
                                                        </a>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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










<section>

	<div class="title">
		
		<h1><?php the_title(); ?></h1>
 	</div>
	
	<div class="container">
		<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; //end of the loop ?>
	</div>
</section>
<?php get_footer(); ?>





