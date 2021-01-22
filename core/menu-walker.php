<?php

class Menu_Walker{
    private $menuLocations = get_nav_menu_locations();
    private $nav_menu_items = wp_get_nav_menu_items( $menuLocations['top'] );
    private $nav_menu_items = wpse170033_nav_menu_object_tree( $nav_menu_items );
    private $menus = [];


    function wpse170033_nav_menu_object_tree( $nav_menu_items_array ) {
        foreach ( $nav_menu_items_array as $key => $value ) {
            $value->children = array();
            $nav_menu_items_array[ $key ] = $value;
        }

        $nav_menu_levels = array();
        $index = 0;
        if ( ! empty( $nav_menu_items_array ) ) do {
            if ( $index == 0 ) {
                foreach ( $nav_menu_items_array as $key => $obj ) {
                    if ( $obj->menu_item_parent == 0 ) {
                        $nav_menu_levels[ $index ][] = $obj;
                        unset( $nav_menu_items_array[ $key ] );
                    }
                }
            } else {
                foreach ( $nav_menu_items_array as $key => $obj ) {
                    if ( in_array( $obj->menu_item_parent, $last_level_ids ) ) {
                        $nav_menu_levels[ $index ][] = $obj;
                        unset( $nav_menu_items_array[ $key ] );
                    }
                }
            }
            $last_level_ids = wp_list_pluck( $nav_menu_levels[ $index ], 'db_id' );
            $index++;
        } while ( ! empty( $nav_menu_items_array ) );

        $nav_menu_levels_reverse = array_reverse( $nav_menu_levels );

        $nav_menu_tree_build = array();
        $index = 0;
        if ( ! empty( $nav_menu_levels_reverse ) ) do {
            if ( count( $nav_menu_levels_reverse ) == 1 ) {
                $nav_menu_tree_build = $nav_menu_levels_reverse;
            }
            $current_level = array_shift( $nav_menu_levels_reverse );
            if ( isset( $nav_menu_levels_reverse[ $index ] ) ) {
                $next_level = $nav_menu_levels_reverse[ $index ];
                foreach ( $next_level as $nkey => $nval ) {
                    foreach ( $current_level as $ckey => $cval ) {
                        if ( $nval->db_id == $cval->menu_item_parent ) {
                            $nval->children[] = $cval;
                        }
                    }
                }
            }
        } while ( ! empty( $nav_menu_levels_reverse ) );

        $nav_menu_object_tree = $nav_menu_tree_build[ 0 ];
        return $nav_menu_object_tree;
    }


    function get_childrens($menu){
        foreach($menu as $item){
            $menu           = [];
            $menu['url']    = $item->url;
            $menu['title']  = $item->title;
            if( isset($item->children) && !empty($item->children) ){
                $childrens = get_childrens($item->children);
                $menu['children']     = $childrens;
            }
            $menus[]        = $menu;
        }
        return $menus;
    }

    function get($nav_menu_items){
        foreach($nav_menu_items as $item){
            $menu           = [];
            $menu['url']    = $item->url;
            $menu['title']  = $item->title;
            $childs         = get_childrens($item->children);
            $menu['children']         = $childs;
            $menus[]        = $menu;
        }
        return $menus;
    }

    function html($menus){
        $html = "<ul>";
        foreach($menus as $menu){
            echo $menu['title'];
        }
        $html .= "</ul>";
    }

}