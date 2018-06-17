<?php
/**
 * Theme Option
 *
 * 
 */
if (!function_exists('venta_slider_section_option')) :
    function venta_slider_section_option()
    {
        $venta_slider_section_option = array(
            'show' => esc_html__('Show', 'venta'),
            'hide' => esc_html__('Hide', 'venta')
        );
        return apply_filters('venta_slider_section_option', $venta_slider_section_option);
    }
endif;

if (!function_exists('venta_services_section_option')) :
    function venta_services_section_option()
    {
        $venta_services_section_option = array(
            'show' => esc_html__('Show', 'venta'),
            'hide' => esc_html__('Hide', 'venta')
        );
        return apply_filters('venta_services_section_option', $venta_services_section_option);
    }
endif;
 

if (!function_exists('venta_service_col_layout_option')) :
    function venta_service_col_layout_option()
    {
        $venta_service_col_layout_option = array(
            '6' => esc_html__('2 Column Layout', 'venta'),
			'4' => esc_html__('3 Column Layout', 'venta'),
        );
        return apply_filters('venta_service_col_layout_option', $venta_service_col_layout_option);
    }
endif;

if (!function_exists('venta_aboutus_section_option')) :
    function venta_aboutus_section_option()
    {
        $venta_aboutus_section_option = array(
            'show' => esc_html__('Show', 'venta'),
            'hide' => esc_html__('Hide', 'venta')
        );
        return apply_filters('venta_aboutus_section_option', $venta_aboutus_section_option);
    }
endif;

if (!function_exists('venta_testi_section_option')) :
    function venta_testi_section_option()
    {
        $venta_testi_section_option = array(
            'show' => esc_html__('Show', 'venta'),
            'hide' => esc_html__('Hide', 'venta')
        );
        return apply_filters('venta_testi_section_option', $venta_testi_section_option);
    }
endif;


 if (!function_exists('venta_features_section_option')) :
    function venta_features_section_option()
    {
        $venta_features_section_option = array(
            'show' => esc_html__('Show', 'venta'),
            'hide' => esc_html__('Hide', 'venta')
        );
        return apply_filters('venta_features_section_option', $venta_features_section_option);
    }
endif;
 

if (!function_exists('venta_footer_section_option')) :
    function venta_footer_section_option()
    {
        $venta_footer_section_option = array(
            'show' => esc_html__('Show', 'venta'),
            'hide' => esc_html__('Hide', 'venta')
        );
        return apply_filters('venta_footer_section_option', $venta_footer_section_option);
    }
endif;

if (!function_exists('venta_blog_section_option')) :
    function venta_blog_section_option()
    {
        $venta_blog_section_option = array(
            'show' => esc_html__('Show', 'venta'),
            'hide' => esc_html__('Hide', 'venta')
        );
        return apply_filters('venta_blog_section_option', $venta_blog_section_option);
    }
endif;
 

?>