<?

function writingor__add_post_types() {
    $all_params = [
        [
            'slug' => 'reviews',
            'singular_name' => 'Review',
            'plural_name' => 'Reviews',
        ],
        [
            'slug' => 'benefits',
            'singular_name' => 'Benefit',
            'plural_name' => 'Benefits',
        ],
        [
            'slug' => 'services',
            'singular_name' => 'Service',
            'plural_name' => 'Services',
        ],
        [
            'slug' => 'portfolio',
            'singular_name' => 'Portfolio',
            'plural_name' => 'Portfolio',
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