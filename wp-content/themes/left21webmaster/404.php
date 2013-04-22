<? 
get_header();
the_post();
$categories_list = get_the_category_list(', ');
$tag_list = get_the_tag_list('', ', '); 
?>

<div class="body">
	<div class="content" style="text-align: center;">
		<p class="kilo">OTL;;</p>
		<p class="giga">404 못찾겠다!</p>
		<p>제목이 달린 링크를 클릭해 들어왔으면 우측 상단의 검색창을 이용해 해당 제목으로 검색해 보세요.</p>
		<p>도저히 이해할 수 없는 현상이라면 <a href="<?=home_url('?p=41')?>">알려주세요.</a></p>
	</div>	
</div>
<? get_footer(); ?>