<?php
/*
Plugin Name: Bit Portfolio Plugin
Plugin URI: https://github.com/qwerty93k/bit-portfolio-plugin
Description: Plugin which is required for our custom theme
Version: 1.0.0
Author: qwerty93k
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: bit-portfolio-plugin
*/

//Bit portfolio
//function suma()

// Bit darbai
//function suma()

//ta pati funkcija negali buti deklaruota du kartus
//PHP erroras kad funkcija suma jau yra deklaruota
//uztad kiekvienai funkcijai reikia uzdedi prefix kaip "bit_portfolio"

//post type Works
function bit_portfolio_create_post_type_works()
{
    register_post_type('works', array(
        'labels' => array(
            'name' => __('Works'),
            'singular_name' => __('Work')
            // kvieciama teksto iregistravimo i sistema funkcija
        ),
        'public' => true,
        'has_archive' => true, // leidzia kurti musu post type kategorijas,
        'rewrite' => array('slug' => 'works'), //post type sukuria nuoroda /works
        'show_in_rest' => true
    ));
}
add_action('init', 'bit_portfolio_create_post_type_works');

// sukuria mygtuka customize opcijom

function bit_portfolio_customize_background_color($wp_customize)
{
    //$wp_customize - visi Customize sekcijoje esantys nustatymai

    $wp_customize->add_section('bit_portfolio_bit_colors', array(
        'title' => __('Bit colors'),
        'priority' => 100
    ));

    //Kad cia yra sukuriamas tekstinis laukas
    $wp_customize->add_setting('bit_portofolio_background_color', array(
        'default' => 'red',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_background_color', array(
        'label' => __("Background color"),
        'description' => __("Enter background color"),
        'section' => 'bit_portfolio_bit_colors',
        'type' => 'text',
        'priority' => 10
    )));

    //sukursime nauja nustatyma kuriame galime pasirinkti spalva

    $wp_customize->add_setting('bit_portfolio_second_background_color', array(
        'default' => '#FFFFFF',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bit_portfolio_second_background_color', array(
        'label' => 'Second background color',
        'section' => 'bit_portfolio_bit_colors',
        'settings' => 'bit_portfolio_second_background_color'
    )));

    //Kuriame nuotraukos iterpimo lauka

    $wp_customize->add_setting('bit_portfolio_custom_image', array(
        'default' => '',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bit_portfolio_custom_image', array(
        'label' => 'Custom Image',
        'description' => 'Select your image',
        'section' => 'bit_portfolio_bit_colors'
    )));
}
add_action('customize_register', 'bit_portfolio_customize_background_color');

//customize header

function bit_portfolio_customize_header($wp_customize)
{
    $wp_customize->add_section('bit_portfolio_header', array(
        'title' => __('Header settings'),
        'priority' => 100
    ));

    // logo

    $wp_customize->add_setting('bit_portofolio_header_logo', array(
        'default' => 'logo',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_header_logo', array(
        'label' => __("Logo"),
        'description' => __("Enter blogo"),
        'section' => 'bit_portfolio_header',
        'type' => 'text',
        'priority' => 10
    )));

    // copyrightText

    $wp_customize->add_setting('bit_portofolio_header_copyright', array(
        'default' => 'logo',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_header_copyright', array(
        'label' => __("Copyright text"),
        'description' => __("Enter text"),
        'section' => 'bit_portfolio_header',
        'type' => 'text',
        'priority' => 10
    )));

    // copyright text before date

    $wp_customize->add_setting('bit_portofolio_header_copyright_beforeDate', array(
        'default' => 'logo',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_header_copyright_beforeDate', array(
        'label' => __("Copyright text"),
        'description' => __("Enter text"),
        'section' => 'bit_portfolio_header',
        'type' => 'text',
        'priority' => 10
    )));

    // change copyright text after date

    $wp_customize->add_setting('bit_portofolio_header_copyright_afterDate', array(
        'default' => 'logo',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_header_copyright_afterDate', array(
        'label' => __("Copyright text"),
        'description' => __("Enter text"),
        'section' => 'bit_portfolio_header',
        'type' => 'text',
        'priority' => 10
    )));

    // link target

    $wp_customize->add_setting('bit_portofolio_header_linkTarget', array(
        'default' => 'logo',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_header_linkTarget', array(
        'label' => __("Target Link"),
        'section' => 'bit_portfolio_header',
        'type' => 'checkbox',
        'priority' => 10
    )));

    // facebook

    $wp_customize->add_setting('bit_portofolio_header_facebook', array(
        'default' => 'logo',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_header_facebook', array(
        'label' => __("Facebook link"),
        'description' => __("Enter link"),
        'section' => 'bit_portfolio_header',
        'type' => 'text',
        'priority' => 10
    )));

    // twitter

    $wp_customize->add_setting('bit_portofolio_header_twitter', array(
        'default' => 'logo',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_header_twitter', array(
        'label' => __("Twitter link"),
        'description' => __("Enter link"),
        'section' => 'bit_portfolio_header',
        'type' => 'text',
        'priority' => 10
    )));

    // ig

    $wp_customize->add_setting('bit_portofolio_header_instagram', array(
        'default' => 'logo',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_header_instagram', array(
        'label' => __("Instagram link"),
        'description' => __("Enter link"),
        'section' => 'bit_portfolio_header',
        'type' => 'text',
        'priority' => 10
    )));

    // linkedin

    $wp_customize->add_setting('bit_portofolio_header_linkedin', array(
        'default' => 'logo',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_header_linkedin', array(
        'label' => __("Linkedin link"),
        'description' => __("Enter link"),
        'section' => 'bit_portfolio_header',
        'type' => 'text',
        'priority' => 10
    )));
}
add_action('customize_register', 'bit_portfolio_customize_header');

