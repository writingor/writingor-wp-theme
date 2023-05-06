<?

function writingor__add_post_types() {
    $all_params = [
        [
            'slug' => 'reviews',
            'singular_name' => __('Отзыв', 'writingor'),
            'plural_name' => __('Отзывы', 'writingor'),
        ],
        [
            'slug' => 'benefits',
            'singular_name' => __('Преимущество', 'writingor'),
            'plural_name' => __('Преимущества', 'writingor'),
        ],
        [
            'slug' => 'services',
            'singular_name' => __('Услуга', 'writingor'),
            'plural_name' => __('Услуги', 'writingor'),
        ],
        [
            'slug' => 'portfolio',
            'singular_name' => __('Портфолио', 'writingor'),
            'plural_name' => __('Портфолио', 'writingor'),
        ]
    ];
    
    foreach ($all_params as $params) {
        register_post_type(
            $params['slug'],
            [
                'labels' => array(
                    'name' => $params['plural_name'],
                    'singular_name' => $params['singular_name']
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => ['slug' => $params['slug']],
                'show_in_rest' => true,
                'supports' => ['title', 'excerpt', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields']
            ]
        );
    }
}
add_action('init', 'writingor__add_post_types');