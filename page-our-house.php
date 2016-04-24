<?php
/**
 * Template Name: Our House Grid View
 *
 * @package son-of-a-saint
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
        <div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
          <main id="main" class="container site-main" role="main">
            <?php
            while (have_posts()) {
              the_post();

              get_template_part('content', 'single');

            } //endwhile;
            ?>
            <ul class="member-grid row">
              <li class="col-md-4 col-sm-6 col-xs-12 member no-pad">
                <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fpo-who-we-are.jpg" alt="">
                <div class="info">
                  <h3>Kush</h3>
                  <p>Kush Hamilton is a 6th grader at Audubon Charter School and a future astrophysicist. He has a passion for astronomy, robotics and physics &ndash; and plans to attend MIT. Kush is one of 36 fatherless boys whose futures we are working to ensure.</p>
                </div>
                </a>
              </li>
            </ul>

          </main>
        </div>

<?php get_footer(); ?>