//customize footer

function bit_portfolio_customize_footer($wp_customize)
{
    $wp_customize->add_section('bit_portfolio_footer', array(
        'title' => __('Footer settings'),
        'priority' => 100
    ));

    // Menu title #1

    $wp_customize->add_setting('bit_portofolio_footer_menuTitle1', array(
        'default' => 'title',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_footer_menuTitle1', array(
        'label' => __("Menu title #1"),
        'description' => __("Enter title"),
        'section' => 'bit_portfolio_footer',
        'type' => 'text',
        'priority' => 10
    )));

    // Menu title #2

    $wp_customize->add_setting('bit_portofolio_footer_menuTitle2', array(
        'default' => 'title',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_footer_menuTitle2', array(
        'label' => __("Menu title #2"),
        'description' => __("Enter title"),
        'section' => 'bit_portfolio_footer',
        'type' => 'text',
        'priority' => 10
    )));

    // Contact title

    $wp_customize->add_setting('bit_portofolio_footer_contact_title', array(
        'default' => 'title',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_footer_contact_title', array(
        'label' => __("Contact title"),
        'description' => __("Enter title"),
        'section' => 'bit_portfolio_footer',
        'type' => 'text',
        'priority' => 10
    )));

    // Contact adress

    $wp_customize->add_setting('bit_portofolio_footer_contact_adress', array(
        'default' => 'title',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_footer_contact_adress', array(
        'label' => __("Contact adress"),
        'description' => __("Enter adress"),
        'section' => 'bit_portfolio_footer',
        'type' => 'text',
        'priority' => 10
    )));

    // Contact phone

    $wp_customize->add_setting('bit_portofolio_footer_contact_phone', array(
        'default' => 'title',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_footer_contact_phone', array(
        'label' => __("Contact phone"),
        'description' => __("Enter phone number"),
        'section' => 'bit_portfolio_footer',
        'type' => 'text',
        'priority' => 10
    )));

    // Contact email

    $wp_customize->add_setting('bit_portofolio_footer_contact_email', array(
        'default' => 'title',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_footer_contact_email', array(
        'label' => __("Contact email"),
        'description' => __("Enter email"),
        'section' => 'bit_portfolio_footer',
        'type' => 'text',
        'priority' => 10
    )));

    // Copyright before

    $wp_customize->add_setting('bit_portofolio_footer_contact_copyrightBefore', array(
        'default' => 'title',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_footer_contact_copyrightBefore', array(
        'label' => __("Copyright before"),
        'description' => __("Enter text"),
        'section' => 'bit_portfolio_footer',
        'type' => 'text',
        'priority' => 10
    )));

    // Contact after

    $wp_customize->add_setting('bit_portofolio_footer_contact_copyrightAfter', array(
        'default' => 'title',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_footer_contact_copyrightAfter', array(
        'label' => __("Copyright after"),
        'description' => __("Enter text"),
        'section' => 'bit_portfolio_footer',
        'type' => 'text',
        'priority' => 10
    )));
}
add_action('customize_register', 'bit_portfolio_customize_footer');

//customize 404

function bit_portfolio_customize_404($wp_customize)
{
    $wp_customize->add_section('bit_portfolio_404', array(
        'title' => __('404 settings'),
        'priority' => 100
    ));

    // title

    $wp_customize->add_setting('bit_portofolio_404_title', array(
        'default' => 'title',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_404_title', array(
        'label' => __("Title"),
        'description' => __("Enter title name"),
        'section' => 'bit_portfolio_404',
        'type' => 'text',
        'priority' => 10
    )));

    //desc

    $wp_customize->add_setting('bit_portofolio_404_description', array(
        'default' => 'description',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_404_description', array(
        'label' => __("Description"),
        'description' => __("Enter description"),
        'section' => 'bit_portfolio_404',
        'type' => 'text',
        'priority' => 10
    )));

    //link

    $wp_customize->add_setting('bit_portofolio_404_link', array(
        'default' => 'link',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bit_portofolio_404_link', array(
        'label' => __("Link"),
        'description' => __("Enter Link"),
        'section' => 'bit_portfolio_404',
        'type' => 'text',
        'priority' => 10
    )));

    // bg image

    $wp_customize->add_setting('bit_portofolio_404_img', array(
        'default' => '',
        'sanitize_callback' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bit_portofolio_404_img', array(
        'label' => '404 Image',
        'description' => 'Select your image',
        'section' => 'bit_portfolio_404'
    )));
}
add_action('customize_register', 'bit_portfolio_customize_404');
