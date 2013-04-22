<? get_header(); ?>
<div class="body">
	<div class="content">
	<? if ( have_posts() ) : ?>
		<ul>
			<? while ( have_posts() ) : the_post(); ?>
			<li>
				<a href="<?the_permalink()?>"><?the_title()?></a>
				<small><?=get_the_date()?></small>
			</li>
			<? endwhile; ?>
		</ul>
	<? endif; ?>
	<? if(function_exists('wp_pagenavi')){ 
		wp_pagenavi(); 
	} ?>
	</div>
</div>
<? get_footer(); ?>