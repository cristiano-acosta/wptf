<?php get_header(); ?>
<?php if ( is_home() ) { ?>
	<?php $query = new WP_Query( 'post_type=page' ); ?>
	
	<section><div id="section" class="home">
		<!--section_title--><div id="title">
			<div class="container_24">
				
				<h1 class="prefix_4 grid_13 suffix_8">você.com.br</h1>
				
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div id="page-<?php the_ID(); ?>" class="prefix_1 grid_7">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
							<h2><a href="#" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</div>
				<?php endwhile;?>
								
			</div>
		</div><!--section_title-->
		
	<article><div id="article">
		<div class="container_24">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div id="excerpt" class="page-<?php the_ID(); ?> prefix_6 grid_12 suffix_6">
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				</div>
			<?php endwhile;?>
	</div></article>
	
	</div></section>
	
	

<?php } else { ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div id="section" class="page-<?php the_ID(); ?> "><section>
		<!--.container_24--><div class="container_24">
			<article id="article">
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<!--.featured-thumbnail--><div class="featured-thumbnail">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				</div><!--.featured-thumbnail-->
				<!--.post-content--><div class="post-content">
					<?php the_content(__('Read more'));?>
				</div><!--.post-content-->
				<!--.postMeta--><div class="post-meta">
					<p><?php _e('Written on '); the_time('F j, Y'); _e(' at '); the_time(); _e(', by '); the_author_posts_link(); ?></p>
					<p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
					<p><?php _e('Categories: '); the_category(', ') ?></p>
					<p><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>
				</div><!--.postMeta-->
			</article>
		</div><!--.container_24-->
	
	<?php endwhile; else: ?>
		
			<div class="no-results">
				<p><strong><?php _e('There has been an error.'); ?></strong></p>
				<p><?php _e('We apologize for any inconvenience, please hit back on your browser or use the search form below.'); ?></p>
				<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
			</div><!--noResults-->
		<?php endif; ?>
			
		<div class="oldernewer">
			<p class="older"><?php next_posts_link('&laquo; Older Entries') ?></p>
			<p class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
		</div><!--.oldernewer-->
	
	</section></div>
<?php } ?>	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
