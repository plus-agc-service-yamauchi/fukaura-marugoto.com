<?php add_theme_support('post-thumbnails');?>
<?php
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);

function remove_image_attribute($html)
{
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    // $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', '', $html);
    $html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html);
    $html = preg_replace('/<a href=".+">/', '', $html);
    $html = preg_replace('/<\/a>/', '', $html);
    return $html;
}
function get_thumb_img($size = 'full') {

  $thumb_id = get_post_thumbnail_id();                         // アイキャッチ画像のIDを取得

  $thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // $sizeサイズの画像内容を取得

  $thumb_src = $thumb_img[0];    // 画像のurlだけ取得

  $thumb_alt = get_the_title();  //alt属性に入れるもの（記事のタイトルにしています）

  return '<img src="'.$thumb_src.'" alt="'.$thumb_alt.'">';
}