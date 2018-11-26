<?php
/**
 *  This template is used to display the Checkout page when items are in the cart
 */ 

global $post; ?>


<section class="themeshop-cart-block">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="themeshop-cart">
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>                            
                            <?php do_action('edd_checkout_table_header_first');?>
                            <th scope="col"><?php _e('Product', 'edd'); ?></th>
                            <th scope="col"><?php _e('Price' , 'edd');?></th>
                            
                            <?php do_action( 'edd_checkout_table_header_last' ); ?>
                        </tr>
                        </thead>
                        <tbody>

                            <?php $cart_items = edd_get_cart_contents(); ?>
                            <?php do_action( 'edd_cart_items_before' ); ?>
                            <?php if ( $cart_items ) : ?>
                            <?php foreach ( $cart_items as $key => $item ) : ?>

                          


                            <tr>
                                <?php do_action( 'edd_checkout_table_body_first', $item ); ?>

                              


                                <td class="delete">


                                    <?php if( edd_item_quantities_enabled() && ! edd_download_quantities_disabled( $item['id'] ) ) : ?>
                                        <input type="number" min="1" step="1" name="edd-cart-download-<?php echo $key; ?>-quantity" data-key="<?php echo $key; ?>" class="edd-input edd-item-quantity" value="<?php echo edd_get_cart_item_quantity( $item['id'], $item['options'] ); ?>"/>
                                        <input type="hidden" name="edd-cart-downloads[]" value="<?php echo $item['id']; ?>"/>
                                        <input type="hidden" name="edd-cart-download-<?php echo $key; ?>-options" value="<?php echo esc_attr( json_encode( $item['options'] ) ); ?>"/>
                                    <?php endif; ?>
                                    <?php do_action( 'edd_cart_actions', $item, $key ); ?>
                                    <a class="edd_cart_remove_item_btn" href="<?php echo esc_url( wp_nonce_url( edd_remove_item_url( $key ), 'edd-remove-from-cart-' . $key, 'edd_remove_from_cart_nonce' ) ); ?>"><?php _e( 'Remove', 'easy-digital-downloads' ); ?></a>

                                    <i class="icon ion-ios-close-outline">                                  
                                    </i>
                                </th>
                                <td class="product-overview"><!-- product image and title  -->
                                  
                                        <?php
                                         if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $item['id'] ) ) {
                                             echo '<div class="product-img">';
                                                 echo get_the_post_thumbnail( $item['id'], apply_filters( 'edd_checkout_image_size', array( 70,70 ) ) );
                                             echo '</div>';
                                         }
                                         $item_title = get_the_title( $item['id'] );
                                         if ( ! empty( $item['options'] ) && edd_has_variable_prices( $item['id'] ) ) {
                                             $item_title .= ' - ' . edd_get_cart_item_price_name( $item );
                                         }
                                         echo '<div class="product-detail">' . esc_html( $item_title ) . '</div>';                         
                                        ?>
                                    
                                    
                                </td>
                                <td class="product-price"> <!-- item price cart page -->
                                    <?php echo edd_cart_item_price( $item['id'], $item['options'] ); ?>
                                </td>
                                
                                <?php do_action( 'edd_checkout_table_body_last', $item ); ?>
                            </tr>
                            
                                <?php endforeach; ?>
                                <?php endif; ?>
                                <?php do_action( 'edd_cart_items_middle' ); ?>

                            <!-- Show any cart fees, both positive and negative fees -->
                            <?php if( edd_cart_has_fees() ) : ?>
                                <?php foreach( edd_get_cart_fees() as $fee_id => $fee ) : ?>
                                    <tr class="edd_cart_fee" id="edd_cart_fee_<?php echo $fee_id; ?>">
                                        <td class="edd_cart_fee_label"><?php echo esc_html( $fee['label'] ); ?></td>
                                        <td class="edd_cart_fee_amount"><?php echo esc_html( edd_currency_filter( edd_format_amount( $fee['amount'] ) ) ); ?></td>
                                        <td>
                                            <?php if( ! empty( $fee['type'] ) && 'item' == $fee['type'] ) : ?>
                                                <a href="<?php echo esc_url( edd_remove_cart_fee_url( $fee_id ) ); ?>"><?php _e( 'Remove', 'edd' ); ?></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <?php do_action( 'edd_cart_items_after' ); ?>
                        </tbody>





                        <tfoot><!-- cart total price -->
                            <tr>
                                <?php do_action( 'edd_checkout_table_footer_first' ); ?>
                                <td></td>
                                <td></td>
                                <td><?php _e( 'Total', 'edd' ); ?>: <span class="edd_cart_amount" data-subtotal="<?php echo edd_get_cart_total(); ?>" data-total="<?php echo edd_get_cart_total(); ?>"><?php edd_cart_total(); ?></span>
                                </td>
                                <td></td>
                                <?php do_action( 'edd_checkout_table_footer_last' ); ?>
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




        <!-- personal info -->

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
                        <label for="exampleInputName11"> <?php _e('Full Name','edd') ?> <span>*</span></label>
                        <input type="text" class="form-control" id="exampleInputName11" required="" name="">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="exampleInputName12"><?php _e('Last Name','edd') ?><span>*</span></label>
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

        <!-- end personal info -->

         








            
        </div>
    </div>
</section>








