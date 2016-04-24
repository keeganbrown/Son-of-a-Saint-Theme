<?php
/**
 * Template Name: Who We are Grid View
 *
 * @package son-of-a-saint
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();


$members = array(
  array(
    "img" => "/img/members/member-Alejandro.jpg",
    "name" => "ALEJANDRO ",
    "story" => "Alejandro Castellon joined Son of a Saint in 2011 at the age of 13. Today he is a model for the rest of the boys. A senior at International High School of New Orleans, Alejandro will graduate with two diplomas through the International Baccalaurete program. He holds two jobs while also helping raise his three siblings due to the willful neglect of their father. "
  ),
  array(
    "img" => "/img/members/member-Andrew.jpg",
    "name" => "ANDREW ",
    "story" => "Abandoned by his father and adopted by a single mother, Andrew Hightower joined Son of a Saint in 2013. Andrew has a passion for math and a big imagination. He attends St. Anthony of Padua. He studies Karate, rides dirt bikes and enjoys playing basketball. Andrew hopes to become a U.S. Marshall when he grows up so that he can arrest bad guys. "
  ),
  array(
    "img" => "/img/members/member-Anquan.jpg",
    "name" => "Anquan",
    "story" => "Anquan, Member Since _____"
  ),
  array(
    "img" => "/img/members/member-Apsu.jpg",
    "name" => "Apsu",
    "story" => "Apsu, Member Since _____"
  ),
  array(
    "img" => "/img/members/member-CC.jpg",
    "name" => "CC",
    "story" => "Cemon &ldquo;CC&rdquo; Anderson&rsquo;s parents are absent from his life. He lives with his grandmother and his brother. CC was referred to Son of a Saint by a concerned neighbor who wanted to steer him away from negative activity in his neighborhood. CC is a bright high school student who gravitates to the sciences, loves swimming and everything aquatic. He aspires to be a marine biologist."
  ),
  array(
    "img" => "/img/members/member-Collin.jpg",
    "name" => "COLLIN",
    "story" => "Collin Smith, Member Since _____"
  ),
  array(
    "img" => "/img/members/member-David.jpg",
    "name" => "DAVID",
    "story" => "David Louis&rsquo;s first experience with Son of a Saint in 2013 was attending a Tulane basketball game with his fellow members. It was a good introduction for a sports lover like David, a gifted athlete who hopes to play collegiate sports. David is a good student who attributes much of his academic and personal success over the past few years to the influence Son of a Saint."
  ),
  array(
    "img" => "/img/members/member-Devonte.jpg",
    "name" => "DEVONTE",
    "story" => "Devonte Robertson joined Son of a Saint in 2014 at age 12 with his twin brother, Devyn, after their father abandoned their family. His favorite subject is math. He loves to play the drums in his school&rsquo;s band and dreams of playing in for the New Orleans Saints. An eager participant in Son of a Saint&rsquo;s horseback riding program, Devyn enjoys feeding and learning to ride horses."
  ),
  array(
    "img" => "/img/members/member-Devyn.jpg",
    "name" => "DEVYN",
    "story" => "Devyn Robertson has been a part of Son of a Saint since 2014, when he joined with his twin brother, Devonte, after their father left the family. Devyn&rsquo;s favorite aspect of the organization has been the camaraderie with peers and mentors. Devyn dreams of attending college in California and becoming a police sergeant. He also hopes to mentor boys and girls in situations similar to his."
  ),
  array(
    "img" => "/img/members/member-Jaheim.jpg",
    "name" => "JAHEIM",
    "story" => "Jaheim Walters is known for his big smile and his big determination. The latter is evident on football fields and basketball courts, where he excels, as well as in his pursuit of knowledge. Jaheim has a curious nature &ndash; an abiding commitment to learn new things. He is also a proud member of Son of a Saint, proclaiming &ldquo;Son of a Saint for life!&rdquo; when he joined the organization in 2013."
  ),
  array(
    "img" => "/img/members/member-Javier.jpg",
    "name" => "JAVIER",
    "story" => "Javier Castellon joined Son of a Saint in 2011. He attends the International School of Louisiana, where his favorite subject is Science. Through Son of a Saint, Javier has regained confidence he lost when his father left. Javier is a frequent volunteer at his church and loves to fish &ndash; he had his first fishing trip with his Son of a Saint mentor, Nazim, and has been hooked ever since."
  ),
  array(
    "img" => "/img/members/member-Josh.jpg",
    "name" => "JOSH",
    "story" => "Josh White is a young man of many talents. He is a self-described entrepreneur who aspires to be a chemical engineer. At the same time, he is a gifted athlete who envisions playing football collegiately at Texas Tech. Josh joined Son of a Saint in 2014 and credits the organization with developing his leadership skills and teaching him how to be a man."
  ),
  array(
    "img" => "/img/members/member-KaNard.jpg",
    "name" => "KA&rsquo;NARD",
    "story" => "It would be hard to find someone who experienced more violence and tragedy than Ka&rsquo;Nard Allen during the first decade of his life. And yet Ka&rsquo;Nard thrives. Since joining Son of a Saint in 2013, he has travelled to Montreal, learned to ride horses and begun SCUBA training. More remarkably, Ka&rsquo;Nard has emerged as a leader among peers. He has introduced two of his cousins to Son of a Saint and participates in all activities, usually with a smile on his face."
  ),
  array(
    "img" => "/img/members/member-Keylon.jpg",
    "name" => "KEYLON",
    "story" => "Keylon Brown, Member Since _____"
  ),
  array(
    "img" => "/img/members/member-Kolbe.jpg",
    "name" => "KOLBE",
    "story" => "Kolbe Cage is a quiet kid with a big smile. He loves sports, especially basketball, and plans to study sports management in college (he has his eye on LSU, Howard and Georgetown). Kolbe is an active Son of a Saint member, at the Clubhouse at least twice a week since he joined. One of his best experiences was traveling to Montreal with the organization in 2014."
  ),
  array(
    "img" => "/img/members/member-Kush.jpg",
    "name" => "KUSH",
    "story" => "Kush Hamilton has many interests. His passion for robotics and physics is evident in the things he builds &ndash; robots, rockets, radios &ndash; but his curiosity doesn&rsquo;t end there. He loves cooking, photography and architecture, too, but perhaps nothing more than astrophysics, the field he hopes to study at MIT. His top Son of a Saint moment was attending a Neil deGrasse Tyson speaking engagement. "
  ),
  array(
    "img" => "/img/members/member-Kyzer.jpg",
    "name" => "KEYZER",
    "story" => "Keyzer Dunbar, Member Since _____"
  ),
  array(
    "img" => "/img/members/member-Louis.jpg",
    "name" => "LOUIS",
    "story" => "Louis Zeno, Member Since _____"
  ),
  array(
    "img" => "/img/members/member-Marquell.jpg",
    "name" => "MARQUELL",
    "story" => "Marquell Price has been part of Son of a Saint since the organization&rsquo;s inception. He joined for guidance due to the long-term absence of his father and to gain deeper personal relationships with boys his age. Marquell is a bright scholar who upholds a 3.78 GPA and aspires to attend Duke University. He loves to paint and draw and hopes to be a professional artist. "
  ),
  array(
    "img" => "/img/members/member-Marvin.jpg",
    "name" => "MARVIN",
    "story" => "Marvin Dickerson, Member Since _____"
  ),
  array(
    "img" => "/img/members/member-Miles.jpg",
    "name" => "MILES S.",
    "story" => "Miles Stewart joined Son of a Saint at the organization&rsquo;s inception in 2011. He&rsquo;s a solid student who enjoys math and social studies. Miles is also highly active in sports, participating in football, basketball, baseball and tennis programs. One of the high points of his Son of a Saint membership was meeting his hero, Cam Newton of the Carolina Panthers. &ldquo;It was a dream come true,&rdquo; he said."
  ),
  array(
    "img" => "/img/members/member-MilesP.jpg",
    "name" => "MILES P.",
    "story" => "Miles Price was the third member to join Son of a Saint in 2011. In the time since, he has worked towards his goal of attending college while maintaining a respectful, positive disposition in his daily life. Miles enjoys playing basketball and is a member of his high school&rsquo;s marching band. He plans to attend college and run his own business one day."
  ),
  array(
    "img" => "/img/members/member-Myron.jpg",
    "name" => "MYRON",
    "story" => "Myron Taylor has been a member of Son of a Saint since 2014. He loves football and wants to be an engineer when he grows up. He says he&rsquo;d like to return to Son of a Saint as an adult to mentor future members. &ldquo;I want to teach other kids what I learned,&rdquo; he said."
  ),
  array(
    "img" => "/img/members/member-Nathan.jpg",
    "name" => "NATHAN",
    "story" => "Nathan Penn joined Son of a Saint at the age of 11 and has participated in every activity the program provides. He enjoys math, loves participating in sports and dreams of becoming a professional football player. A recipient of his school&rsquo;s Good Citizenship Award, Nathan has a passion for community service. &ldquo;As long as I am helping out somewhere, I am happy,&rdquo; he said. "
  ),
  array(
    "img" => "/img/members/member-Quiten.jpg",
    "name" => "QUINTEN",
    "story" => "Quinten Crump, Member Since _____"
  ),
  array(
    "img" => "/img/members/member-Scooter.jpg",
    "name" => "SCOOTER",
    "story" => "Like many boys his age, Damaiyuran &ldquo;Scooter&rdquo; Compton dreams of being a professional athelete. Less typical is the specificity of his plans to get there: He plans to major in engineering at Texas A&amp;M before beginning his career as a Major League Baseball player. Damaiyura credits Son of a Saint for helping him learn to make better decisions in life. "
  ),
  array(
    "img" => "/img/members/member-Seddrick.jpg",
    "name" => "SEDDRICK",
    "story" => "Seddrick Reynolds, Member Since _____"
  ),
  array(
    "img" => "/img/members/member-Taylor.jpg",
    "name" => "TAYLOR",
    "story" => "A search for a positive, constructive environment that he lacked at home led Taylor Weeks to become one of Son of a Saint&rsquo;s first members in 2011. Today, Taylor is a high achiever. His favorite subjects are history and civics, and he has a keen interest in journalism. Taylor was recently awarded a scholarship to Phillip Exeter's summer program in New Hampshire. "
  ),
  array(
    "img" => "/img/members/member-Trenyaee.jpg",
    "name" => "TRENYAEE",
    "story" => "Trenyaee Cole, Member Since _____"
  ),
  array(
    "img" => "/img/members/member-Trey.jpg",
    "name" => "TREY HAND",
    "story" => "Trey Hand joined Son of a Saint in 2012 after the sudden death of his father. Now on scholarship at St. Augustine High School, he maintains a 3.20 GPA, thrives in mathematics and is captain of the tennis team. Trey&rsquo;s most memorable Son of a Saint experience was earning a trip to Montreal, where he developed a love of the French language and began taking French lessons upon his return."
  ),
  array(
    "img" => "/img/members/member-William.jpg",
    "name" => "WILLIAM",
    "story" => "William Eleby, Member Since  _____"
  ),
  array(
    "img" => "/img/members/member-Zander.jpg",
    "name" => "ZANDER",
    "story" => "Having lost his father as a baby, Zander Dunbar joined Son of a Saint at age 9 in search of positive male influence. In his time with the organization, Zander has progressively broken out of his shell. He believes the program will help him become a leader at home, in the community, at school and in his church. His favorite aspect of membership is simply hanging out with his Son of a Saint brothers.  "
  )
);

?>
        <div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
          <main id="main" class="container site-main" role="main">
            <section>
            <h2 id="/members">Members</h2>
            <ul class="member-grid row">
            <?php
              foreach ($members as $key => $member) {
            ?>
              <li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 member no-pad">
                <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri() . $member['img']; ?>" alt="">
                <div class="info">
                  <h3><?php echo $member['name']; ?></h3>
                  <p><?php echo $member['story']; ?></p>
                </div>
                </a>
              </li>
            <?php
              }
            ?>
            </ul>
            </section>
          </main>
        </div>

<?php get_footer(); ?>
