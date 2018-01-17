<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myPortfolio
 */

?>

<?php wp_footer(); ?>

<!-- FOOTER ====================================== -->
    <footer>
        <div class="container">
            <div class="col-sm-3">
                <span>My custom WordPress theme - myPortfolio</span>
            </div><!-- end col -->
            <div class="col-sm-6">
                <nav>
                    <ul class="list-unstyled list-inline">
                        <li><a href="">Home</a></li>
                        <li><a href="my_experiences.html">My Experiences</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div><!-- end col -->
            <div class="col-sm-3">
                <p class="pull-right">&copy; 2017 Li</p>
            </div><!-- end col -->
        </div><!-- container -->
    </footer>

     <!-- BOOTSTRAP CORE JAVASCRIPT Placed at the end of the document so the pages load faster! =================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-2.1.1.min.js"></script>

    <script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>

    <!-- TypeKit Fonts -->
    <script src="https://use.typekit.net/jnz1twl.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

</body>
</html>
