<?php 
    //add_action est 1 hook (crochet) qui me permet d utiliser la fonction prédéfinie widgets_init. Elle va me permettre de crée ds zones/widgets qui recevront ensuite du contenu sur mes pages 
    //A 7 fonction widgets_init, je lui donne 1 nom personnalisé 'montheme_init_sidebar'
    add_action('widgets_init', 'montheme_init_sidebar');

    function montheme_init_sidebar()
    {   
        // en haut à gauche
        register_sidebar(array(
            'name' => __('haut gauche', 'montheme'),
            'id' => __('haut-gauche'),
            'description' => __('Zone en haut à gauche', 'montheme')
        ));

        // en haut à droite
        register_sidebar(array(
            'name' => __('haut droit', 'montheme'),
            'id' => __('haut-droit'),
            'description' => __('Zone en haut à droite', 'montheme')
        ));

        // la zone pr img entete
        register_sidebar(array(
            'name' => __('entete', 'montheme'),
            'id' => __('entete'),
            'description' => __('Zone entete', 'montheme')
        ));

        // en bas à gauche
        register_sidebar(array(
            'name' => __('bas gauche', 'montheme'),
            'id' => __('bas-gauche'),
            'description' => __('Zone en bas à gauche', 'montheme')
        ));

        // en bas à droite
        register_sidebar(array(
            'name' => __('bas droit', 'montheme'),
            'id' => __('bas-droit'),
            'description' => __('Zone en bas à droite', 'montheme')
        ));
    }

    add_action('init', 'montheme_init_menu');

    function montheme_init_menu(){
        register_nav_menu('primary', __('Primary Menu', 'montheme'));  
    }


?>