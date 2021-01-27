<?php

/**
 * Get menu with depth 4
 */

$menuLocations = get_nav_menu_locations();


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

function get_mobile_childrens($menu){
    foreach($menu as $item){
        $menu           = [];
        $menu['url']    = $item->url;
        $menu['title']  = $item->title;
        if( isset($item->children) && !empty($item->children) ){
            $childrens = get_mobile_childrens($item->children);
            $menu['children']     = $childrens;
        }
        $phone_menus[]        = $menu;
    }
    return $phone_menus;
}

$nav_menu_items = wp_get_nav_menu_items( $menuLocations['top'] );
$nav_menu_items = wpse170033_nav_menu_object_tree( $nav_menu_items );
$menus          = [];

$nav_phone_menu_items = wp_get_nav_menu_items( $menuLocations['phone'] );
$nav_phone_menu_items = wpse170033_nav_menu_object_tree( $nav_phone_menu_items );
$phone_menus           = [];


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

function getPhone($nav_phone_menu_items){
    foreach($nav_phone_menu_items as $item){
        $phone_menu           = [];
        $phone_menu['url']    = $item->url;
        $phone_menu['title']  = $item->title;
        $phone_childs         = get_mobile_childrens($item->children);
        $phone_menu['children']         = $phone_childs;
        $phone_menus[]        = $phone_menu;
    }
    return $phone_menus;
}

$menus          = get($nav_menu_items);
$phone_menus    = getPhone($nav_phone_menu_items);

function get_mobile_menu($phone_menus){
    $html = "<ul>";
    foreach($phone_menus as $menu){
        $html .= "<li>";
        if(!empty($menu['children'])){
            $html .= "<span>".$menu['title']."</span>";
            $html .= "<ul>";
            foreach($menu['children'] as $child){
                $html .= "<li>";
                if(!empty($menu['children'])){
                    $html .= "<span>".$child['title']."</span>";
                    $html .= "<ul>";
                    foreach($child['children'] as $ch){
                        $html .= "<li>";
                            if(!empty($ch['children'])){
                                $html .= "<span>".$ch['title']."</span>";
                                $html .= "<ul>";
                                foreach($ch['children'] as $c){
                                    $html .= "<li>";
                                    $html .= "<a href=".$c['url'].">".$c['title']."</a>";
                                    $html .= "</li>";
                                }
                                $html .= "</ul>";
                            }else{
                                $html .= "<a href=".$ch['url'].">".$ch['title']."</a>";
                            }
                        $html .= "</li>";
                    }
                    $html .= "</ul>";
                }else{
                    $html .= "<a href=".$menu['url'].">".$menu['title']."</a>";
                }
                $html .= "</li>";
            }
            $html .= "</ul>";
        }else{
            $html .= "<a href=".$menu['url'].">".$menu['title']."</a>";
        }
        
        $html .= "</li>";
    }
    $html .= "</ul>";

    return $html;
}

function get_desktop_menu($menus){
    $html = "<nav class='nav nav-navbar mx-auto'>";
    foreach($menus as $menu){
        $html .= "<li class='nav-item'>";
        if(!empty($menu['children'])){
            $html .= "<a class='nav-link ksksks' href=".$menu['url']."><span>".$menu['title']."</span></a>";
            $html .= "<ul class='nav'>";
            foreach($menu['children'] as $child){
                $html .= "<li class='nav-item'>";
                if(!empty($menu['children'])){
                    $html .= "<a href=".$child['url']." class='nav-link d-flex justify-content-between'>".$child['title']."</a>";
                    $html .= "<nav class='nav'>";
                    foreach($child['children'] as $ch){
                        $html .= "<li class='nav-item'>";
                            if(!empty($ch['children'])){
                                $html .= "<a href=".$ch['url']." class='nav-link d-flex justify-content-between'>".$ch['title']."</a>";
                                $html .= "<nav class='nav'>";
                                foreach($ch['children'] as $c){
                                    $html .= "<li class='nav-item'>";
                                    $html .= "<a href=".$c['url']." class='nav-link d-flex justify-content-between'>".$c['title']."</a>";
                                    $html .= "</li>";
                                }
                                $html .= "</nav>";
                            }else{
                                $html .= "<a href=". $ch['url'] ." class='nav-link'>".$ch['title']."</a>";
                            }
                        $html .= "</li>";
                    }
                    $html .= "</nav>";
                }else{
                    $html .= "<a href=".$child['url']." class='nav-link'>".$child['title']."</a>";
                }
                $html .= "</li>";
            }
            $html .= "</ul>";
        }else{
            $html .= "<a href=".$menu['url']." class='nav-link ksksks'><span>".$menu['title']."</span></a>";
        }
        
        $html .= "</li>";
    }
    $html .= "</nav>";

    return $html;
}
