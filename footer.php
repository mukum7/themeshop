
<footer>
    <div class="top-footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/foot_logo.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer-text-copy">
                        <h2>PREMIUM WORDPRESS THEMES FOR ANY DEMANDS</h2>
                        <p>Sed placerat leo eleifend metus porta feugiat. Vestibulum facilisis tincidunt urna at sodales. Proin congue lorem neque, eu dignissim libero molestie sit amet. Aliquam consequat nulla in diam efficitur, ac bibendum turpis molestie. Donec pharetra velit leo, nec venenatis augue mattis nec. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="theme-separator">
    <div class="bottom-footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2>themeshop</h2>
                        <?php
                         wp_nav_menu( array(
                             'theme_location' => 'themeshop-menu', // Defined when registering the menu                         
                                                        
                         ) );
                         ?>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2>other products</h2>
                        <ul>
                           <?php
                         wp_nav_menu( array(
                             'theme_location' => 'otherproduct-menu', // Defined when registering the menu                         
                                                        
                         ) );
                         ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2>support</h2>
                        <ul>
                              <?php
                            wp_nav_menu( array(
                                'theme_location' => 'support-menu', // Defined when registering the menu                         
                                                           
                            ) );
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2>we recommend</h2>
                        <ul>
                              <?php
                            wp_nav_menu( array(
                                'theme_location' => 'recommend-menu', // Defined when registering the menu                         
                                                           
                            ) );
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="theme-separator">

    <div class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright-copy">
                        <p>© 2016 Themeshop. All Rights Reserved.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>