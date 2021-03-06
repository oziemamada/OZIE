<?php get_header(); ?>

<!-- Contents -->			
			<div id="contents">
				<div id="main">
				
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="post">
						
						<div class="title_box">
							<h2 class="title">
								<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>
						</div>
						
						<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
						<div class="postC">
							<?php the_content(); ?>
						
						<div class="bloginfo">post by <? the_author(); ?> at <?php the_time('h:m') ?> | <a href="<?php the_permalink() ?>#respond">comment(<span class="fb-comments-count" data-href="<?php the_permalink(); ?>"></span>)</a> | <?php the_category(', ') ?></div>
						</div>
					</div><!-- /.post -->
					
				<?php endwhile; ?>
				 
				<?php else : ?>
				 
				    <h2 class="title">記事が見つかりませんでした。</h2>
				    <p>検索で見つかるかもしれません。</p><br />
				    <?php get_search_form(); ?>
				 
				<?php endif; ?>
					
				</div><!-- /#main -->
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>