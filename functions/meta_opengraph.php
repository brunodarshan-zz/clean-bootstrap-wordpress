 <?php  add_action('wp_head', 'open_graph_tags');


 function open_graph_tags(){
    $infors = array(
      'title' => get_bloginfo('site')."". wp_title('-', false),
      'image:url' => (has_post_thumbnail()) ? get_the_post_thumbnail_url() :  get_header_image(),
      'type' => 'blog',
      'url' => home_url(add_query_arg(array(),$wp->request)),
      'site_name' => get_bloginfo('name')

    );

    #set thumbnail

   #set type
   #

   #build the metatags
   foreach ($infors as $key => $value) {

     ?>
<meta name="og:<?php echo $key ?>" content="<?php echo $value ;?>">
     <?php
   }

 }
