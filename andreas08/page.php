<?php get_header(); ?>
<div class="grid-x grid-padding-x">
  <div class="large-12 cell">
    <div class="primary callout" 
          style="border:0px; background-color:#FFF;">
      <p>
        <strong>ABOUT is a twelve cell section in a grid-x.</strong> Each of these includes a div.callout element so you can see where the cell are - it's not required at all for the grid.</p>
      <p>
        Lorem ipsum dolor sit amet, eam et solum fuisset patrioque. At nominati accommodare qui, sensibus disputationi duo cu. Animal nominavi eu qui, ius decore pertinax ea. Discere hendrerit id cum. Salutatus temporibus has cu, vim habeo dicant ea. No sale graecis tractatos vis. In nisl scaevola laboramus has. Vel cu eirmod delicata, id sit tamquam minimum. Qui cu laudem prodesset reformidans. Has no illud fuisset. Eu mel decore praesent laboramus. Nonumy delenit lucilius no sed, nonumy atomorum intellegebat vis ei, ex vidit iudicabit sed. Ne eam eripuit eruditi accusata, omnium accusam mei an. 
      </p>  
      <h4><?php the_title(); ?></h4>
      
      
      <?php
        // Start the Loop.
      while ( have_posts() ) :
        the_post();
        // Include the page content template.
        get_template_part( 'content', 'page' );
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
          comments_template();
        }
        endwhile;
      ?>

      
      
      <p><?php //the_content(); ?></p>
    </div>
  </div>
</div>
<?php get_footer(); ?>