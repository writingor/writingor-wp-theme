<?

function writingor__add_post_types() {
    $all_params = [
        [
            'slug' => 'reviews',
            'singular_name' => __('Review', 'writingor'),
            'plural_name' => __('Reviews', 'writingor'),
        ],
        [
            'slug' => 'benefits',
            'singular_name' => __('Benefit', 'writingor'),
            'plural_name' => __('Benefits', 'writingor'),
        ],
        [
            'slug' => 'services',
            'singular_name' => __('Service', 'writingor'),
            'plural_name' => __('Services', 'writingor'),
        ],
        [
            'slug' => 'portfolio',
            'singular_name' => __('Portfolio', 'writingor'),
            'plural_name' => __('Portfolio', 'writingor'),
        ],
        [
            'slug' => 'notebook',
            'singular_name' => __('Notebook', 'writingor'),
            'plural_name' => __('Notebook', 'writingor'),
        ],
        [
            'slug' => 'blog',
            'singular_name' => __('Blog', 'writingor'),
            'plural_name' => __('Blog', 'writingor'),
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