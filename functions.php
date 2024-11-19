<?php
/* noindex設定 */
function wp_noindex_page () {
    if (is_page('contact')) {
        add_filter( 'wp_robots', 'wp_robots_no_robots' );
        remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );
    }
}

add_action('wp', 'wp_noindex_page');

// 固定ページの設定
function create_custom_page() {
    $pages = array(
        array('title' => '総合警備業務', 'slug' => 'keibi', 'template' => 'page-keibi.php'),
        array('title' => 'ドローン事業', 'slug' => 'drone', 'template' => 'page-drone.php'),
        array('title' => '橋梁点検事業', 'slug' => 'tenken', 'template' => 'page-tenken.php'),
        array('title' => '実績紹介', 'slug' => 'actual', 'template' => 'page-actual.php'),
        array('title' => '会社概要', 'slug' => 'aboutus', 'template' => 'page-aboutus.php'),
        array('title' => '人材募集', 'slug' => 'joboffer', 'template' => 'page-joboffer.php'),
        array('title' => '問い合わせ', 'slug' => 'contact', 'template' => 'page-contact.php'),
        array('title' => '問い合わせ/内容確認', 'slug' => 'contact-confirm', 'template' => 'page-contact-confirm.php'),
        array('title' => '問い合わせ/送信完了', 'slug' => 'contact-complete', 'template' => 'page-contact-complete.php'),
        array('title' => 'アクセスマップ', 'slug' => 'map', 'template' => 'page-map.php'),
        array('title' => 'プライバシーポリシー', 'slug' => 'privacypolicy', 'template' => 'page-privacypolicy.php'),
        array('title' => '反社会的勢力排除宣言', 'slug' => 'antiviolence', 'template' => 'page-antiviolence.php'),
        array('title' => '警備業者認定証', 'slug' => 'certification', 'template' => 'page-certification.php'),
    );

    foreach ($pages as $page) {
        $query = new WP_Query(array(
            'post_type'   => 'page',
            'name'        => $page['slug'],  // スラッグでページを探す
            'post_status' => 'publish',
            'posts_per_page' => 1,
        ));

        if (!$query->have_posts()) {
            // ページを作成
            $new_page_id = wp_insert_post(array(
                'post_title'   => $page['title'],
                'post_content' => '',
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_type'    => 'page',
                'post_name'    => $page['slug'],  // カスタムスラッグを設定
            ));

            // テンプレートを設定
            if (!is_wp_error($new_page_id)) {
                update_post_meta($new_page_id, '_wp_page_template', $page['template']);
            }
        }

        // クエリをリセット
        wp_reset_postdata();
    }
}

add_action('after_setup_theme', 'create_custom_page');

?>