<?

/**
 * Services
 * price
 */

add_action('add_meta_boxes', 'writingor__add_meta_box_price');

function writingor__add_meta_box_price() {
    add_meta_box(
        'writingor__meta_box_price', // $id
        __('Price', 'writingor'), // $title
        'writingor__show_meta_box_price', // $callback
        'services', // $page_slug
        'normal', // $context
        'high' // $priority
    );
}

function writingor__show_meta_box_price() {
    global $post;
    $value = esc_attr(get_post_meta($post->ID, 'writingor__price', true));
    wp_nonce_field('writingor', 'price_nonce');
    echo "<input type=\"text\" name=\"writingor__price\" value=\"$value\">";
}


add_action('save_post', 'writingor__save_meta_box_price');
add_action('new_to_publish', 'writingor__save_meta_box_price');

function writingor__save_meta_box_price($post_id) {

    if (!isset($_POST['price_nonce']) || !wp_verify_nonce($_POST['price_nonce'], 'writingor')) {
        return 'nonce not verified';
    }
  
    if (wp_is_post_autosave($post_id)) {
        return 'autosave';
    }
  
    if (wp_is_post_revision($post_id)) {
        return 'revision';
    }
  
    if (isset($_POST['post_type']) && 'services' === $_POST['post_type']) {

        if (!current_user_can('edit_page', $post_id)) {
            return 'cannot edit page';
        } else if (!current_user_can('edit_post', $post_id)) {
            return 'cannot edit post';
        }
    }

    $price = sanitize_text_field($_POST['writingor__price']);
  
    update_post_meta($post_id, 'writingor__price', $price);
}


/**
 * Services
 * production time
 */

add_action('add_meta_boxes', 'writingor__add_meta_box_production_time');

function writingor__add_meta_box_production_time() {
    add_meta_box(
        'writingor__meta_box_production_time', // $id
        __('Production time', 'writingor'), // $title
        'writingor__show_meta_box_production_time', // $callback
        'services', // $page_slug
        'normal', // $context
        'high' // $priority
    );
}

function writingor__show_meta_box_production_time() {
    global $post;
    $value = esc_attr(get_post_meta($post->ID, 'writingor__production_time', true));
    wp_nonce_field('writingor', 'production_time_nonce');
    echo "<input type=\"text\" name=\"writingor__production_time\" value=\"$value\">";
}


add_action('save_post', 'writingor__save_meta_box_production_time');
add_action('new_to_publish', 'writingor__save_meta_box_production_time');

function writingor__save_meta_box_production_time($post_id) {

    if (!isset($_POST['production_time_nonce']) || !wp_verify_nonce($_POST['production_time_nonce'], 'writingor')) {
        return 'nonce not verified';
    }
  
    if (wp_is_post_autosave($post_id)) {
        return 'autosave';
    }
  
    if (wp_is_post_revision($post_id)) {
        return 'revision';
    }
  
    if (isset($_POST['post_type']) && 'services' === $_POST['post_type']) {

        if (!current_user_can('edit_page', $post_id)) {
            return 'cannot edit page';
        } else if (!current_user_can('edit_post', $post_id)) {
            return 'cannot edit post';
        }
    }

    $production_time = sanitize_text_field($_POST['writingor__production_time']);
  
    update_post_meta($post_id, 'writingor__production_time', $production_time);
}

/**
 * Reviews
 * review_link
 */

add_action('add_meta_boxes', 'writingor__add_meta_box_review_link');

function writingor__add_meta_box_review_link() {
    add_meta_box(
        'writingor__meta_box_review_link', // $id
        __('Review link', 'writingor'), // $title
        'writingor__show_meta_box_review_link', // $callback
        'reviews', // $page_slug
        'normal', // $context
        'high' // $priority
    );
}

function writingor__show_meta_box_review_link() {
    global $post;
    $value = esc_url(get_post_meta($post->ID, 'writingor__review_link', true));
    wp_nonce_field('writingor', 'review_link_nonce');
    echo "<input type=\"text\" name=\"writingor__review_link\" value=\"$value\">";
}


add_action('save_post', 'writingor__save_meta_box_review_link');
add_action('new_to_publish', 'writingor__save_meta_box_review_link');

function writingor__save_meta_box_review_link($post_id) {

    if (!isset($_POST['review_link_nonce']) || !wp_verify_nonce($_POST['review_link_nonce'], 'writingor')) {
        return 'nonce not verified';
    }

    if (wp_is_post_autosave($post_id)) {
        return 'autosave';
    }

    if (wp_is_post_revision($post_id)) {
        return 'revision';
    }

    if (isset($_POST['post_type']) && 'reviews' === $_POST['post_type']) {

        if (!current_user_can('edit_page', $post_id)) {
            return 'cannot edit page';
        } else if (!current_user_can('edit_post', $post_id)) {
            return 'cannot edit post';
        }
    }

    $review_link = sanitize_text_field($_POST['writingor__review_link']);

    update_post_meta($post_id, 'writingor__review_link', $review_link);
}
