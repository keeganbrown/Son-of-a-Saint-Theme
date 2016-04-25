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
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
              </header><!-- .entry-header -->
              <div class="entry-content">
                <dl class="statement-list">
                  <dt>We save lives, and then we build lives.</dt>
                  <dd>Each year, Son of a Saint selects a group of boys ages 10-13 to join the existing kids in our program. The boys must be fatherless due to their father's incarceration, death or abandonment. Each boy remains a member of Son of a Saint until he is 18 and receives his college acceptance letter.</dd>
                  <dt>What we provide, above all else, is an example.</dt>
                  <dd>Son of a Saint equips boys with the tools they need to become productive men. We give them hope, vision and opportunity. We provide a secure and consistent environment for them. But the Son of a Saint mentors’ most important role is simply to be a good example.</dd>
                  <dt>We have expectations.</dt>
                  <dd>Boys must maintain a minimum 2.7 GPA, complete four hours of community service each month and maintain good conduct at home, school and within the Son of a Saint organization.</dd>
                </dl>
              </div>
            </article>
          </main>
        </div>

<?php get_footer(); ?>
