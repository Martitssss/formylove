<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>The Clinic by MBCI</title>
        <!-- MDB -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/mdb.min.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
        <script src="js/scripts.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     </head>

<body id="page-top">

<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "105026118932542");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>


       <!-- Navigation-->
       <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">
                <img height="50" src="assets/logo1.png" alt="Logo" style="max-width: 150px;">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/services.html">Our Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/labpricelist.html">Laboratory Pricelist</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/EventsAndPromos.html">Events and Promos</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/doctor.html">Doctors</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hmo">HMO Partners</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>




<!--HOME Section START-->

<section id="home">
    <div class="container-fluid p-0 mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
            <!-- Add data-bs-interval="1000" to make it move every 1 second -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button> 
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/webp/1.jpg" class="d-block w-100 slider-img-size" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/webp/gettested.png" class="d-block w-100 slider-img-size" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/webp/clinic02.jpg" class="d-block w-100 slider-img-size" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/webp/gettested1.png" class="d-block w-100 slider-img-size" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/webp/tryclinic.JPEG" class="d-block w-100 slider-img-size" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/webp/clinic1.jpg" class="d-block w-100 slider-img-size" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/webp/dermacare.png" class="d-block w-100 slider-img-size" alt="...">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Add your necessary JavaScript files here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>


<!-- ABOUT Section START-->
<section class="page-section bg-white text-black mt-4" id="about">
    <div class="container1">
        <div class="row justify-content-center">
            <div class="col-lg-12 has-box-shadow mb-4">
                <div class="container px-4 px-lg-5 text-center pt-4">
                    <img height="100" src="assets/logo1.png" alt="Logo" style="max-width: 420px;">
                    <hr align="center" class="hr">
                    <h3 class="mb-4 p-3 f-w-700">Medical Benefit Clearinghouse, Inc.</h3>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a href="#appointment" class="btn btn-appoint" style="margin-bottom: 40px; padding: 15px 30px; border-radius: 30px; box-shadow: 0 1 2px; text-decoration: none; transition: all 0.3s ease;">Book an Appointment</a>
            </div>
        </div>

<!-- ABOUT Section End-->
        

