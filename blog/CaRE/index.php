<?php
$myfile = fopen("admin.json", "r");
$stat_raw = fread($myfile, filesize("admin.json"));
$stat = json_decode($stat_raw);
$last = $stat->last;
fclose($myfile);
?>

<!DOCTYPE html>
<html
  lang="zxx"
  xmlns="http://www.w3.org/1999/xhtml"
  xmlns:fb="http://ogp.me/ns/fb#"
>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-141882297-1"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-141882297-1');
    </script>
    <title>Blogs | CaRE-Career in Research | AnC Council, IITK</title>
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="The Academics and Career Council of the Indian Institute of Technology, Kanpur is a council directly placed under the Student's Gymkhana that aims to foster all needs related to academics and research for the campus dwellers. "
    />
    <meta property="og:image" content="2/img/cover.jpg" />
    <meta
      name="keywords"
      content="academic, research, cell, anc, iit kanpur, college, study, science, gymkhana, academics, career, future"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="shortcut icon" />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../css/magnific-popup.css" />
    <link rel="stylesheet" href="../../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/animate.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
      <div class="container">
        <a href="../../index.html" class="site-logo">
          <img
            src="../../img/anc-logo.png"
            alt="logo"
            height="100px"
            width="100px"
          />
          <!-- <h1>Academics and Career Council</h1> -->
        </a>
        <!-- Switch button -->
        <div class="nav-switch">
          <div class="ns-bar"></div>
        </div>
        <div class="header-right">
          <ul class="main-menu">
            <li><a href="../../index.html">Home</a></li>
            <li><a href="../../about.html">Academics</a></li>
            <li><a href="../../service.html">Research</a></li>
            <li><a href="../../ir.html">Int. Relations</a></li>
            <li><a href="../../crdev.html">Career Dev.</a></li>
            <li class="active"><a href="../../blog">Blogs</a></li>
            <li><a href="../../contact.html">Contact</a></li>
            <!-- <li><a href="src">SRC</a></li> -->
          </ul>
        </div>
      </div>
    </header>
    <!-- Header section end -->

    <!-- Page Top section -->
    <section
      class="page-top-section set-bg"
      data-setbg="../../img/page-top-bg/11.jpg"
    >
      <div class="container hero-title">
        <h2>Blogs</h2>
      </div>
    </section>
    <!-- Page Top section end -->

    <!-- Services section -->
    <section class="blog-section spad">
      <div class="container">
        <div class="series-title">
          <h2>CaRE-Career in Research</h2>
          <hr />
        </div>
        
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="blog-container">

                <?php
                  for ($x = 5; $x <= $last; $x++) {
                  $data_file = fopen(strval($x)."/data.json", "r");
                  $data_raw = fread($data_file, filesize(strval($x)."/data.json"));
                  $data = json_decode($data_raw);
                  fclose($data_file);
                ?>
                  <div class="blog-card">
                    <img src="<?php echo $x;?>/img/cover.png" />
                    <div class="blog-body">
                      <h2>
                        <?php echo $data->title?>
                      </h2>
                      <span class="author"><?php echo $data->author?></span>
                      <p class="date"><?php echo $data->date?></p>
                      <p class="description">
                        <?php echo $data->intro?>
                      </p>
                      <button><a href="<?php echo $x?>">Read >></a></button>
                    </div>
                  </div>                
                <?php } ?>

                <div class="blog-card">
                  <img src="4/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      CaRE-Career in Research
                    </h2>
                    <span class="author">Vivek Gupta</span>
                    <p class="date">Jun 29, 2020</p>
                    <p class="description">
                      Vivek is a PhD student at the School of Computing, University of Utah. Previously, he was working as a Research Fellow in Microsoft Research Lab, India, in Machine Learning and Natural Language Processing group. He graduated as a dual degree student in the Department of Computer Science and Engineering at IIT Kanpur in 2016. He is broadly interested in research in the field of Machine Learning and Natural Language Processing. He was the first coordinator of Special Interest in Machine Learning (SIGML), IIT Kanpur.
                    </p>
                    <button><a href="4">Read >></a></button>
                  </div>
                </div>
               
                <div class="blog-card">
                  <img src="3/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      CaRE-Career in Research
                    </h2>
                    <span class="author">Satish Amara</span>
                    <p class="date">Jun 22, 2020</p>
                    <p class="description">
                      Satish Amara graduated from IIT Kanpur in 1996 with M.Tech. in Computer Science Engineering. He is now working for a Federal Government Contractor. He has been in industry for about 25 years and has worked for several big companies including Microsoft Redmond, Juniper, and Cisco.
                    </p>
                    <button><a href="3">Read >></a></button>
                  </div>
                </div>
              		
				        <div class="blog-card">
                  <img src="2/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      CaRE-Career in Research
                    </h2>
                    <span class="author">Samvit Kumar</span>
                    <p class="date">Jun 14, 2020</p>
                    <p class="description">
                      Samvit is currently a 3rd year Ph.D. student at Johns Hopkins Whiting School of Engineering in the mechanical stream. He graduated from IIT Kanpur in 2017 with B.Tech. in Aerospace Engineering. During his stay at IITK, he was an active member and Coordinator of Quiz Club. He interned at ENSTA ParisTech during his 3rd summers.
                    </p>
                    <button><a href="2">Read >></a></button>
                  </div>
                </div>
    
                <div class="blog-card">
                  <img src="1/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      CaRE-Career in Research
                    </h2>
                    <span class="author">Pranshu Garg</span>
                    <p class="date">May 27, 2020</p>
                    <p class="description">
                      Here we share our conversation with Pranshu, who graduated from IIT Kanpur last year from Electrical Engineering and joined the University of California, Los Angeles (UCLA) to pursue an MS in Electrical and Computer Engineering. Even at IIT Kanpur, he had been involved in spreading awareness about academia, so read on and make sure to follow this blog and content as it could help you decide whether to pursue a career in Research.
                    </p>
                    <button><a href="1">Read >></a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>
    <!-- Services section end -->

    <!-- Footer section -->
    <footer class="footer-section">
      <div class="container">
        <div class="footer-nav">
          <ul>
            <li><a href="../../index.html">Home</a></li>
            <li><a href="../../about.html">Academics</a></li>
            <li><a href="../../service.html">Research</a></li>
            <li><a href="../../ir.html">Int. Relations</a></li>
            <li><a href="../../crdev.html">Career Dev.</a></li>
            <li><a href="../../blog">Blogs</a></li>
            <li><a href="../../contact.html">Contact</a></li>
            <!-- <li><a href="src">SRC</a></li> -->
          </ul>
        </div>
      </div>
    </footer>
    <!-- Footer section end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/circle-progress.min.js"></script>
    <script src="../../js/main.js"></script>
  </body>
</html>
