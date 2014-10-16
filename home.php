<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div class="row">
    <div id="callout" class="col-sm-10 col-sm-offset-1 flush">
        <h3 class="callout-message">Climb higher!</h3>
    </div>
</div> <!--row-->

<div id="slider-wrap" class="row">
    <div id="slider" class="col-sm-10 col-sm-offset-1 flush">
        <?php echo do_shortcode('[metaslider id=1220]'); ?>
        
	</div>
</div> <!--row-->

<div class="row">
    <div id="quicklink-wrap" class="col-sm-10 col-sm-offset-1">
        <div class="row">
            <a href="#">
                <div class="quicklink col-sm-12">
                    <p class="bucket-text">Math Monkey is unlike any other math enrichment program. Our program is designed to get students excited about math. Combining game-based lessons with savvy, mental strategies gives our students the confidence they need to succeed.</p>
                </div>
            </a>
        </div>
    </div>
</div>


<div class="row">
    <div id="main" class="col-sm-10 col-sm-offset-1 flush">
        <div id="content" class="col-sm-8">
            <img class="flush" src="<?php echo get_stylesheet_directory_uri(); ?>/images/front.png" width="100%">
            <p>At Math Monkey of Leawood we want our student to think rather than just memorize. While in class, students learn more than one way to solve a problem. By showing students multiple ways to solve a problem their understanding of how numbers work will grow. These mental strategies will help build confidence, speed, problem solving and reasoning skills. Math Monkey does not simply teach rote memorization. 

We place each student in classes based on where they ARE, rather than age or grade. This makes our program a great fit for students that may have lost confidence to those that are gifted and need to be challenged.</p>
        </div>
            
   
        <div id="sidebar" class="col-xs-12 col-sm-4">
            <a class="side-icon" href="#"><div class="mm-icon flush"><i class="fa fa-calendar-o"></i><h2>Schedule Appointment</h2></div></a>
            <a class="side-icon" href="#"><div class="mm-icon flush"><i class="fa fa-rocket"></i><h2>Client Login</h2></div></a>
            <a class="side-icon" href="#"><div class="mm-icon flush"><i class="fa fa-file-text"></i><h2>Newsletter Sign up</h2></div></a>
            <a class="side-icon" href="#"><div class="mm-icon flush"><i class="fa fa-facebook-square"></i><h2>Like us!</h2></div></a>
            <?php dynamic_sidebar( 'tt-sidebar' ); ?>
        </div>
        
        
        
  </div><!--main-->  
</div><!--row-->


<div class="row">
    <div id="section-header" class="col-sm-10 col-sm-offset-1">
        <h2>What We Do</h2>
    </div>    
</div>
<div class="row">
    <div id="bucket-wrap" class="col-sm-10 col-sm-offset-1">
        <div id="bucket" class="col-sm-3">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-fpo.png"/>
            <h2>News</h2>
        </div>
        <div id="bucket" class="col-sm-3">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-fpo.png"/>
            <h2>Classes</h2>
            <p>After completing our complimentary assessment, students are place in one of our seven classes based on their individual skill level.</p>
        </div>
        <div id="bucket" class="col-sm-3">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-fpo.png"/>
            <h2>Robotics</h2>
            <p>Robotics Lab is a great opportunity for your child to build real-life robotic solutions using LEGO NXT robots from LEGO Education. Students from grade 4 and up will explore the engineering process to design, build and program their robot to perform every day tasks.</p>
        </div>
        <div id="bucket" class="col-sm-3">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-fpo.png"/>
            <h2>1-on-1 Help</h2>
            <p>Students can bring in homework from school and receive 1-on-1 assistance with their lessons. This is a great opportunity for students to ask the questions they weren’t able to ask in class. We also offer 1-on-1 Remote Tutoring.</p>
        </div>
    </div>    
</div>




  <?php get_footer() ?>
