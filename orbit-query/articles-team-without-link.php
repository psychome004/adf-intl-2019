<div class="col-4 team-list">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
	<?php get_template_part( 'template-parts/content', 'team-without-links' );?>
  <?php endwhile;?>
</div>
