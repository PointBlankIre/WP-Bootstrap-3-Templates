<?php
/*
Template Name: Clients list
*/
?>

<?php get_header(); ?>

<div class="container">
  
  <div class="row  jumbotron">
  <?php
          $args=array(
              'post_type' => 'post',
              'taxonomy' => 'category',
              'term' => 'client-testimonials',
              'posts_per_page' => 3,
              'orderby' => 'post_title',
              'order' => 'asc',
              'offset' => 0 // this skips the first post from the news category.
          ); 
    
    $clienttestimonials = new WP_Query($args);

          if($clienttestimonials->have_posts()) : while($clienttestimonials->have_posts()) :
              $clienttestimonials->the_post(); ?>                  

       <h1 class="testimonials"><?php the_content(); ?></h1>

        
        <?php endwhile; endif; ?>
     
  </div>

</div>


<div class="container" id="main-content">


<?php

$argsall = array(
  'orderby' => 'name',
  'order' => 'ASC',
  'child_of'=>'3',
  'hide_empty'=>0,
  'number' => ''
);

$categoriesall = get_terms( 'category', $argsall );
$totalclientcats = count($categoriesall);
//echo $totalclientcats;
$max = ceil($totalclientcats/12);
//echo $max;

$page = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
//echo "<h1>Page is".$page." </h1>";
if ($page==1) {
$offset = 0;
} else {
$offset = ($page-1)*12;

}
/*
if ($page==2) {
$offset =3;
}
if ($page==3) {
$offset =6;
}*/



$args = array(
  'orderby' => 'name',
  'order' => 'ASC',
  'child_of'=>'3',
  'hide_empty'=>0,
  'number' => '12',
  'offset'=>$offset
);

$categories = get_terms( 'category', $args );
//$categories = get_categories($args); ?>
     
    <div class="row work" id="clientdata">
<h2 class="main-title ">Clients</h2>
        
      


          <?php   foreach($categories as $category) { ?>

                      <div class="col-xs-4 work-image">
                        <?php if  ($category->count)  
                        { ?>
                        <a href="<?php echo get_category_link( $category->term_id ) ?>" title="<?php echo $category->name;?>" >
                        <? } else  { ?>
                        <a href="#" title="<?php echo $category->name;?>" >
                        <? } ?>


                                  <?php s8_taxonomy_image(get_term( $category->term_id, 'category' ), 'post-thumbnail','img-responsive'); ?>

                                  <span class="image-label">
                                      <h1><?php echo $category->name;?> <?php //echo $category->count;?></h1>                                     
                                  </span>
                        <?php if  ($category->count)  { ?></a><? }?>

                    </div>



        
        <?php } ?>
        

        
    </div>
   

   

</div><!-- end container -->

<?php get_footer(); ?>

<script>
/*$( "#loadmore" ).click(function() {
  alert( "Handler for .click() called." );
  $( "#loadmore" ).prepend( '<div class="row">sfdgdg</div>' );
});
*/
jQuery(document).ready(function($) {

    // The number of the next page to load (/page/x/).
  // var pageNum = parseInt(pbd_alp.startPage) + 1;
    var pageNum = 2;
    // The maximum number of pages the current query can return.
   // var max = parseInt(pbd_alp.maxPages);
//alert ("page is :"+pageNum);
    var max = <?php echo $max; ?>
    // The link of the next page of posts.
   // var nextLink = pbd_alp.nextLink;
    
    /**
     * Replace the traditional navigation with our own,
     * but only if there is at least one page of new posts to load.
     */
    if(pageNum <= max) {
        // Insert the "More Posts" link.
        $('#main-content')
            .append('<div class="pbd-alp-placeholder-'+ pageNum +'"></div>')
            .append('<p id="pbd-alp-load-posts" class="view-more"><a href="#">View more</a></p>');
            
        // Remove the traditional navigation.
       // $('.navigation').remove();
    }
    
     nextLink = '/clients/page/'+ pageNum;
    /**
     * Load new posts when the link is clicked.
     */
    $('#pbd-alp-load-posts a').click(function() {

    
    
        // Are there more posts to load?
        if(pageNum <= max) {
        
            // Show that we're working.
            $(this).text('Loading posts...');
            
            $('.pbd-alp-placeholder-'+ pageNum).load(nextLink + ' #clientdata',
                function() {
                    // Update page number and nextLink.
                    pageNum++;
                    $(this).hide();
                  $(this).fadeIn(1000);
                
                    nextLink = '/clients/page/'+ pageNum;
                
                    // Add a new placeholder, for when user clicks again.
                    $('#pbd-alp-load-posts')
                        .before('<div class="pbd-alp-placeholder-'+ pageNum +'"></div>')
                   
                    // Update the button message.
                    if(pageNum <= max) {
                        $('#pbd-alp-load-posts a').text('Load More Posts');
                    } else {
                        $('#pbd-alp-load-posts a').text('No more posts to load.');
                    }


                }
            );
        } else {
            $('#pbd-alp-load-posts a').append('.');
        }   
        
        return false;
    });
});
</script>
<script>
jQuery(document).ready(function($) {
//(function() {
//alert('dfdgfd');
//$(".quotes").hide();

    var quotes = $(".testimonials");
    var quoteIndex = -1;
    
    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(2000)
            .delay(2000)
            .fadeOut(2000, showNextQuote);
    }
    
    showNextQuote();
    
});

</script>
