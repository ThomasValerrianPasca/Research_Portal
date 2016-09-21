
<div class="container" id="sidebar">
<?php wp_list_pages(array('title_li' =>'<h3>Pages</h3>', 'depth' => '1')); ?>
</div>

<hr>

<div class="container" id="sidebar">
  <!--<li id="categories"><?php _e('<h3>Categories:</h3>'); ?>
  <ul>
<?php wp_list_cats(); ?>
  </ul>
 </li> -->
</div>



<div class="container" id="sidebar">
<li id="archives"><?php _e('<h3>Archives:</h3>'); ?>
     <ul>
<?php wp_get_archives('type=monthly'); ?>
     </ul>
</div>

<hr>

<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>