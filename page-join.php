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
$main_dir = get_stylesheet_directory_uri();

?>
        <div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
          <main id="main" class="container site-main" role="main">
            <section id="/mentor-application" class="row statement-block">
              <div class="clearfix">
                <img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/wwd-photoStrip.jpg" alt="">
              </div>
              <header class="col-sm-8 col-sm-offset-2 boxed-header text-center">
                <div class="headline-box">
                  <h3 class="headline">Become a Mentor</h3>
                </div>
                <p>When a boy is mentored into a well-developed man, there are huge rewards – not just for the boy but for the adult mentor as well. Please fill out the mentor application to start the process. You may opt to mentor a group of boys or one-on-one. </p>
                <p><a href="https://www.surveymonkey.com/r/SOASMENTOR" target="_blank" class="btn btn-default btn-invert">Mentor Application</a></p>
              </header>
            </section>
            <div class="clearfix text-center">
              <img src="<?php echo $main_dir; ?>/img/what-we-do/icon-strip.png" alt="" class="icon-strip">
            </div>
            <section id="/member-application" class="row statement-block">
              <header class="col-sm-8 col-sm-offset-2 boxed-header text-center">
                <div class="headline-box">
                  <h3 class="headline">Become a Member</h3>
                </div>
                <p>Thank you for your interest in Son of a Saint. We know it can be hard for a single mom to raise a boy. Although we have limited space, your application is welcome and will be considered carefully. Please note that we can only accept boys who have lost their father to violence or natural causes, long term incarceration of 15 years or more to serve or adopted by a single mother. We currently do not accept willful neglect cases due to capacity restrictions. </p>
                <p>​Boys enter the program between the ages of 10-13 and participate until the age of 18. We currently have 40-50 boys in our program with plans to add 10 new members each year. Applications are accepted year-round but are only reviewed between December 1 and December 20. Boys who are accepted are contacted by December 25.</p>
                <p><a href="https://www.surveymonkey.com/r/?sm=tTXjrs5GngOLEsj%2fZ1zvjQ%3d%3d" target="_blank" class="btn btn-default btn-invert">Member Application</a></p>
              </header>
            </section>
          </main>
        </div>

<?php get_footer(); ?>
