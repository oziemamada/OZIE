<?php
// ウィジェットエリア
// サイドバーのウィジェット
register_sidebar( array(
	'name' => __( 'Side Widget' ),
	'id' => 'side-widget',
	'before_widget' => '<li class="widget-container">',
	'after_widget' => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
) );


//検索ウィジェットのカスタマイズ
function new_search_form($form) {
$form = '<form method="get" id="searchform" action="' . get_option('home') . '/" >
<input type="text" value="' . attribute_escape(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" />
<input type="submit" id="searchsubmit" value="'.attribute_escape(__('Search')).'" />
</div>
</form>';
return $form;
}
add_filter('get_search_form', 'new_search_form' );

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(220, 165, true ); // 幅 220px、高さ 165px、切り抜きモード

function post_ogp($id) {
	$noImg = 'ogp_default.jpg';
	//アイキャッチ画像を取得
	$eyeImg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');

	if ($eyeImg){
		//アイキャッチ画像があれば優先
		echo $eyeImg[0];
	} else {
		//エントリーに属する画像を取得
		$query = 'post_parent=' . $id . '&post_type=attachment&post_mime_type=image';
		$postImg = get_children($query);

		if (!empty($postImg)){
			//最初にアップロードされた画像IDを取得
			$keys = array_keys($postImg);
			$num = $keys[sizeOf($keys)-1];

			//画像IDからサムネイルを取得
			$thumb = wp_get_attachment_image_src($num, 'thumbnail');

			echo clean_url($thumb[0]);
		} else {
			echo get_bloginfo('template_directory') . '/' . $noImg;
		}
	}
}

?>