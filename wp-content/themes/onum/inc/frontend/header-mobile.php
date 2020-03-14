<div class="header_mobile">
	<div class="container">
		<div class="mlogo_wrapper clearfix">
	        <div class="mobile_logo">
	            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo onum_get_option('logo_mobile') ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
	    	</div>
			<?php if ( onum_get_option('cart_switch') == true ){ ?>
			<div class="octf-btn-cta">
				<div class="octf-header-module cart-btn-hover">
					<?php if ( class_exists( 'woocommerce' ) ) { ?>
						<div class="h-cart-btn octf-cta-icons">
							<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'onum' ); ?>"><i class="flaticon-supermarket"></i> <span class="count"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
							</a>	
						</div>	
						<?php if( !is_cart() && !is_checkout() ) { ?>
						<div class="site-header-cart">
							<?php the_widget( 'WC_Widget_Cart', array( 'title' => '' ) ); ?>
						</div>	
						<?php } ?>
					<?php } ?>
				</div>
			</div>	
			<?php } ?>
	        <div id="mmenu_toggle">
		        <button></button>
		    </div>
	    </div>
	    <div class="mmenu_wrapper">		
			<div class="mobile_nav">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'mobile_mainmenu',
						'container'      => '',
					) );
				?>
			</div>   	
	    </div>
	</div>
</div>
