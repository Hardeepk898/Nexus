<?php
/**
 * Header file for the NEXUS Clinical theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NEXUS_Clinical
 * @since NEXUS Clinicaly 1.0
 */
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <link rel="profile" href="https://gmpg.org/xfn/11">
        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/custom.css">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <?php
        wp_body_open();
        ?>

        <!------- HEADER -------->
        <section class="header pt-3 text-sm-start text-center clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-4">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" class="img-fluid mb-3" alt="Logo">
                    </div>
                    <div class="col-lg-5 col-sm-8">
                        <div class="row mt-4">
                            <div class="col-lg-2 col-sm-3 col-3 text-end">Let's Talk</div>
                            <div class="col-lg-4 col-sm-3 col-3 text-end mb-3 GWHN"><span class="header_number">239.204.4643</span></div>
                            <div class="col-lg-6 col-sm-6 col-6 GWHO"><span class="header_oneonone">ONE-ON-ONE DEMO</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>