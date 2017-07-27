<?php get_header(); ?>

<header class="intro-header" style="background-image: url('<?php  set_src_image();?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1> <?php is_home() ? bloginfo('name') : the_title(); ?></h1>
                    <hr class="small">
                    <!-- <span class="subheading"><?php bloginfo('description'); ?></span> -->
                </div>
            </div>
        </div>
    </div>
</header>
<?php get_template_part('partial/postlist'); ?>
<?php get_footer(); ?>
