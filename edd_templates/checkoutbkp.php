<?php
/**
 *  This template is used to display the Checkout page when items are in the cart
 */

global $post; ?>



<!-- <section class="themeshop-cart-message">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success" role="alert">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <p><span class="alert-text">Product successfully added to your cart.</span></p>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <span><a href="" class="btn btn-primary theme-button">Continue Shopping</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->



<section class="themeshop-cart-block">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="themeshop-cart">
                    <table class="table">
                        <thead>
                        <tr>
                            <?php do_action( 'edd_checkout_table_header_first' ); ?>
                            
                            <th></th>
                            <th scope="col"><?php _e( 'PRODUCT', 'easy-digital-downloads' ); ?></th>
                            <th scope="col"><?php _e( 'PRICE', 'easy-digital-downloads' ); ?></th>
                            <th scope="col"><?php _e( 'ACTION', 'easy-digital-downloads' ); ?></th>
                            <?php do_action( 'edd_checkout_table_header_last' ); ?>
                        </tr>
                        </thead>
                        <tbody>
                            <tr></tr>
                            <?php $cart_items = edd_get_cart_contents(); ?>
                            <?php do_action( 'edd_cart_items_before' ); ?>
                            <?php if ( $cart_items ) : ?>
                            <?php foreach ( $cart_items as $key => $item ) : ?>
                            <tr>
                                <?php do_action( 'edd_checkout_table_body_first', $item ); ?>
                                <td class="delete">
                                    <i class="icon ion-ios-close-outline"></i>
                                </td>
                                <td class="product-overview">

                                    <?php
                                        if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $item['id'] ) ) {
                                            echo '<div class="product-img">';
                                                echo get_the_post_thumbnail( $item['id'], apply_filters( 'edd_checkout_image_size', array( 120,90 ) ) );
                                            echo '</div>';
                                        }
                                        $item_title = edd_get_cart_item_name( $item );
                                        echo '<div class="product-detail"><p class="edd_checkout_cart_item_title">' . esc_html( $item_title ) . '</p></div>';

                                        /**
                                         * Runs after the item in cart's title is echoed
                                         * @since 2.6
                                         *
                                         * @param array $item Cart Item
                                         * @param int $key Cart key
                                         */
                                        do_action( 'edd_checkout_cart_item_title_after', $item, $key );
                                    ?>



                                </td>
                                <td class="product-price">
                                    <?php
                                         echo edd_cart_item_price( $item['id'], $item['options'] );
                                         do_action( 'edd_checkout_cart_item_price_after', $item );
                                     ?>
                                </td>


                               <td class="edd_cart_actions">
                                   <?php if( edd_item_quantities_enabled() && ! edd_download_quantities_disabled( $item['id'] ) ) : ?>
                                       <input type="number" min="1" step="1" name="edd-cart-download-<?php echo $key; ?>-quantity" data-key="<?php echo $key; ?>" class="edd-input edd-item-quantity" value="<?php echo edd_get_cart_item_quantity( $item['id'], $item['options'] ); ?>"/>
                                       <input type="hidden" name="edd-cart-downloads[]" value="<?php echo $item['id']; ?>"/>
                                       <input type="hidden" name="edd-cart-download-<?php echo $key; ?>-options" value="<?php echo esc_attr( json_encode( $item['options'] ) ); ?>"/>
                                   <?php endif; ?>
                                   <?php do_action( 'edd_cart_actions', $item, $key ); ?>
                                   <a class="edd_cart_remove_item_btn" href="<?php echo esc_url( wp_nonce_url( edd_remove_item_url( $key ), 'edd-remove-from-cart-' . $key, 'edd_remove_from_cart_nonce' ) ); ?>"><?php _e( 'Remove', 'easy-digital-downloads' ); ?></a>
                               </td>
                               <?php do_action( 'edd_checkout_table_body_last', $item ); ?>

                            </tr>
                             <?php endforeach; ?>
                            <?php endif; ?>
                            <?php do_action( 'edd_cart_items_middle' ); ?>
                                                        
                        </tbody>
                        <tfoot>
                            <tr> 
                                <td></td>
                                <td>
                                    <?php do_action( 'edd_checkout_table_footer_first' ); ?>
                                    <th colspan="<?php echo edd_checkout_cart_columns(); ?>"><?php _e( 'Total', 'easy-digital-downloads' ); ?>: <span class="edd_cart_amount" data-subtotal="<?php echo edd_get_cart_subtotal(); ?>" data-total="<?php echo edd_get_cart_total(); ?>"><?php edd_cart_total(); ?></span></th>
                                    <?php do_action( 'edd_checkout_table_footer_last' ); ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>














                <div class="payment-details-form">
                    <form action="">
                        <div class="form-header">
                             <h2><?php echo apply_filters('edd_checkout_personal_info_text', __('Personal Info', 'edd')); ?> <span class="members">Already have an account? <a href="#">Login</a></span></h2>
                        </div>
                        <?php do_action('edd_purchase_form_before_email'); ?>
                        <div class="row custom-row">
                            <div class="form-group col-sm-12">
                                <label for="exampleInputName22"><?php _e('Email Address', 'edd'); ?><span>*</span></label>
                                <input type="email" class="form-control" id="exampleInputName22" required="" name="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputName11">Full Name<span>*</span></label>
                                <input type="text" class="form-control" id="exampleInputName11" required="" name="">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="exampleInputName12">Last Name<span>*</span></label>
                                <input type="text" class="form-control" id="exampleInputName12" required="" name="">
                            </div>


                        </div>

                        <div class="form-header create-account">
                            <h2>create an account <span class="opt">(optional)</span></h2>
                        </div>

                        <div class="row custom-row">
                            <div class="form-group col-sm-12">
                                <label for="exampleInputName23">Username</label>
                                <input type="text" class="form-control" id="exampleInputName23" required="" name="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputName13">Password</label>
                                <input type="password" class="form-control" id="exampleInputName13" required="" name="">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="exampleInputName14">Password Again</label>
                                <input type="text" class="form-control" id="exampleInputName14" required="" name="">
                            </div>
                        </div>
                        <h2 class="purchase-total">Purchase total: <span>$52</span></h2>
                        <button type="submit" class="btn btn-primary theme-button">proceed to payment</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-plugin">
                    <h2>featured plugin</h2>
                    <div class="product-list">
                        <div class="product-image">
                            <img src="img/product/product1.png" alt="" class="img-fluid">
                            <div class="product_price">
                                <div class="price_tag">
                                    <del><small>$</small>40</del>
                                    <span><small>$</small>24</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-body">
                            <div class="product-tag">
                                <span class="badge badge-default badge-purple">Premium</span>
                                <span class="badge badge-default badge-yellow">New</span>
                            </div>

                            <div class="product-info">
                                <h2 class="product-title">ICO Token- Multipurpose theme</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet, sem id lobortis interdum, odio lacus luctus lacus.</p>

                                <div class="buy-now">
                                    <a href="#" class="btn btn-primary theme-button buynow-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

























