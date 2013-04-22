<?php
/**
 * 모든 함수의 접두어는 lw을 붙인다. left21 webmaster의 약자다.
 * 일단 세팅 함수는 twenty twelve에서 긁어온 걸 바탕으로 만들었다.
 */
function lw_setup() {
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'main-nav', '메인 내비게이션' );
	
	// 사이드바 세 개
	register_sidebar(array(
			'name' => '좌측',
			'id' => 'sidebar-left',
			'description' => '제일 왼쪽',
			'before_title' => '<h3 class="sidebar-title">',
			'after_title' => '</h3>'
			));
	register_sidebar(array(
			'name' => '가운데',
			'id' => 'sidebar-center',
			'description' => '가운데 위치',
			'before_title' => '<h3 class="sidebar-title">',
			'after_title' => '</h3>'
			));
	register_sidebar(array(
			'name' => '우측',
			'id' => 'sidebar-right',
			'description' => '제일 오른쪽',
			'before_title' => '<h3 class="sidebar-title">',
			'after_title' => '</h3>'
			));
}
add_action( 'after_setup_theme', 'lw_setup' );

/**
 * Enqueues scripts and styles for front-end.
 *
 * @since Twenty Twelve 1.0
 */
function lw_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'lw-style', get_stylesheet_uri() );

	/*
	 * Loads the Internet Explorer specific stylesheet.
	 */
	wp_enqueue_style( 'lw-ie', get_template_directory_uri() . '/style-ie.css', array( 'lw-style' ) );
	$wp_styles->add_data( 'lw-ie', 'conditional', 'lt IE 9' );
	
	/*
	 * SNS 공유 버튼
	 */
	wp_enqueue_script('lw-sns-button', get_template_directory_uri() . '/js/sns-button.js', array('jquery'), '', true);

	/*
	 * common.js
	 */
	wp_enqueue_script('lw-common', get_template_directory_uri() . '/js/common.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'lw_scripts_styles' );

/**
* 변수의 구성요소를 리턴받는다.
*/
function getPrintr($var, $title = null)
{
    $dump = '';
    $dump .=  '<div align="left">';
    $dump .=  '<pre style="background-color:#000; color:#00ff00; padding:5px; font-size:14px;">';
    if( $title )
    {
        $dump .=  "<strong style='color:#fff'>{$title} :</strong> \n";
    }
    $dump .= print_r($var, TRUE);
    $dump .=  '</pre>';
    $dump .=  '</div>';
    $dump .=  '<br />';
    return $dump;
}

/**
 * 변수의 구성요소를 출력한다.
 */
function printr($var, $title = null)
{
    $dump = getPrintr($var, $title);
    echo $dump;
}

/**
 * 변수의 구성요소를 출력하고 멈춘다.
 */
function printr2($var, $title = null)
{
    printr($var, $title);
    exit;
}

/**
 * 아이콘 폰트 HTML 출력
 */
function lw_print_sns_buttons(){?>
	<ul class="nav sns-button">
		<li><a href="javascript:void(0)" class="btn btn--small js-share-twitter"><span class="icon-twitter"></span></a></li>
		<li><a href="javascript:void(0)" class="btn btn--small js-share-facebook"><span class="icon-facebook"></span></a></li>
		<li><a href="javascript:void(0)" class="btn btn--small js-share-google-plus"><span class="icon-google-plus"></span></a></li>
	</ul>
<?}
add_filter('includes_url', 'lw_remove_rss_icon', 10, 2);
function lw_remove_rss_icon($url, $path){
	if($path == 'images/rss.png'){
		return get_template_directory_uri() . '/blank.gif';
	}
	return $url;
}