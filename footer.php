<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage NEXUS_Clinical
 * @since NEXUS Clinical 1.0
 */
?>
<!------- FOOTER -------->
        <section class="footer p-5 text-white clearfix">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" class="img-fluid" alt="Footer Logo">
                        <div class="seperator"></div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-unstyled list-inline-item">
                                    <li class="list-inline-item">&copy; 2022 Nexus Clinical, LLC</li>
                                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                                    <li class="list-inline-item">All Rights Reserved</li>
                                </ul>
                            </div>
                        </div>
                        <h4>239.204.4643</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- SCRIPTS -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/bootstrap/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
