<?php include('admin/dbcon.php'); ?>

<html>
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8"/>

        <!-- Site Title-->
        <title>Secure E-Learning System</title>

        <!-- Mobile Specific Metas-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <!-- Google-fonts -->
        <link href='http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <!-- Fonts-style -->
        <link rel="stylesheet" href="css/styles.css"/>
        <!-- Modal-Effect -->
        <link href="css/component.css" rel="stylesheet">
        <!-- owl-carousel -->
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!-- Template Styles-->
        <link rel="stylesheet" href="css/style.css"/>
        <!-- Template Color-->
        <link rel="stylesheet" type="text/css" href="css/green.css" media="screen" id="color-opt" />
    </head>
    <body data-spy="scroll" data-offset="80">
        <!-- Preloader -->
        <div class="animationload">
          <div class="loader">
              Please Wait....
          </div>
        </div> 
        <!-- End Preloader -->


        <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Secure E-Learning</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Mission</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Login</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="admin/index.php">Admin Login</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="index_1.php">User Login</a>
                            </li>
                        </ul>
                </li>							  
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>

          <!-- /HOME -->
          <section class="main-home" id="home">
            <div class="home-page-photo"></div> <!-- Background image -->
            <div class="home__header-content">
              <div id="main-home-carousel" class="owl-carousel">
                <div>
                  <h1 class="intro-title">Start Learning</h1>
                  <p class="intro-text">Learning experiences are like journeys. <br>The journey starts where the learning is now, and ends when the learner is successful. <br>The end of the journey isn't knowing more, it's doing more.</p>
                </div><!--slide item like paragraph-->

                <div>
                  <h1 class="intro-title">100% Secure</h1>
                  <p class="intro-text">Think about what your learners need to do with that<br> information after the course is finished and design around that.</p>
                </div><!--slide item like paragraph-->

                <div>
                  <h1 class="intro-title">Digital expert</h1>
                  <p class="intro-text">The most important principle for designing lively<br> eLearning is to see eLearning design not as information design<br> but as designing an experience.</p>
                </div><!--slide item like paragraph-->
              </div>
            </div>
          </section>
          <!-- /End HOME -->

          <!-- / mission -->
          <section id="services">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="title text-center">Our Mission</h3>
                  <div class="titleHR"><span></span></div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4"> <!-- Mission -->
                  <div class="text-center mission-topic">
                    <div class="col-wrapper">
                      <div class="icon-border"> 
                        <i class="icon-design-graphic-tablet-streamline-tablet color-l-orange"></i> 
                      </div>
                      <h5>Mission</h5>
                      <p>The most important principle for designing lively Secure E-Learning is to see E-Learning design not as information design but as designing an experience.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4"> <!-- Vission -->
                  <div class="text-center mission-topic">
                    <div class="col-wrapper">
                      <div class="icon-border"> 
                        <i class="icon-design-pencil-rule-streamline color-l-blue"></i> 
                      </div>
                      <h5>Vission</h5>
                      <p>Secure E-Learning and Emerging Technologies will be nationally recognized as a leader in the application of innovative instructional technologies that facilitate the next generation of teaching and learning.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4"> <!-- strategies -->
                  <div class="text-center mission-topic">
                    <div class="col-wrapper">
                      <div class="icon-border"> 
                        <i class="icon-speech-streamline-talk-user color-l-yellow"></i> 
                      </div>
                      <h5>Strategies</h5>
                      <p>Admin, Faculty, and students, to showcase, and increase awareness of the effective application of innovative instructional technologies through sharing best practices.</p>
                    </div>
                  </div>
                </div>
              </div> <!--/.row -->
            </div> <!--/.container -->
          </section>
          <!-- / End mission-->

          <!-- CONTACT -->
          <section id="contact">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="title text-center">Contact Us</h3>
                  <div class="titleHR"><span></span></div>

                  <form role="form" name="ajax-form" id="ajax-form" action="accept_request.php" method="post" class="form-main">
                    <div class="col-xs-12">
                      <div class="row">            
                        <div class="form-group col-xs-6">
                          <label for="name2">Name</label>
                          <input class="form-control" id="name2" name="name"  onblur="if(this.value == '') this.value='Name'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Name">
                          <div class="error" id="err-name" style="display: none;">Please enter name</div>
                        </div>
                        <div class="form-group col-xs-6">
                          <label for="email2">Email</label>
                          <input class="form-control" id="email2" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
                          <div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div> 
                        </div>
                      </div>
                      <div class="row">            
                        <div class="form-group col-xs-12">
                          <label for="message2">Message</label>
                          <textarea class="form-control" id="message2" name="message" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value == 'Message') this.value=''">Message</textarea>
                          <div class="error" id="err-message" style="display: none;">Please enter message</div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                          <p class="text-center con_sub_text">If you have any question or queries we will always be happy to help.<br> Feel free to contact us by email and we will be sure to get back to you as soon as possible.</p>
                        </div>
                      </div>
                      <div class="row">            
                        <div class="col-xs-12 text-center">
                          <div id="ajaxsuccess">E-mail was successfully sent.</div>
                          <div class="error" id="err-form" style="display: none;">There was a problem validating the form please check!</div>
                          <div class="error" id="err-timedout">The connection to the server timed out!</div>
                          <div class="error" id="err-state"></div>
                          <button type="submit" name="submit" value="Send" class="btn btn-custom" id="send">Submit</button>
                        </div>
                      </div>
                    </div>  
                  </form>
                </div> <!-- end col-md-12 -->
              </div> <!-- end row -->
            </div> <!-- container -->
          </section>
          <!-- End CONTACT -->
            <div class="footer-bottom text-center"> <!-- Footer-copyright -->
              <p>©2021 / Secure E-Learning System</a></p>
            </div>
          </footer>
          <!-- End footer begings -->


          <!-- Scroll top -->
          <a href="#" class="back-to-top"> <i> ^ </i> </a>

          <!-- JavaScript
           ================================================== -->
           <!-- Placed at the end of the document so the pages load faster -->
           <!-- initialize jQuery Library -->
           <script src="js/jquery.min.js"></script>
           <!-- jquery easing -->
           <script src="js/jquery.easing.min.js"></script>
           <!-- Bootstrap -->
           <script src="js/bootstrap.min.js"></script>
           <!-- modal-effect -->
           <script src="js/classie.js"></script>
           <script src="js/modalEffects.js"></script>
           <!-- Counter-up -->
           <script src="js/waypoints.min.js" type="text/javascript"></script>
           <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
           <!-- SmoothScroll -->
           <script src="js/SmoothScroll.js"></script>
           <!-- Parallax -->
           <script src="js/jquery.stellar.min.js"></script>
           <!-- Jquery-Nav -->
           <script src="js/jquery.nav.js"></script>
           <!-- Owl carousel -->                                                      
           <script type="text/javascript" src="js/owl.carousel.min.js"></script>
           <!-- App JS -->
           <script src="js/app.js"></script>

           <!-- Switcher script for demo only -->
          <script type="text/javascript" src="js/switcher.js"></script>

    </body>
</html>
