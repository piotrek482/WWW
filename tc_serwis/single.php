<!--jeżeli wpis nie chciałby się wyświetlić, to musisz zmienić w kokpicie, ustawienia -> bieżące odnośniki na właśny format i nazwa wpisu -->



<?php get_header(); ?>

	 <?php if (have_posts()) : while (have_posts()) : the_post();	?>	

	 	<?php the_content(); ?>
	 	
		<?php endwhile; ?>
			<?php else: ?>
                <p>Nie znaleziono<br>Sprobuj ponownie</p>
        <?php endif; ?>

<?php get_footer(); ?>


<!--PRZYKŁAD Z GOPROMOTION-->
<!--

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();	?>	

	<div class="container">
		<div class="row">
			<div class="col-xs-12 boxik margin_single">

					<h2><?php the_title(); ?><h2>

						<?php the_post_thumbnail('full',array( 'class' => 'img-responsive img')); ?>

						<span class="boxik_tytul"><?php the_field('naglowek_wpisu'); ?></span>

						<span class="text2 zawartosc"><?php the_content(); ?></span> 

				</div>
			</div>
		</div><

	<?php endwhile; ?>
<?php else: ?>
	<p>Nie znaleziono<br>Sprobuj ponownie</p>
<?php endif; ?>

<?php get_footer(); ?>	

-->
