<?
// 기술 공유 custom post type
add_action( 'init', 'register_devsharing' );
function register_devsharing() {
	register_post_type( 'devsharing',
		array(
			'labels' => array(
				'name' => '기술 공유',
				'singular_name' => '기술 공유'
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}

// 기술 공유 custom taxonomy
add_action( 'init', 'register_devsharing_taxonomy' );
function register_devsharing_taxonomy() {
	register_taxonomy(
		'sharing-cat',
		'devsharing',
		array(
			'label' => '공유 카테고리',
			'hierarchical' => true,
			'show_in_nav_menus' => ture,
			'show_admin_column' => true,
			)
	);
}