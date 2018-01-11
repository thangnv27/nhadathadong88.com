<?php
get_header();
?>

    <!-- Page Head -->
    <?php get_template_part("banners/default_page_banner"); ?>

    <!-- Content -->
    <div class="container contents single">
        <div class="row">
            <div class="span9 main-wrap">
                <!-- Main Content -->
                <div class="main">

                    <div class="inner-wrapper">
                        <h1>404 NOT FOUND</h1>
                    </div>

                </div><!-- End Main Content -->

            </div> <!-- End span9 -->

            <?php get_sidebar('pages'); ?>

        </div><!-- End contents row -->

    </div><!-- End Content -->

<?php get_footer(); ?>