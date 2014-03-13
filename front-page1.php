<?php get_header(); ?>
<div class=".container-fluid" >
	<?php get_sidebar( 'carousel' ); ?>
</div><!-- end container-fluid-->

<div class="container">

	<div class="row jumbotron">
		<?php 
			$front_page_text = get_post(130); 
			$front_page_text = $front_page_text->post_content;
		?>
		<h1><?php echo $front_page_text;?></h1>
	</div>


	<div class="row">
  		<div class="col-md-8">
  			 
  			<h2>Recent Work</h2>
  				<div class="row">
  			<?php $loop = new WP_Query( array( 	'post_type' => 'pb_work',
  			 									'posts_per_page' => 5,
  			 									'taxonomy' => 'category',
					    						'term' => 'featured' 
					    						) ); ?>
  			<?php $x = 0; ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  			

					
				
		  			<div class="col-md-6 work-image">
		  				
		  				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail(); ?>
						<span class="image-label">
						<h1> <?php the_title(); ?></h1>
		  					<?php the_excerpt(); ?>
		  					</span>
		  				</a>
		  				
		  			</div>

	  		<?php $x++ ;endwhile; ?>
	  		<?php wp_reset_query(); // end work loop ?>
	  			</div><!-- row -->
  		</div><!-- end col-md-8 -->

  		
  		<div class="col-md-4">
  		<h2>Latest Insight</h2>
  		<div class="insights">
  			<?php
					$args=array(
					    'post_type' => 'post',
					    'taxonomy' => 'category',
					    'term' => 'insights',
					    'posts_per_page' => 1,
					    'offset' => 0 // this skips the first post from the news category.
					);

					$inightsloop = new WP_Query($args);

					if($inightsloop->have_posts()) : while($inightsloop->have_posts()) :
					    $inightsloop->the_post(); ?>               	


							
							  			
							  			<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('insights-home-thumb'); ?><h1><?php the_title(); ?></h1>
							  			<span class="date"><?php the_date ('d.m.Y') ?></span>
							  			<?php the_excerpt(); ?></a>
							
  			
  			<?php endwhile; endif; ?>
  		</div><!-- insight -->
  		</div>
	
	</div><!-- end row -->
<section class="ha-waypoint" data-animate-down="ha-header-small" data-animate-up="ha-header-large"></section>
	<!-- Shrink header -->
	<div class="row home-sections">
  		<div class="col-md-8 col-xs-12 wwd">

				<?php $postcontent = get_post(11);?> 
			
				<a href="/us#whatwedo" title="<?php echo $postcontent->post_title;?>" >
					<h2><?php echo  $postcontent->post_title;?></h2>
					<p><?php echo  $postcontent->post_excerpt; ?></p>
				</a>		
			
  			
		</div><!-- end col-md-8 -->
	  	
	  	<div class="col-md-4">
	  		
	  		 <?php echo get_the_post_thumbnail( $postcontent->ID); ?> 
	  	</div>
  			
  	</div><!-- end row -->

	<div class="row home-sections">
		
		<?php $postcontent = get_post(52);?> 
			
		<div class="col-xs-12 col-md-8 ">
  			
  			<?php echo get_the_post_thumbnail( $postcontent->ID,'home-wide-thumb'); ?> 
  		</div>

  		<div class="col-md-4 hwd">
	  		
				<a href="/us#howwedoit" title="<?php the_title(); ?>" >
					<h2><?php echo  $postcontent->post_title;?></h2>
					<p><?php echo  $postcontent->post_excerpt; ?></p>
				</a>

	  	</div>
	  	
	</div><!-- end row -->


	<div class="row home-sections">
  		<div class="col-md-8 col-xs-12 wwu">
  			
  			<?php $postcontent = get_post(54);?> 
			
				<a href="/us#workingwithus" title="" >
					<h2><?php echo  $postcontent->post_title;?></h2>
					<p><?php echo  $postcontent->post_excerpt; ?></p>
				</a>
			
  			
		</div><!-- end col-md-8 -->
	  	
	  	<div class="col-md-4">
	  		<?php echo get_the_post_thumbnail( $postcontent->ID); ?> 
	  	</div>
  			
  	</div><!-- end row -->

	
</div><!-- end container-->

<?php get_footer(); ?>
