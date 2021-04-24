<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<style>
    .footer-navigation>div {
        display: flex;
        gap: 104px;
        color: black;

    }

    .site-footer {
        background-color: white;
    }

    .copyright {
        text-align: right;
        font-size: 14px;
    }

    ul {
        list-style: none;
    }

</style>

</div>
<!-- #content -->

<footer id="colophon" class="site-footer">
    <?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
    <div class="site-info">

        <?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
        <?php if ( has_nav_menu( 'footer' ) ) : ?>
        <nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
            <div class="menu-footer-container">
                <ul id="om_loud">
                    <h4>OM LOUD</h4>
                    <li id="loud_lab"><a href="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/loud-lab/">LOUD LAB</a></li>
                    <li id="presse"><a href="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/presse/">PRESSE</a></li>
                    <li id="job"><a href="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/job/">JOB</a></li>
                </ul>
                <ul id="kontakt">
                    <h4>KONTAKT</h4>
                    <li id="kontakt"><a href="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/kontakt-os/">KONTAKT OS</a></li>
                </ul>
                <ul id="indhold">
                    <h4>INDHOLD</h4>
                    <li id="tjenester"><a href="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/tjenester/">TJENESTER</a></li>
                </ul>
            </div>

        </nav>

        <div class="copyright">
            <p>© Copyright 2021. Radio Loud.</p>
        </div>
        <!-- .footer-navigation -->
        <?php endif; ?>
    </div>
    <!-- .site-info -->
</footer>
<!-- #colophon -->

</div>
<!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