<section class="themeshop-cart-block">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="themeshop-cart">
                    <table class="table">
                        

                        	<thead>
                        		<tr>
                        			<?php do_action( 'edd_checkout_table_header_first' ); ?>
                        			<th></th>
                        			<th scope="col"><?php _e( 'PRODUCT', 'easy-digital-downloads' ); ?></th>
                        			<th scope="col"><?php _e( 'PRICE', 'easy-digital-downloads' ); ?></th>
                        			<th scope="col"><?php _e( 'ACTION', 'easy-digital-downloads' ); ?></th>
                        			<?php do_action( 'edd_checkout_table_header_last' ); ?>
                        		</tr>
                        	</thead>


                    
                        </thead>
                        <tbody>
                        	<?php $cart_items = edd_get_cart_contents(); ?>
                        	<?php do_action( 'edd_cart_items_before' ); ?>
                        	<?php if ( $cart_items ) : ?>
                        	    <?php foreach ( $cart_items as $key => $item ) : ?>	

                            <tr>
                            	<?php do_action( 'edd_checkout_table_body_first', $item ); ?>
                                <td class="delete">
                                    <i class="icon ion-ios-close-outline"></i>
                                </th>
                                <td class="product-overview">

                                	<?php
                                	    if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $item['id'] ) ) {
                                	        echo '<div class="product-img">';
                                	            echo get_the_post_thumbnail( $item['id'], apply_filters( 'edd_checkout_image_size', array( 120,90 ) ) );
                                	        echo '</div>';
                                	    }
                                	    $item_title = edd_get_cart_item_name( $item );
                                	    echo '<div class="product-detail"><p class="edd_checkout_cart_item_title">' . esc_html( $item_title ) . '</p></div>';

                                	    /**
                                	     * Runs after the item in cart's title is echoed
                                	     * @since 2.6
                                	     *
                                	     * @param array $item Cart Item
                                	     * @param int $key Cart key
                                	     */
                                	    do_action( 'edd_checkout_cart_item_title_after', $item, $key );
                                	?>



                                </td>
                                <td class="product-price">
                                    <?php
                       					 echo edd_cart_item_price( $item['id'], $item['options'] );
                       					 do_action( 'edd_checkout_cart_item_price_after', $item );
                       				 ?>
                                </td>


                               <td class="edd_cart_actions">
                                   <?php if( edd_item_quantities_enabled() && ! edd_download_quantities_disabled( $item['id'] ) ) : ?>
                                       <input type="number" min="1" step="1" name="edd-cart-download-<?php echo $key; ?>-quantity" data-key="<?php echo $key; ?>" class="edd-input edd-item-quantity" value="<?php echo edd_get_cart_item_quantity( $item['id'], $item['options'] ); ?>"/>
                                       <input type="hidden" name="edd-cart-downloads[]" value="<?php echo $item['id']; ?>"/>
                                       <input type="hidden" name="edd-cart-download-<?php echo $key; ?>-options" value="<?php echo esc_attr( json_encode( $item['options'] ) ); ?>"/>
                                   <?php endif; ?>
                                   <?php do_action( 'edd_cart_actions', $item, $key ); ?>
                                   <a class="edd_cart_remove_item_btn" href="<?php echo esc_url( wp_nonce_url( edd_remove_item_url( $key ), 'edd-remove-from-cart-' . $key, 'edd_remove_from_cart_nonce' ) ); ?>"><?php _e( 'Remove', 'easy-digital-downloads' ); ?></a>
                               </td>
                               <?php do_action( 'edd_checkout_table_body_last', $item ); ?>

                            </tr>
                             <?php endforeach; ?>
                            <?php endif; ?>
                            <?php do_action( 'edd_cart_items_middle' ); ?>




                            
                        </tbody>
                        <tfoot>
                        	<?php if( has_action( 'edd_cart_footer_buttons' ) ) : ?>
                        	    <tr class="edd_cart_footer_row<?php if ( edd_is_cart_saving_disabled() ) { echo ' edd-no-js'; } ?>">
                        	        <th colspan="<?php echo edd_checkout_cart_columns(); ?>">
                        	            <?php do_action( 'edd_cart_footer_buttons' ); ?>
                        	        </th>
                        	    </tr>
                        	<?php endif; ?>

                        	<?php if( edd_use_taxes() && ! edd_prices_include_tax() ) : ?>
                        	    <tr class="edd_cart_footer_row edd_cart_subtotal_row"<?php if ( ! edd_is_cart_taxed() ) echo ' style="display:none;"'; ?>>
                        	        <?php do_action( 'edd_checkout_table_subtotal_first' ); ?>
                        	        <th colspan="<?php echo edd_checkout_cart_columns(); ?>" class="edd_cart_subtotal">
                        	            <?php _e( 'Subtotal', 'easy-digital-downloads' ); ?>:&nbsp;<span class="edd_cart_subtotal_amount"><?php echo edd_cart_subtotal(); ?></span>
                        	        </th>
                        	        <?php do_action( 'edd_checkout_table_subtotal_last' ); ?>
                        	    </tr>
                        	<?php endif; ?>

                        	<tr class="edd_cart_footer_row edd_cart_discount_row" <?php if( ! edd_cart_has_discounts() )  echo ' style="display:none;"'; ?>>
                        	    <?php do_action( 'edd_checkout_table_discount_first' ); ?>
                        	    <th colspan="<?php echo edd_checkout_cart_columns(); ?>" class="edd_cart_discount">
                        	        <?php edd_cart_discounts_html(); ?>
                        	    </th>
                        	    <?php do_action( 'edd_checkout_table_discount_last' ); ?>
                        	</tr>

                        	<?php if( edd_use_taxes() ) : ?>
                        	    <tr class="edd_cart_footer_row edd_cart_tax_row"<?php if( ! edd_is_cart_taxed() ) echo ' style="display:none;"'; ?>>
                        	        <?php do_action( 'edd_checkout_table_tax_first' ); ?>
                        	        <th colspan="<?php echo edd_checkout_cart_columns(); ?>" class="edd_cart_tax">
                        	            <?php _e( 'Tax', 'easy-digital-downloads' ); ?>:&nbsp;<span class="edd_cart_tax_amount" data-tax="<?php echo edd_get_cart_tax( false ); ?>"><?php echo esc_html( edd_cart_tax() ); ?></span>
                        	        </th>
                        	        <?php do_action( 'edd_checkout_table_tax_last' ); ?>
                        	    </tr>

                        	<?php endif; ?>




                            <tr>
                                <td></td>
                               
                                <td>
                                    <?php do_action( 'edd_checkout_table_footer_first' ); ?>
                                    <th colspan="<?php echo edd_checkout_cart_columns(); ?>"><?php _e( 'Total', 'easy-digital-downloads' ); ?>: <span class="edd_cart_amount" data-subtotal="<?php echo edd_get_cart_subtotal(); ?>" data-total="<?php echo edd_get_cart_total(); ?>"><?php edd_cart_total(); ?></span></th>
                                    <?php do_action( 'edd_checkout_table_footer_last' ); ?>
                                </td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
            </div>
            
            <div class="col-md-4">
                <div class="featured-plugin">
                    <h2>featured plugin</h2>
                    <div class="product-list">
                        <div class="product-image">
                            <img src="http://themeshop.local/app/uploads/edd/2018/09/product7.png" alt="" class="img-fluid">
                            <div class="product_price">
                                <div class="price_tag">
                                    <del><small>$</small>40</del>
                                    <span><small>$</small>24</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-body">
                            <div class="product-tag">
                                <span class="badge badge-default badge-purple">Premium</span>
                                <span class="badge badge-default badge-yellow">New</span>
                            </div>

                            <div class="product-info">
                                <h2 class="product-title">ICO Token- Multipurpose theme</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquet, sem id lobortis interdum, odio lacus luctus lacus.</p>

                                <div class="buy-now">
                                    <a href="#" class="btn btn-primary theme-button buynow-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










