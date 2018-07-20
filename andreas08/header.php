<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>andreas08: ignore the trends</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Your website description goes here" />
<meta name="keywords" content="your,keywords,goes,here" />
<link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet"> 


<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>



</head>
<body style="margin:0; padding:0;background-color:#e8eaec;">
<div id="ccontainer">
<div id="hheader" style="padding-bottom:10px;">      
  <h1>James Tarleton's Home Page</h1>
  <!-- <h4 style="text-align:left;">Welcome to my Home Page</h4> -->

</div>
<div id="nnavigation">
<ul style="margin:0;">
<li class="selected"><a href="<?php echo home_url(); ?>">Home</a></li>

<?php
$args = array(
  'sort_order' => 'asc',
  'sort_column' => 'post_title',
  'hierarchical' => 1,
  'exclude' => '',
  'include' => '',
  'meta_key' => '',
  'meta_value' => '',
  'authors' => '',
  'child_of' => 0,
  'parent' => -1,
  'exclude_tree' => '',
  'number' => '',
  'offset' => 0,
  'post_type' => 'page',
  'post_status' => 'publish'
); 
$pages = get_pages($args); ?>

<?php foreach($pages as $page): ?>

<li><a href="<?php get_page_link( $page->ID ); ?>">
  <?php echo $page->post_title; ?></a>
</li>

<?php endforeach; ?>
<li><a href="<?php echo wp_login_url(); ?>">Login</a></li>
</ul>
<div style="padding-right:10px; text-align:right;"><?php 
$dt = new DateTime('now', new DateTimeZone('America/New_York'));
$formatted = $dt->format('d M Y &#0149; g:i a T');
echo $formatted; ?></div>
</div>


<div id="ccontent"> 
