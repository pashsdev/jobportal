<DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <title><?php bloginfo('name'); ?> </title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href= '<?php echo get_bloginfo('template_url');  ?>/plugins/bootstrap/bootstrap.min.css'>
  <!-- FontAwesome -->
  <link rel="stylesheet" href= '<?php echo get_bloginfo('template_url');  ?>/plugins/fontawesome/css/all.min.css'>
  <!-- Animation -->
  <link rel="stylesheet" href= '<?php echo get_bloginfo('template_url');  ?>/plugins/animate-css/animate.css'>
  <!-- slick Carousel -->
  <link rel="stylesheet" href= '<?php echo get_bloginfo('template_url');  ?>/plugins/slick/slick.css'>
  <link rel="stylesheet" href= '<?php echo get_bloginfo('template_url');  ?>/plugins/slick/slick-theme.css'>
  <!-- Colorbox -->
  <link rel="stylesheet" href= '<?php echo get_bloginfo('template_url');  ?>/plugins/colorbox/colorbox.css'>
  <!-- Template styles-->
  <link rel="stylesheet" href= '<?php echo get_bloginfo('template_url');  ?>/style.css'>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="body-inner">
<div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">4486 Rue Cartier Montréal QC H2H 1W6 Canada</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
					
					<li>
				<span  class="activee ">French <span>
						
					</li>
					<li>
						<span  class="activee actves">English <span>
					</li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                
                <div class="logo">
                    <a class="d-block" href="index.html">
                      <img loading="lazy" src="<?php echo get_bloginfo('template_url');  ?>/images/logo-main-03.png" alt="Constra">
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto align-items-center">
                      <li class="nav-item dropdown active">
                          <a href="about-us.html" class="nav-link " >About</a>
                          
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="temporary-foreign-worker.html">Temporary Foreign Worker</a></li>
                            <li><a href="candidate.html">Candidate</a></li>
                            <li><a href="employer.html">Employer</a></li>
                          
                          </ul>
                      </li>
              
			  
				 <li class="nav-item dropdown active">
                          <a href="why-quebec-canada.html" class="nav-link " >Why Quebec Canada </a>
                          
                      </li>
					   <li class="nav-item dropdown active">
                          <a href="faq.html" class="nav-link " >faq</i></a>
                          
                      </li>

                     
                    
              
                      <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact</a></li>

                      <li class="header-get-a-quote">
                          <a class="btn btn-primary" href="singn-and-signup.html" style="color:#fff">Sign-up/Login</a>
                      </li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>