<div class="row justify-content-center mt-4">
  <div class="col-12 col-md-5 mb-4">
      <!-- card starts here -->
      <div class="card shadow h-100">
          <img src="images/mission.jpg" alt="" class="card-img-top">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h3 class="text-center">Our Mission</h3>
              <hr class="mx-auto w-75">
              <p class="text-center">
                  To provide the highest quality out patient medical and diagnostic services in an manner that is professional, personal and cost-efficient.
              </p>
          </div>
      </div>
      <!-- card ends here -->
  </div>
  <!-- col ends here -->

  <div class="col-12 col-md-5 mb-4">
      <!-- card starts here -->
      <div class="card shadow h-100">
          <img src="images/vision.jpg" alt="" class="card-img-top">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h3 class="text-center">Our Vision</h3>
              <hr class="mx-auto w-75">
              <p class="text-center">
                  To develop and sustain an environment of superior medical and diagnostic care that goes beyond the industry standard and be known as the industry leader in providing high quality , personalized yet affordable healthcare and wellness services.
              </p>
          </div>
      </div>
      <!-- card ends here -->
  </div>
  <!-- col ends here -->

        <!-- Carousel Section END-->


        <!-- HMO Partners -->

   <section id="hmo" class="section-padding">
     <div class="container" id="hmo-section">
       <!-- HMO Partners section content -->

      <div class="row">
        <div class="col-md-12">
        </div>

        <div class="container-fluid">
          <marquee direction ="right" scrollamount ="15">
                     <img alt="" class="style20" src="img/pngwing.com.png" />  
                     <img alt="" class="style20" src="img/Inlife-Eagle-(Insular-Health-Care)-stroke.png" />
                     <img alt="" class="style20" src="img/coco.png" />
                     <img alt="" class="style20" src="img/philcare-new-logo.png" />
                     <img alt="" class="style20" src="img/hppi.png" />
                     <img alt="" class="style20" src="img/hmi.png" />
		             <img alt="" class="style20" src="img/medicard.png" />
		             <img alt="" class="style20" src="img/medocare.png" />
	                 <img alt="" class="style20" src="img/etiqa.png" />
                     <img alt="" class="style20" src="img/carehealth.png" />
                     <img alt="" class="style20" src="img/eastwest.png" />
                     <img alt="" class="style20" src="img/PacificCrossPhilippinesLogo.png" />
                     <img alt="" class="style20" src="img/flici.png" />
                     </marquee>&nbsp;
          <!--<img alt="" src ="img/pngwing.com.png" height="150" width="200" text-align:"center"/>
          <img alt="" src ="img/hppi.png" height="150" width="200" text-align:"center"/>
          <img alt="" src ="img/Inlife-Eagle-(Insular-Health-Care)-stroke.png" height="150" width="200" text-align:"center"/>
          <img alt="" src ="img/philcare-new-logo.png" height="150" width="300" text-align:"center"/>
          <img alt="" src ="img/coco.png" height="150" width="200" text-align:"center"/>
	  <img alt="" src ="img/flic.png" height="150" width="700" text-align:"center"/>
	  <img alt="" src ="img/hmi.png" height="150" width="700" text-align:"center"/>
	  <img alt="" src ="img/medicard.jpg" height="150" width="700" text-align:"center"/>
	  <img alt="" src ="img/medocare.png" height="150" width="700" text-align:"center"/>
          <img alt="" src ="img/Etiqa.png" height="150" width="700" text-align:"center"/>-->
        </div>
       </div>
  </section>
  <!--/ testimonial-->

        <!-- Contact Section START-->
        <section class="page-section mt-2" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row g-0">
        			<!-- Google map Section START-->
                	<div class="col-lg-6 col-sm-12 p-2 mr-5 has-box-shadow">
                		<div class="row justify-content-center">
                		    <div class="col-lg-12 text-center mt-4">
                    			<iframe class="iframe-map shadow-sm" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.4522888570714!2d121.06080887431449!3d14.573284777746423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9d4a0bc8f1d%3A0x8d0d175e0ad125a4!2sThe%20Clinic%20by%20MBCI!5e0!3m2!1sen!2sph!4v1689727648069!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                		    </div>
                		</div>
                	</div>
        			<!-- Google map Section END-->
                	<div class="col-lg-5 col-sm-12 p-2 ml-5 has-box-shadow has-m-l">
                		<div class="row justify-content-center">
                		    <div class="col-lg-12 text-center">
                		        <h2 class="mt-3 pl-3"><i class="bi-telegram fs-2 text-muted"></i>Contacts</h2>
                		        <hr class="divider" />
                		        <p class="text-muted mb-5">Ready to contact us? Call us or send us a message and we will get back to you as soon as possible!</p>
                		    </div>
                		</div>
                		<div class="row justify-content-center">
                		    <div class="col-lg-12 text-center mb-4">
                		    	<h4 class="mb-3">
                                        <i class="bi-envelope fs-2 text-dark"></i>EMAIL:
                                    </h4>
                                    <a href="mailto:theclinic@mbci.ph">
                                        <div class="mb-3">
                                            <span class="bg-kontact px-3 py-2">
                                                THECLINIC@MBCI.PH
                                            </span>
                                        </div>
                                    </a>
                                    <a href="mailto:theclinicbymbci@gmail.com">
                                        <div class="mb-3" style="margin-top: 20px;">
                                            <span class="bg-kontact px-3 py-2">
                                                THECLINICBYMBCI@GMAIL.COM
                                            </span>
                                        </div>
                                    </a>                                    
                		        </a>
                		    </div>
                		</div>
                		<div class="row justify-content-center">
                		    <div class="col-lg-12 text-center mb-4">
                		        <h4  class="mb-3"><i class="bi-phone fs-2 text-muted"></i>TELEPHONE:</h4>
                		        <a href="tel:09993774982">
                		        	<div class="mb-3">
                                        <span class="bg-kontact px-3 py-2">
                                            8640-3581 and 0999-377-4982
                                        </span>
                                    </div>
                		    	</a>
                		    </div>
                		</div>
                		<div class="row justify-content-center">
                		    <div class="col-lg-12 text-center mb-4">
                		        <h4 class="mb-3"><i class="bi-ui-checks fs-2 m-1 text-muted"></i>DIRECTIONS:</h4>
                		        <div>Ground Floor, Citystate Centre</div>
                		        <div>709 Shaw Blvd., Oranbo, Pasig City</div>
                		    </div>
                		</div>
                		<hr class="divider" />
                	</div>
                </div>
            </div>
  <!--PICTURES OF BUILDING CITY STATE-->
  <!--APPOINTMENT SECTION-->
  <section id="appointment" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h2 class="ser-title">LIVE VIEW</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <!-- Replace contact info with the image -->
          <div style="margin-right: 30px;">
        </div>
        <img src="assets/webp/location.png" alt="Location Image" class="img-responsive" style="height: 420px; width: 350px; border-radius: 10px;">
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Having Any Query? Contact and Locate Us! </h3>
            <div class="space"></div>
            <form action="https://formsubmit.co/theclinic@mbci.ph" method="POST" class="contactForm" id="contactForm">
            <form action="https://formsubmit.co/theclinicbymbci@gmail.com" method="POST" class="contactForm" id="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" id="message" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="form-action">
                <button type="submit" class="btn btn-form" name="submit">Send Message</button></div>
               <div>
                <input type="hidden" name="_captcha" value="true">
               </div>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!--/ contact-->
        </section>
        <!-- Contact Section END-->
        <!-- Footer Section START-->
        <footer class="bg-white has-box-shadow mt-4 py-5">
            <footer id="footer">
                <div class="top-footer">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                          <h5 class="white no-padding">About Us</h5>
                        </div>
                        <div class="info-sec">
                          <p>The Clinic by MBCI is a part of the ever-growing ALC Group of Companies, delivering exceptional healthcare services.</p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                          <h5 class="white no-padding">Quick Links</h5>
                        </div>
                        <div class="info-sec">
                          <ul class="quick-info">
                            <li><a href="index.html"><i></i>Home</a></li>
                            <li><a href="#price"><i></i>Services</a></li>
                            <li><a href="#contact"><i></i>Contact Us</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                          <h5 class="white no-padding">Follow Us</h5>
                        </div>
                        <div class="info-sec">
                          <ul class="social-icon">
                              <a target='_blank' href ="https://www.facebook.com/theclinicbymbcinc"><img alt="" src ="assets/webp/facebook.png" width="50" height="50"/></a>&nbsp;
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="footer-line">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        © Copyright 2022. All Rights Reserved
                        <div class="credits">
                          <!--
                            All the links in the footer should remain intact.
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
                          -->
                          &nbsp;</div>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
              <!--/ footer-->
              <!--<script src="js/jquery.min.js"></script>
              <script src="js/jquery.easing.min.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/custom.js"></script>-->
              <script src="https://smtpjs.com/v3/smtp.js"></script>
                <script>
                    function sendEmail(){
                        Email.send({
                            Host : "smtp.gmail.com",
                            Username: "ralphanthonygomez.reyes@gmail.com",
                            Password : "r3y3$?0071o874!",
                            To : 'ralphanthonygomez.reyes@gmail.com',
                            From : document.getElementById("email").value,
                            Subject: "New Contact Form Inquiry",
                            Body : "And this is the body"
                        }).then(
                        message >= alert(message)
                        );
                    }
                </script>
            
            </body>
            
            </html>
            