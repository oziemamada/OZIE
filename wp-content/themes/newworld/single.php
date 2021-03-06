<?php get_header(); ?>

<!-- Contents -->
			<div id="contents">
				<div id="main">
				<div class="nav-below">
						<?php previous_post_link('%link','<<%title'); ?> |
						<a href="<?php bloginfo(url); ?>/">top</a> |
						<?php next_post_link('%link','%title>>'); ?>
				</div><!-- /.nav-below -->
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="post">

						<div class="title_box">
							<div class="date">
								<?php the_time('Y年m月d日') ?>
							</div>
							<h2 class="title">
								<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>
						</div>

						<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
						<div class="postC">
							<?php the_content(); ?><br>
														<!-- FBのいいね数 -->
<div style="border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; padding-top:5px;"></div>
<!-- FBのいいね数ここまで -->
						<?php //comments_template( ); ?>
						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
						<div class="bloginfo">post by <? the_author(); ?> at <?php the_time('h:m') ?> |  comment(<span class="fb-comments-count" data-href="<?php the_permalink(); ?>"></span>) | <?php the_category(', ') ?></div>

						</div>

					</div><!-- /.post -->

				<?php endwhile; ?>

				<div class="nav-below">
						<?php previous_post_link('%link','<<%title'); ?> |
						<a href="<?php bloginfo(url); ?>/">top</a> |
						<?php next_post_link('%link','%title>>'); ?>
				</div><!-- /.nav-below -->

<!-- Commetns -->

					<div class="tb">この記事へのトラックバックURL　<br />
				 		<?php trackback_url(); ?>
				 	</div>
				<?php else : ?>

				    <h2 class="title">記事が見つかりませんでした。</h2>
				    <p>検索で見つかるかもしれません。</p><br />
				    <?php get_search_form(); ?>

				<?php endif; ?>


				</div><!-- /#main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>