
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Scott Campbell is a freelance website designer and developer based out of Portland, Oregon. His services include, website design, website mockup, website development, responsive design, search engine optimization, social media marketing, Wordpress blog creation and custom Wordpress theme development. ">
    <meta name="keywords" content="website development, website design, Portland, Oregon, web design, web development, freelance, web, developer, designer, search engine optimization, SEO, social media marketing, responsive, bootstrap, wordpress, PDX, OR, Northwest">
    <meta name="author" content="Scott Douglas Campbell">
    <link rel="icon" href="../../favicon.ico">
    
    <title>Web Development | Scott Campbell</title>

    <!-- CSS -->
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Hammersmith+One|Varela+Round' rel='stylesheet' type='text/css'>
  </head>

  <body data-spy="scroll" data-target=".navbar-collapse" data-offset="70">
  <?php include_once("analyticstracking.php") ?>
  <!-- Nav Bar
  ====================================================== -->
    <nav class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
      <!-- Navbar Header -->
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
          </button>
          <a class="logo" href="#home"><img src="img/sdcwhite.png" alt="logo"></a>
        </div><!-- Navbar Header -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right ">
              <li><a href="#projects" class="prj"><span class="fa fa-folder-open"></span><div class="link"></div></a></li>
              <li><a href="#development" class="dev"><span class="fa fa-cogs"></span></a></li>
              <li><a href="#design" class="des"><span class="fa fa-text-height"></span></a></li>
              <li><a href="#marketing" class="mkt"><span class="fa fa-line-chart"></span></a></li>
              <li><a href="#contact" class="ctc"><span class="fa fa-phone"></span></a></li>
            </ul>
        </div>
        
        </div><!-- /.nav-collapse -->
    </nav><!-- /.navbar -->
  
  <!-- Header 
  ====================================================== -->
    <a id="home"></a>
    <header id="banner" class="bg-parlex-banner">
      <div class="parlex-back-banner">
        <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-10 banner-text">
                <p>Hey, my name is Scott. I'm a web developer, UI / UX designer and digital marketer based out of Portland, Oregon. <a href="#contact">Drop me a line</a> if you would like to chat about working together on a project! </p>
                <p>Cheers,<br />-Scott</p>
              </div>
            </div>
          </div><!-- /container-->
        </div>
    </header>

  <!-- Main Sections
  ====================================================== -->
    
    <!-- About Section ================================= -->

    <section id="projects" class="content dark">
      <div class="container">
        <div class="heading text-center"> <!-- heading -->
          <h1 class="prj"><span class="fa fa-folder-open"></span></h1>
        </div> <!-- heading -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <div class="item">
              <div class="row">
                <div class="col-md-6 carousel-img">
                  <img src="img/slider/chez-dodo-responsive-webdes-small.png" alt="">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
                <div class="col-md-6 carousel-text">
                  <a href="http://www.chezdodopdx.net"><h2>Chez Dodo</h2></a>
                  <p>Chez Dodo is a Mauritian food cart in Portland, Oregon. Their website is built on a fully responsive custom Wordpress theme that comes equip with advanced custom fields plug in for visual content creation.</p>
                </div>
              </div>
            </div>

            <div class="item active">
              <div class="row">
                <div class="col-md-6 carousel-img">
                  <img src="img/slider/sleepy-responsive-webdes-small.png" alt="">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
                <div class="col-md-6 carousel-text">
                  <a href="http://www.sleepytimedistribution.com"><h2>Sleepytime</h2></a>
                  <p>Sleepytime distribution is a skateboard distribution company based out of Portland, Oregon. Their website is a built on a custom responsive Wordpress theme. It uses Volusion software for ecommerce and has user interactive capabilities such as commenting and sharing.</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="row">
                <div class="col-md-6 carousel-img">
                  <img src="img/slider/ali-sharifi-responsive-webdes-small.png" alt="">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
                <div class="col-md-6 carousel-text">
                  <a href="#"><h2>Ali Sharifi Rugs</h2></a>
                  <p>Ali Sharifi Rugs is a Persian Rug gallery in Portland, Oregon. Their website is created with the industries latest web development practices and is 100% mobile ready. It was created with the Bootstrap framework and has been content optimized for search engine rankings.</p>
                </div>
              </div>
            </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="fa-arrow-circle-o-left fa" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="fa-arrow-circle-o-right fa" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> <!-- container about -->
      </div>
    </section>
    
    <!-- Parallax Section ================================= -->
    <section id="quote" class="bg-parlex">
        <div class="parlex-back">
          <div class="container text-center">
            <h2>"Form follows function - that has been misunderstood. Form and function should be one, joined in a spiritual union."</h2>
            <h3>-Frank Lloyd Wright</h3>
          </div><!-- /container-->
        </div>
    </section>

    <!-- Development Section ================================= -->
    <section id="development" class="content">
      <div class="container">
        <div class="heading text-center"> <!-- heading -->
          <h1 class="dev"><span class="fa fa-cog"></span></h1>
          <p>I use the industries latest web development methodologies and techonologies.</p>
        </div> <!-- heading -->

        <div class="row">
          <div class="col-md-4"> <!-- col -->
            <h2>Languages</h2>
            <ul class="list-group">
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>HTML5</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>CSS3</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Javascript</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>PHP</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>MySQL</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Python</li>
            </ul>
          </div> <!-- col -->
          <div class="col-md-4"> <!-- col -->
          <h2>Preprocessors</h2>
            <ul class="list-group">
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Sass</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Less</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Jade</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Compass</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Stylus</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Burbon</li>
            </ul>
          </div> <!-- col -->
          <div class="col-md-4"> <!-- col -->
          <h2>Frameworks</h2>
            <ul class="list-group">
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Bootstrap</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Wordpress</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Django</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>AngularJS</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Drupal</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>CakePHP</li>
            </ul>
          </div> <!-- col -->
        </div><!-- row -->
      </div> <!-- container about -->
    </section>

    <!-- Parallax Section ================================= -->
    <section id="quote2" class="bg-parlex2">
        <div class="parlex-back">
          <div class="container text-center">
            <h2>"Strive not to be a success, but rather to be of value."</h2>
            <h3>–Albert Einstein</h3>
          </div><!-- /container-->
        </div>
    </section>
          
    <!-- Design Section ================================= -->
    <section id="design" class="content">
      <div class="container">
        <div class="heading text-center"> <!-- heading -->
          <h1 class="des"><span class="fa fa-text-height"></span></h1>
          <p>Enable your users to see your content across all platforms.</p>
        </div> <!-- heading -->

        <div class="row">
        <div class="col-md-6"> <!-- col -->
          <div class="responsive">
            <i class="fa fa-desktop fa-5x"></i> 
            <i class="fa fa-tablet fa-5x"></i>
            <i class="fa fa-mobile fa-5x"></i>
          </div>
          </div> <!-- col -->
          <div class="col-md-6"> <!-- col -->
            <h2>Design Skills</h2>
            <ul class="list-group">
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Responsive</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Mobile First</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>UI / UX</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Logo Design</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Photography</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Typography</li>
            </ul>
          </div> <!-- col -->
          
        </div><!-- row -->
      </div> <!-- container about -->
    </section>

    <!-- Parallax Section ================================= -->
    <section id="quote3" class="bg-parlex3">
        <div class="parlex-back">
          <div class="container text-center">
            <h2>"The reason we love our parents is because they loved us first. Every single company should take this advice."</h2>
            <h3>-Gary Vaynerchuck</h3>
          </div><!-- /container-->
        </div>
    </section>

    <!-- Marketing Section ================================= -->
    <section id="marketing" class="content">
      <div class="container">
        <div class="heading text-center"> <!-- heading -->
          <h1 class="mkt"><span class="fa fa-line-chart"></span></h1>
          <p>Instantly boost your brand's reach and value while creating an online following.</p>
        </div> <!-- heading -->

        <div class="row">
        
          <div class="col-md-6"> <!-- col -->
            <h2>Digital Marketing Skills</h2>
            <ul class="list-group">
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Search Engine Optimization</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Social Media Marketing</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Content Creation</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Google Analytics</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Keyword Optimization</li>
              <li class="list-group-item"><i class="fa fa-fw fa-check"></i>Link Strategy</li>
            </ul>
          </div> <!-- col -->
          <div class="col-md-6"> <!-- col -->
            <div class="info">
              <p>Today, search engine optimization (SEO) and social media marketing are more important in today's business world than ever before and it's here to stay. A consistantly maintained and improved SEO / social media marketing plan can literally be what makes or breaks your online business. I posses the skills and knowledge to take your business one step further by optimizing search engine ranking, creating social media campaigns and creating fresh and informative content that will keep your visitors coming back for more. You can also instantly know your ROI from SEO by tracking your website on Google Analytics.</p>
            </div>
          </div> <!-- col -->
          
        </div><!-- row -->
      </div> <!-- container about -->
    </section>

    <section id="contact" class="content">
      <div class="container">
        <div class="heading text-center"> <!-- heading -->
          <h1 class="ctc"><span class="fa fa-phone"></span></h1>
          <p>Give me a call or drop me a line!</p>
        </div> <!-- heading -->
          <div class="row">
            <div class="col-md-6">
              <div class="footer-content">
                <p class="large">I am currently available for hire and would love to talk to you about your next project! Get a hold of me durring the day from 9am to 8pm or send me an email anytime via the email form! Have a great day, and thanks for stopping by!</p>
                <ul class="list-icons">
                  <li><i class="fa fa-map-marker pr-10"></i> 4325 SE 31st Ave Portland, OR 97202</li>
                  <li><i class="fa fa-phone pr-10"></i>(503) 806-4457</li>
                  <li><i class="fa fa-envelope-o pr-10"></i> scottcampbell0210@gmail.com</li>
                </ul>
                <ul class="social-links">
                  <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
                  <li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
                  <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                  <li class="github"><a target="_blank" href="http://www.github.com"><i class="fa fa-github"></i></a></li>
                  <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>

            

            <div class="col-md-6">
              <div class="footer-content">



                <form action="" method="post" role="form" id="footer-form">
                  
                  <div class="form-group has-feedback">
                    <label class="sr-only" for="name2">Name</label>
                    <input type="text" class="form-control" id="name2" placeholder="Name" name="name" required>
                    <i class="fa fa-user form-control-feedback"></i>
                  </div>

                  <div class="form-group has-feedback">
                    <label class="sr-only" for="email2">Email address</label>
                    <input type="email" class="form-control" id="email2" placeholder="Email" name="email" required>
                    <i class="fa fa-envelope form-control-feedback"></i>
                  </div>
                  
                  <div class="form-group has-feedback">
                    <label class="sr-only" for="message2">Message</label>
                    <textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message" required></textarea>
                    <i class="fa fa-pencil form-control-feedback"></i>
                  </div>
                  
                  <input type="submit" name="submit" value="Send" class="btn btn-default">
                  <hr />
                  <p><?php include_once("mailer.php"); ?></p> 

                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- .footer end -->
  
  <!-- Footer
  ====================================================== -->
    <footer>
      <p>ScottDCampbell.com &copy; 2015</p>
      
    </footer>

  <!-- JavaScript
  ====================================================== -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
   <script>
    $(window).scroll(function() {
    if ($(this).scrollTop() > 400){  
        $('nav').addClass("sticky");
    }
    else{
        $('nav').removeClass("sticky");
    }
    });

    $(document).ready(function(){
      $('a[href*=#]').click(function() {
        if( $(this).attr("href")=="#carousel") return;
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
          var $target = $(this.hash);
          $target = $target.length && $target
          || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
            var targetOffset = $target.offset().top;
            $('html,body')
            .animate({scrollTop: targetOffset}, 750);
           return false;
          }
        }

      });
    });
  </script>


  </body>
</html>
