<?php
/**
 * Template Name: Homepage
 *
 * @package son-of-a-saint
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
        <div class="heros-box" id="main-column">
          <div class="main-floating-cta floating-hero-cta-wrap">
          <div class="floating-hero-cta">
          <div class="container">
          <div class="hero-content-box">
            <br>
            <br>
            <br>
            <br>
            <br>
            <a href="/who-we-are/#/members" class="btn btn-default">Meet the Boys</a>
          </div>
          </div>
          </div>
          </div>
          <div class="hero-item" style="background-image: url('<?php echo get_stylesheet_directory_uri().'/img/hero-kush.jpg'; ?>');">
            <div class="floating-hero-cta-wrap">
            <div class="floating-hero-cta">
            <div class="hero-content-box container">
              <h2>Meet <br>
                Kush</h2>
              <p>Kush Thompson is a 6th grader at Audubon Charter School and a future astrophysicist. He has a passion for astronomy, robotics and physics &ndash; and plans to attend MIT. Kush is one of dozens of boys whose futures we are working to secure. </p>
<!--               <a href="/who-we-are/#/members" class="btn btn-default">Meet the Boys</a>
 -->            </div>
            </div>
            </div>
          </div>
          <div class="hero-item" style="background-image: url('<?php echo get_stylesheet_directory_uri().'/img/hero-javier.jpg'; ?>');">
            <div class="floating-hero-cta-wrap">
            <div class="floating-hero-cta">
            <div class="hero-content-box container">
              <h2>Meet <br>
                Javier</h2>
              <p>Javier Castellon&rsquo;s favorite subject is science, and he loves to fish. He had his first fishing trip with his Son of a Saint mentor, Nazim, and has been hooked ever since. Javier is one of dozens of boys whose futures we are working to secure. </p>
<!--               <a href="/who-we-are/#/members" class="btn btn-default">Meet the Boys</a>
 -->            </div>
            </div>
            </div>
          </div>
          <div class="hero-item" style="background-image: url('<?php echo get_stylesheet_directory_uri().'/img/hero-devonte.jpg'; ?>');">
            <div class="floating-hero-cta-wrap">
            <div class="floating-hero-cta">
            <div class="hero-content-box container">
              <h2>Meet <br>
                Devonte</h2>
              <p>Devonte Robertson loves math almost as much as he loves playing the drums. He joined Son of a Saint with his twin brother, Devyn, and they&rsquo;ve both thrived in the program. Devonte is one of dozens of boys whose futures we are working to secure.</p>
<!--               <a href="/who-we-are/#/members" class="btn btn-default">Meet the Boys</a>
 -->            </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
          <div class="container">
            <section class="video-cycle">
              <div class="cycle-slideshow"
                  data-cycle-fx=scrollHorz
                  data-cycle-timeout=0
                  data-cycle-speed=1000
                  data-cycle-easing=none
                  data-cycle-prev="#prev"
                  data-cycle-next="#next"
                  data-cycle-auto-height="640:360"
                  data-cycle-slides=">a">
                  <a target="_blank" href="https://www.youtube.com/watch?v=kuLEePfEoWE">
                    <iframe width="640" height="360" src="https://www.youtube-nocookie.com/embed/kuLEePfEoWE?rel=0" frameborder="0" allowfullscreen></iframe>
                  </a>
                  <a target="_blank" href="https://www.youtube.com/watch?v=zaCjlO9swZg">
                    <iframe width="640" height="360" src="https://www.youtube-nocookie.com/embed/zaCjlO9swZg?rel=0" frameborder="0" allowfullscreen></iframe>
                  </a>
                  <a target="_blank" href="https://vimeo.com/160404159">
                    <iframe src="https://player.vimeo.com/video/160404159" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  </a>
              </div>
              <nav>
                <a id="prev" href="#prev"><i class="fa fa-chevron-left"></i></a>
                <a id="next" href="#next"><i class="fa fa-chevron-right"></i></a>
              </nav>
            </section>
          </div>
          <main id="main" class="container site-main" role="main">
            <div class="row">
              <div class="col-sm-6">
                <blockquote>Depriving a boy of his father is <strong>clipping his wings</strong>.</blockquote>
              </div>
              <div class="col-sm-6">
                <p>Depriving a boy of his father is clipping his wings. Even if that seems like common sense, stats lay bare a crushing reality.</p>
                <p>Fatherless homes give us:</p>
                <p>85% of the youth prison population</p>
                <p>71% of all high school dropouts</p>
                <p>75% of all male patients in chemical abuse centers</p>
                <p>Still, every day, <strong>fathers leave</strong>. They die. They are incarcerated. They just go away.</p>
                <p>Left behind are <strong>children in crisis</strong>, and too often these kids grow into future fathers who leave.</p>
                <p>
                  It&rsquo;s a tragic cycle. <strong>Which is why we&rsquo;re breaking it.</strong>
                </p>
              </div>
            </div>
          </main>
          <aside class="donate-cta row">
            <div class="donate-wrap container">
            <div class="donate-copy">
              <h3>Help us make our house a home.</h3>
              <p>The Son of a Saint Clubhouse is the heart of our organization. It&rsquo;s a second home for our boys. A place they feel safe and can be themselves as they spend time with their brothers and mentors. This is the place we break bread, where we convene for homework and tutoring, counseling sessions, speakers series, cooking lessons, cookouts, art, yoga and music lessons.  With your help it will be our permanent home. <br>
              <strong>Support the Son of a Saint Clubhouse Fund.</strong></p>
              <a href="/" class="btn btn-default btn-invert">Make a Donation</a>
            </div>
            </div>
          </aside>
        </div>

<?php get_footer(); ?>
