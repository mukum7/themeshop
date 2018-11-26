<?php get_header(); ?>
<section>

	<div class="title">
		
	<section class="hero-banner d-flex inner-banner">
	    <div class="container align-self-center">
	        <div class="row justify-content-center ">
	            <div class="col-xl-10 col-md-12 col-sm-12">

	                <div class="hero-text">
	                    <h1><?php the_title(); ?></h1> <!-- .title -->
	                    <nav aria-label="breadcrumb">
	                        <ol class="breadcrumb justify-content-center">


	                            <li class="breadcrumb-item"><a href="#"><?php get_breadcrumb (); ?></a></li>
	                            
	                        </ol>
	                    </nav>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
 	</div>
	
	<div class="container">
		<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; //end of the loop ?>
	</div>
</section>
<?php get_footer(); ?>