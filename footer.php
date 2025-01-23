<?php
/**
 * The template for displaying the footer
 * @package Omega Travel Agents
 * @since 1.0.0
 */

/**
 * Toogle Contents
 * @hooked omega_travel_agents_content_offcanvas - 30
*/

do_action('omega_travel_agents_before_footer_content_action'); ?>

</div>

<footer id="site-footer" role="contentinfo">

    <?php
    /**
     * Footer Content
     * @hooked omega_travel_agents_footer_content_widget - 10
     * @hooked omega_travel_agents_footer_content_info - 20
    */

    do_action('omega_travel_agents_footer_content_action'); ?>

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>