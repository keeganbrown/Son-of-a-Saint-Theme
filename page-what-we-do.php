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
            <section class="row statement-block">
              <header id="/we-save-lives" class="page-hero-header">
                <img class="page-hero" src="<?php echo $main_dir; ?>/img/what-we-do/www-hero.jpg" alt="">
                <div class="col-sm-8 col-sm-offset-2 boxed-header">
                  <div class="headline-box">
                    <h3 class="headline">What We Do</h3>
                  </div>
                  <p>Son of a Saint exists to enhance the lives of fatherless boys through mentorship, emotional support, development of life skills, exposure to constructive experiences and formation of positive, lasting peer-to- peer relationships.</p>
                </div>
              </header>
              <div class="col-sm-10 col-sm-offset-1 statement-list-box">
                <dl class="statement-list">
                  <dt><img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/icon-heart.png" alt=""> <span class="st-headline">We save lives.</span></dt>
                  <dd>Each year, Son of a Saint selects a group of boys ages 10-13 to join the existing kids in our program. The boys must be fatherless due to their father's incarceration, death or abandonment. Each boy remains a member of Son of a Saint until he is 18 and receives his college acceptance letter.</dd>
                  <dt><img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/icon-hand.png" alt=""> <span class="st-headline">What we provide, above all else, is an example.</span></dt>
                  <dd>Son of a Saint equips boys with the tools they need to become productive men. We give them hope, vision and opportunity. We provide a secure and consistent environment for them. But the Son of a Saint mentors&rsquo; most important role is simply to be a good example.</dd>
                  <dt><img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/icon-check.png" alt=""> <span class="st-headline">We have expectations.</span></dt>
                  <dd>Boys must maintain a minimum 2.7 GPA, complete four hours of community service each month and maintain good conduct at home, school and within the Son of a Saint organization.</dd>
                </dl>
              </div>
            </section>
            <section id="/how-we-do-it" class="row statement-block">
              <div class="col-sm-6 col-sm-offset-3">
                <img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/wwd-blockBalance.jpg" alt="">
              </div>
              <header class="col-sm-8 col-sm-offset-2 boxed-header text-center">
                <div class="headline-box">
                  <h3 class="headline">How We Do It</h3>
                </div>
                <p>The boys who enter our program are often boys in crisis, and a crisis is not solved without a sound strategy. Son of a Saint employs a holistic approach, using a network of volunteers and partner agencies that enables us to address every boy&rsquo;s every need.</p>
                <img src="<?php echo $main_dir; ?>/img/what-we-do/icon-strip.png" alt="" class="icon-strip">
              </header>
              <div class="col-sm-10 col-sm-offset-1 statement-list-box">
                <dl class="statement-list">
                  <dt><img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/icon-smile.png" alt=""> <span class="st-headline">Behavioral Health</span></dt>
                  <dd>We partner with various New Orleans-based mental health agencies to provide evaluations and regular, ongoing counseling for our boys. </dd>
                  <dt><img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/icon-shoe.png" alt=""> <span class="st-headline">Recreational Access</span></dt>
                  <dd>Son of a Saint members are exposed to horseback riding, fishing, yoga, music, chess, the arts and more. Every boy participates in at least one of these activities weekly. Mentors also support and encourage our boys in their extracurricular activities by attending games. </dd>
                  <dt><img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/icon-group.png" alt=""> <span class="st-headline">Group Mentorship</span></dt>
                  <dd>Regular daylong sessions are designed to aid in our boys&rsquo; academic, personal and overall development. Mentorship topics may include etiquette, time management, decision-making, critical thinking, anger management, moral reasoning, life skills, work ethic, leadership, civic responsibility, teamwork and integrity. Kids and mentors also frequent outings, such as sporting events, educational trips, movies, dining, parades and volunteer activities.</dd>
                  <dt><img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/icon-horizon.png" alt=""> <span class="st-headline">Broadening of Horizons</span></dt>
                  <dd>When opportunities present themselves, we hit the road. For example, in 2014 a group of seven Son of a Saint boys, along with mentors, traveled to Montreal. A benefactor had sponsored six months of French lessons for the boys in advance of the trip, as well as the trip itself. The experience gave the boys many firsts &ndash; first time getting a passport, on a plane, on a metro, in snow, at a hockey game and more. Another example: Each summer 10 boys from the program attend Camp Rockmore in Asheville, NC, where they learn invaluable life lessons and have a lot of fun, too.</dd>
                  <dt><img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/icon-pencil.png" alt=""> <span class="st-headline">Tutoring</span></dt>
                  <dd>Son of a Saint maintains relationships with various New Orleans colleges and universities whose students volunteer to provide weekly tutoring for our boys.</dd>
                  <dt><img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/icon-piggybank.png" alt=""> <span class="st-headline">Tuition Assistance</span></dt>
                  <dd>The organization facilitates scholarships allowing Son of a Saint members to attend tuition-based schools in the area.</dd>
                </dl>
              </div>
            </section>
            <section id="/why-we-do-it" class="row statement-block">
              <div class="clearfix">
                <img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/wwd-photoStrip.jpg" alt="">
              </div>
              <header class="col-sm-8 col-sm-offset-2 boxed-header text-center">
                <div class="headline-box">
                  <h3 class="headline">Why We Do It</h3>
                </div>
                <p><strong>Because there is a need that cannot be ignored.</strong><br>
                Life for boys who lose their fathers is an uphill battle involving challenges related to self-confidence, anger and feelings of abandonment. Left unaddressed, these challenges too often manifest
                in unhealthy behaviors during the early teenage years through young adulthood. </p>
                <p>Son of a Saint is a necessary intervention at a delicate time &ndash; a wellspring of positive influence when it&rsquo;s needed most by the boys who need it most. Young members forge relationships with volunteer mentors, counselors and tutors that develop over a long period, providing consistent support, guidance and encouragement. </p>
                <p>And while this is a relatively young organization &ndash; the first boys who entered the program  are still in the program &ndash; we look forward to the days when Son of a Saint graduates return as men to volunteer, to mentor or simply to exemplify what life can be.</p>
                <img src="<?php echo $main_dir; ?>/img/what-we-do/icon-strip.png" alt="" class="icon-strip">
              </header>
            </section>
            <section id="/our-beginning" class="row wide-col statement-block">
              <div class="col-md-6 col-sm-8 col-sm-offset-2">
                <header class="boxed-header text-center">
                  <div class="headline-box">
                    <h3 class="headline">Our Beginning</h3>
                  </div>
                  <p>Bivian Lee, Jr., was an NFL defensive back for the New Orleans Saints from 1971 to 1975. Tragically, in 1984 Bivian died at the young age of 36 after suffering a heart attack. He left behind a wife, a five-year-old daughter, Tamica, and a three-year-old son, Bivian &ldquo;Sonny&rdquo; Lee, III.</p>
                  <p>As an adult, Sonny came to understand the struggles and challenges his mother faced, and he gained a real appreciation for the opportunities he was afforded as a child &ndash; opportunities the average boy would not  From access to psychiatrists, to addressing anger issues associated with not having his father in his life, to an ability to play several sports leagues and enjoy the relationships he was able to build with teammates and coaches, sonny was convinced that the array of opportunities made him who he is today-an educated professional who is a leader in the community.</p>
                  <p>In turn, Sonny, then 29, founded Son of a Saint on January 1, 2011, in honor of his late father and single mother. He aims to &ldquo;pay it forward&rdquo; and replicate his own experience for a special group of fatherless young males in the community.</p>
                </header>
              </div>
              <div class="col-md-6 col-sm-8 col-sm-offset-2">
                <img class="icon" src="<?php echo $main_dir; ?>/img/what-we-do/www-sonnyMontage.jpg" alt="">
              </div>
            </section>
          </main>
        </div>

<?php get_footer(); ?>
