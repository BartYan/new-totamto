<?php

    add_action('init', 'totamto_init_posttypes');
    
    function totamto_init_posttypes(){
        /*
         * Register Authors Post Type
         */
        $authors_args = array(
            'labels' => array(
                'name' => 'Autorzy',
                'singular_name' => 'Autorzy',
                'all_items' => 'Wszyscy autorzy',
                'add_new' => 'Dodaj nowego autora',
                'add_new_item' => 'Dodaj nowego autora',
                'edit_item' => 'Edytuj autora',
                'new_item' => 'Nowy autor',
                'view_item' => 'Zobacz autora',
                'search_items' => 'Szukaj w autorach',
                'not_found' =>  'Nie znaleziono żadnych autorów',
                'not_found_in_trash' => 'Nie znaleziono żadnych autorów', 
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            // menu position in kokpit. 5 is under posts
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields'
            ),
            'has_archive' => true,
            'rewrite' => array('slug' => 'autorzy','with_front' => false),    
        );
        
        register_post_type('authors', $authors_args);
        /*
         * Register Illustrators Post Type
         */
        $illustrators_args = array(
            'labels' => array(
                'name' => 'Ilustratorzy',
                'singular_name' => 'Ilustratorzy',
                'all_items' => 'Wszyscy ilustratorzy',
                'add_new' => 'Dodaj nowego ilustratora',
                'add_new_item' => 'Dodaj nowego ilustratora',
                'edit_item' => 'Edytuj ilustratora',
                'new_item' => 'Nowy ilustrator',
                'view_item' => 'Zobacz ilustratora',
                'search_items' => 'Szukaj w ilustratorach',
                'not_found' =>  'Nie znaleziono żadnych ilustratorów',
                'not_found_in_trash' => 'Nie znaleziono żadnych ilustratorów',
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            // menu position in kokpit. 5 is under posts
            'menu_position' => 5,
            'supports' => array(
                'title','editor','illustrator','thumbnail','excerpt','comments','custom-fields'
            ),
            'has_archive' => true,
            'rewrite' => array('slug' => 'ilustratorzy','with_front' => false),    
        );
        
        register_post_type('illustrators', $illustrators_args);
        /*
         * Register Books Post Type
         */
        $books_args = array(
            'labels' => array(
                'name' => 'Książki',
                'singular_name' => 'Książki',
                'all_items' => 'Wszystkie Książki',
                'add_new' => 'Dodaj nową książkę',
                'add_new_item' => 'Dodaj nową książkę',
                'edit_item' => 'Edytuj książkę',
                'new_item' => 'Nowa książka',
                'view_item' => 'Zobacz książkę',
                'search_items' => 'Szukaj w książkach',
                'not_found' =>  'Nie znaleziono żadnych książek',
                'not_found_in_trash' => 'Nie znaleziono żadnych książek w koszu', 
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields'
            ),
            'has_archive' => true,
            'rewrite' => array('slug' => 'ksiazki','with_front' => false),                  
        );
        
        register_post_type('books', $books_args);

        /*
         * Register coming soon Post Type
         */
        // $soon_args = array(
        //     'labels' => array(
        //         'name' => 'Zapowiedzi',
        //         'singular_name' => 'Zapowiedzi',
        //         'all_items' => 'Wszystkie zapowiedzi',
        //         'add_new' => 'Dodaj nową zapowiedź',
        //         'add_new_item' => 'Dodaj nową zapowiedź',
        //         'edit_item' => 'Edytuj zapowiedź',
        //         'new_item' => 'Nowa zapowiedź',
        //         'view_item' => 'Zobacz zapowiedź',
        //         'search_items' => 'Szukaj w zapowiedziach',
        //         'not_found' =>  'Nie znaleziono żadnych zapowiedzi',
        //         'not_found_in_trash' => 'Nie znaleziono żadnych zapowiedzi w koszu', 
        //         'parent_item_colon' => ''
        //     ),
        //     'public' => true,
        //     'publicly_queryable' => true,
        //     'show_ui' => true, 
        //     'query_var' => true,
        //     'rewrite' => true,
        //     'capability_type' => 'post',
        //     'hierarchical' => false,
        //     'menu_position' => 5,
        //     'supports' => array(
        //         'title','editor','author','thumbnail','excerpt','comments','custom-fields'
        //     ),
        //     'has_archive' => true,
        //     'rewrite' => array('slug' => 'zapowiedzi','with_front' => false),              
        // );
        
        // register_post_type('soon', $soon_args);

        /*
        * Register Bestsellers Post Type
        */
        // $bestsellers_args = array(
        //     'labels' => array(
        //         'name' => 'Bestsellery',
        //         'singular_name' => 'Bestsellery',
        //         'all_items' => 'Wszystkie Bestsellery',
        //         'add_new' => 'Dodaj nowy Bestseller',
        //         'add_new_item' => 'Dodaj nowy Bestseller',
        //         'edit_item' => 'Edytuj Bestseller',
        //         'new_item' => 'Nowy Bestseller',
        //         'view_item' => 'Zobacz Bestseller',
        //         'search_items' => 'Szukaj w Bestsellerach',
        //         'not_found' =>  'Nie znaleziono żadnych Bestsellerów',
        //         'not_found_in_trash' => 'Nie znaleziono żadnych Bestsellerów w koszu', 
        //         'parent_item_colon' => ''
        //     ),
        //     'public' => true,
        //     'publicly_queryable' => true,
        //     'show_ui' => true, 
        //     'query_var' => true,
        //     'rewrite' => true,
        //     'capability_type' => 'post',
        //     'hierarchical' => false,
        //     'menu_position' => 5,
        //     'supports' => array(
        //         'title','editor','author','thumbnail','excerpt','comments','custom-fields'
        //     ),
        //     'has_archive' => true,
        //     'rewrite' => array('slug' => 'bestsellery','with_front' => false),                  
        // );

        // register_post_type('bestsellers', $bestsellers_args);
    }


    // REDIRECT SINGLE PAGES
    // add_action( 'template_redirect', 'redirect_post_type_single' );
    //     function redirect_post_type_single(){
    //         if ( ! is_singular( 'authors' ) && ! is_singular( 'illustrators' ) )
    //             return;
    //         wp_redirect( get_page_link( 0 ), 301 );
    //         exit;
    // }

    add_action('init', 'totamto_init_taxonomies');
    /* Register taxonomies */
    function totamto_init_taxonomies(){
        
        // Ingredients
        // register_taxonomy(
        //     'ingredients',
        //     array('recipes'),
        //     array(
        //         'hierarchical' => true,
        //         'labels' => array(
        //             'name' => 'Składniki',
        //             'singular_name' => 'Składniki',
        //             'search_items' =>  'Wyszukaj składniki',
        //             'popular_items' => 'Najpopularniejsze składniki',
        //             'all_items' => 'Wszystkie składniki',
        //             'most_used_items' => null,
        //             'parent_item' => null,
        //             'parent_item_colon' => null,
        //             'edit_item' => 'Edytuj składnik', 
        //             'update_item' => 'Aktualizuj składnik',
        //             'add_new_item' => 'Dodaj nowy składnik',
        //             'new_item_name' => 'Nazwa nowego skadnika',
        //             'separate_items_with_commas' => 'Oddziel składniki przecinkiem',
        //             'add_or_remove_items' => 'Dodaj lub usuń składniki',
        //             'choose_from_most_used' => 'Wybierz spośród najczęścież używanych składników',
        //             'menu_name' => 'Składniki',
        //         ),
        //         'show_ui' => true,
        //         'update_count_callback' => '_update_post_term_count',
        //         'query_var' => true,
        //         'rewrite' => array('slug' => 'ingredient' )
        // ));

        // Age types
        register_taxonomy(
            'age-type',
            array('books', 'soon', 'bestsellers'),
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Kategoria Wiekowa', 'taxonomy general name',
                    'singular_name' => 'Kategoria Wiekowa', 'taxonomy singular name',
                    'search_items' =>  'Wyszukaj Kategorię Wiekową',
                    'popular_items' => 'Najpopularniejsze',
                    'all_items' => 'Wszystkie',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edytuj', 
                    'update_item' => 'Aktualizuj',
                    'add_new_item' => 'Dodaj nową kategorię',
                    'new_item_name' => 'Nazwa nowej kategorii wiekowej',
                    'separate_items_with_commas' => 'Oddziel przecinkiem',
                    'add_or_remove_items' => 'Dodaj lub usuń kategorię wiekową',
                    'choose_from_most_used' => 'Wybierz spośród najczęścież używanych',
                    'menu_name' => 'Kategoria Wiekowa',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'age-type' )
        )); 
    }
?>