<?php
/*
Plugin Name: Orl Social Btns
Plugin URI: http://www.orlov.cv.ua
Description: Append social btns shortcode
Version: 2016.10.19.23.45
Author: Vitaliy Orlov
Author URI: http://www.orlov.cv.ua
*/


add_action( 'init', function(){
    wp_register_style('orl-social-btns', plugins_url('orl-social-btns.css',__FILE__ ));
    wp_enqueue_style('orl-social-btns');

    wp_register_script('orl-social-btns', plugins_url('orl-social-btns.js',__FILE__ ));
    wp_enqueue_script('orl-social-btns');
});

add_shortcode('sidebar-social-sharing', function($atts){
    global $post;
    $pageUrl = urlencode(get_bloginfo('url').$_SERVER['REQUEST_URI']);
    $pageTitle = urlencode(trim(wp_title(' ', false)));

    echo '<div class="sidebar-social-sharing">';

    echo '<a rel="nofollow" class="vk" href="http://vk.com/share.php?url='.$pageUrl.'" title="Поделиться в Вконтакте" target="_blank" onclick="jsWin(this.href,640,480); return false;">';
    echo '<i class="fa fa-fw fa-vk"></i>';
    echo '</a>';

    echo '<a rel="nofollow" class="odnoklassniki" href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st.comments='.$pageTitle.'&st._surl='.$pageUrl.'" title="Поделиться в Одноклассниках" target="_blank" onclick="jsWin(this.href,640,480); return false;">';
    echo '<i class="fa fa-fw fa-odnoklassniki"></i>';
    echo '</a>';

    echo '<a rel="nofollow" class="fb" href="http://www.facebook.com/sharer.php?u='.$pageUrl.'" title="Поделиться через Facebook" target="_blank" onclick="jsWin(this.href,640,480); return false;">';
    echo '<i class="fa fa-fw fa-facebook"></i>';
    echo '</a>';

    echo '<a rel="nofollow" class="bookmark hidden-sm" href="#" title="Добавить в избранное" onclick="jsBookmark(this); return false;">';
    echo '<i class="fa fa-fw fa-plus"></i>';
    echo '</a>';

    echo '</div>';
});
