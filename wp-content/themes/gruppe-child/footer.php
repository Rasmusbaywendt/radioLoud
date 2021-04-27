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

    .social {
        display: flex;
        width: 159px;
        position: relative;
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
            <div id="menu-footer-container">
                <ul class="om_loud">
                    <h4>OM LOUD</h4>
                    <li class="loud_lab"><a href="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/loud-lab/">LOUD LAB</a></li>
                    <li class="presse"><a href="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/presse/">PRESSE</a></li>
                    <li class="job"><a href="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/job/">JOB</a></li>
                </ul>
                <ul class="kontakt">
                    <h4>KONTAKT</h4>
                    <li class="kontakt"><a href="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/kontakt-os/">KONTAKT OS</a></li>
                </ul>
                <ul class="indhold">
                    <h4>INDHOLD</h4>
                    <li class="tjenester"><a href="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/tjenester/">TJENESTER</a></li>
                </ul>
            </div>
        </nav>
        <div class="social">
            <div class="fb">
                <a href="https://www.facebook.com/radiolouddanmark/?eid=ARCok3iN-43r-Zy-3tZ9xuiDDMFbjP4wGb1bWb3T2cooYWi6X6cvpkIDzHRSJ11JfN4NOlFoWCPSydlk/"><img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/facebook.png" alt="facebook"></a>
            </div>
            <div class="insta">
                <a href="https://www.instagram.com/radio.louddk/"><img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/instagram.png" alt="instagram"></a>
            </div>
            <div class="youtube">
                <a href="https://www.youtube.com/channel/UCjuazr_wWF6hWUVUd30cMkw?view_as=subscriber"><img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/youtube.png" alt="youtube"></a>
            </div>
        </div>
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
