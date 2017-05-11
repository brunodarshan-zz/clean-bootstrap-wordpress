<?php if(have_posts()): ?>
  <!-- Main Content -->
  <div class="container">
      <div class="row">
        <?php while (have_posts()): the_post();  ?>
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <div class="post-preview">
                <?php if (is_home()): ?>

                  <a href=" <?php the_permalink();?>">
                      <h2 class="post-title">
                          <?php the_title(); ?>
                      </h2>
                      <h3 class="post-subtitle">
                          <?php the_excerpt(); ?>
                      </h3>
                  </a>
                <?php else: ?>
                  <?php the_content(); ?>
                <?php endif; ?>
                  <p class="post-meta">Postado por <a href="#"><?php the_author(); ?></a> </p>
              </div>
              <hr>
            </div>
        <?php endwhile; ?>
</div>
<?php endif; ?>
<!-- Pager -->
<ul class="pager">
    <li class="next"><?php if( get_next_posts_link() ) :

?><?php next_posts_link( 'Older Posts &rarr;', 0 ); ?><?php

endif; ?>
<?php if( get_previous_posts_link() ) :

?><?php previous_posts_link( 'Lasted Posts &larr;', 0); ?><?php

endif; ?>

    </li>
</ul>
<?php
// clean up after the query and pagination
wp_reset_postdata();
?>
