<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chavraya</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/elegant-icons/css/elegant-icons.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/cubeportfolio/css/cubeportfolio.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        <link rel="icon" href="assets/img/topicon.png">
            <!--Colors-->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/orange.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/green.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/lime.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/brown.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/blue.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/yellow.css"> -->
             <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/purple.css"> -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body data-spy="scroll" data-offset="80">
         <div class="navbar navbar-default navbar-fixed-top menu-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home"> CHAVRAYA</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about-us-section">About Us</a></li>
                        <li><a href="#benefits-section">Aliyah Benifits</a></li>
                        <li><a href="#services-section">Our Services</a></li>
                        <li><a href="#contact-section">Register</a></li>
                        <li><a href="#callaction-container">Donate</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Top content -->
        <div id="home" class="parallax top-content" data-stellar-background-ratio="0.3">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">

			<div class="col-md-10 col-md-offset-1 top-description">

				<h2 class="text-center">
				<img src="assets/img/logo.png" width="350px" /></h2>


		<p>
Chavraya's primary goal is to bring together a group of heimish families that are making aliyah, and create their own beautiful community, a comfortable place with schools for the children and amenities catering specifically to their needs.</p>
		                            <div class="top-button">
                            	   <a class="btn btn-top-white btn-lg" href="#about-us-section"><i class="icon ion-mouse" style="margin-right:2px"></i>  Click to Learn More</a>
                                    <a class="btn btn-top-white btn-lg" href="<?= base_url() ?>index.php/he">החלף לעברית</a>
                                    <a class="btn btn-top-white btn-lg" href="<?= base_url() ?>index.php/yi">טוישן צו אידיש</a>
                            </div>

					</div>
                            </div>

					</div>


				</div>
			</div>

        <!-- Features -->

<div id="about-us-section" class="product-container product-bg2">
            <div class="container" style="text-align:center">
                <div class="row">

                <div class="col-lg-6 col-sm-6">
                    <div class="productbox" >
                        <div>
                            <i class="icon ion-information"></i>
                        </div>
                        <h5>Chavraya was </h5>
founded by a group of heimish families from the United States as well as internationally, that want to make aliyah and live in Eretz Yisroel, for various reasons. Chavraya will b'ezrat hashem help all who come from abroad to the Holy Land.
                    </div>

                    <div class="productbox">
                        <div>
                            <i class="icon ion-android-expand"></i>
                        </div>
                        <h5>Chavraya is</h5>
currently in the process of expanding their operations to include providing resources for young people coming to learn in yeshiva or seminary in Eretz Yisroel, to help them physically and spiritually.
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="productbox">
                        <div>
                            <i class="icon ion-android-archive"></i>
                        </div>
                        <h5>Chavraya's task</h5>
 is to be  asource of support for those making aliyah. The staff has been working tirelessly for the past few years with influential individuals, on making the transition of those who are making aliyah as easy and smooth as possible. They aid with finding housing, jobs, enrolling the children in local schools, as well as founding a new shul and community center, which will unite those making aliyah into a vibrant community.

                    </div>
                    <div class="productbox">
                        <div>
                            <i class="icon ion-android-plane"></i>
                        </div>
                        <h5>Chavraya helps</h5>
individuals as well as groups of heimish people who want to live in other locations throughout Israel. They too can get the help and information needed to make their aliyah process easier and less stressful.
                    </div>

                </div>
            </div>


        </div>


    </div>
        <div id="benefits-section" class="features-container benefits-container" style="padding-bottom:0">
            <div class="inner-bg benefits-inner-container">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12 features">
                        <h2>Aliyah Benefits</h2>
                        <h4 style="color: white; line-height: 200%;">Moving to a foreign state in order to settle involves lots of emotions and bureaucracy. There are the financial difficulties as well as the language and orientation process. Israel offers new citizens an absorption basket which is among the best in the world, Chavraya with its good relations connects between the Olim and various benefit resources.
Benefits such as Financial aid, Free flights, Discount on rent payments up to five years, A free course to learn the local language, a significant discount for higher education tuition, Tax breaks and more.
Applicants receive the benefits in full detail depending on the family size</h4>
                    </div>
                </div>

            </div>
        </div>
        </div>

        <!-- Product -->
        <div id="services-section" class="features-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 features">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 features-box1">
                        <div class="icon">
                            <i class="icon ion-ios-body"></i>
                        </div>
                        <h4>Assistance</h4>
                        <p>
                            Chavraya is working together with multiple organizations and government bureaus in order to streamline the aliyah process, providing our group members with whatever assistance they may need.
                        </p>
                    </div>
                    <div class="col-sm-4 features-box2">
                        <div class="icon">
                            <i class="icon ion-android-home"></i>
                        </div>
                        <h4>Housing</h4>
                        <p>
                            Chavraya forms a group of families who want to purchase together housing in Israel, and settle in a neighborhood that will suit their specific needs. Currently, Chavraya is aiding families find rental apartments.
                        </p>
                    </div>
                    <div class="col-sm-4 features-box3">
                        <div class="icon">
                            <i class="icon ion-android-contacts"></i>
                        </div>
                        <h4>Community</h4>
                        <p>
                            The first community for heimishe families that make aliyah will be set up on the mountains around Jerusalem. A warm, united kehillah, which will provide all the community's needs with a chasidish geshmak. A community center will be built, along with a mikva tahara, library, and beautiful Shul to daven and learn.
                        </p>
                    </div>
                    <div class="col-sm-4 features-box4">
                        <div class="icon">
                            <i class="icon ion-settings"></i>
                        </div>
                        <h4>Employment</h4>
                        <p>
                            Chavraya assists with job placement for men and women alike. The organization works with various heimishe employers, as well as professional firms in the country, and tries to arrange suitable employment for every individual.
                        </p>
                    </div>
                    <div class="col-sm-4 features-box5">
                        <div class="icon">
                            <i class="icon ion-ios-book"></i>
                        </div>
                        <h4>Education</h4>
                        <p>
                            Chavraya helps parents with enrolling their children in schools that are suitable for their individual needs. With time, Chavraya hopes to build its own Educational institutions , which will be geared for the new community it is founding.
                        </p>
                    </div>
                    <div class="col-sm-4 features-box6">
                        <div class="icon">
                            <i class="icon ion-levels"></i>
                        </div>
                        <h4>Pre-Aliyah</h4>
                        <p>
                            Chavraya arranges information conferences and special events in order to get families interested in moving to Israel to meet other families in the same stage and share ideas, as well as private Consultation meetings with each family.
                        </p>
                    </div>

                </div>
            </div>
        </div>



        <!-- Callaction -->

        <div id="callaction-container" class="callaction-container">
            <div class="inner-callaction">
	        <div class="container">
            <div class="row">
                <h2>Donate</h2>
                <h3>We need your help</h3>
    <h4>By donating to "chavraya" you get the opportunity to not only be a part of our community - You are building the future of Israel!</h4> <br>
    <h4>To donate to us, just leave us a message by email. Our email is contact@chavraya.com</h4>
<!--<a href="#" class="btn btn-top-white btn-lg" style="">Call To Action</a>-->
</div>
</div>
</div>
</div>

        <!-- Pricing -->





                <!-- Testimonials -->


        <!-- Contact us -->
        <div id="contact-section" class="contact-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 contact">
                    <h2 style="color:black">Register For Chavraya</h2>
                    <p>
                        Fill out the form below
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group register-a-form">

                    <form method="post" action="<?= base_url() ?>index.php/main/register_user" id="register_form">
                        <input type="text" name="name" placeholder="Full Name" class="form-control contact-name">
                        <input type="text" name="city" placeholder="City" class="form-control contact-city">
                        <input type="text" name="country" placeholder="Country" class="form-control contact-city">
                        <input type="text" name="email" placeholder="Email" class="form-control contact-email">
                        <input type="text" name="phone" placeholder="Phone" class="form-control contact-phone-number">
                        <input type="text" name="family-size" placeholder="Family Size" class="form-control contact-fam-size">
                        <textarea name="message" class="form-control" placeholder="Message"></textarea>
                        <button type="submit" class="btn btn-contact" id="dat" onclick="submit_form()">Submit</button>
                    </form>

                </div>

            </div>
          </div>
        </div>


	<!-- footer -->
	<div id="footer">
	<h3>Follow Us!</h3>
	<div class="follow-us">
                        <a href="https://www.facebook.com/chavraya" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/thechavraya" class="social-icon"><i class="fa fa-twitter"></i></a>
                        <a href="https://instagram.com/chavraya" class="social-icon"><i class="fa fa-instagram"></i></a>
                        <a href="https://youtube.com" class="social-icon" disabled><i class="fa fa-youtube"></i></a>
		</div>
	</div>
	<!-- footer 2 -->
	<div id="footer2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<div class="copyright">&copy;Chavraya
							<script type="text/javascript">
							//<![CDATA[
								var d = new Date()
								document.write(d.getFullYear())
								//]]>
								</script>

						</div>
						</div>
					</div>
				</div>
					</div>

        <!-- Javascript -->
        <script src="<?= base_url() ?>assets/js/jquery-1.10.2.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/retina-1.1.0.min.js"></script>
        <script src="<?= base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>
        <script src="<?= base_url() ?>assets/js/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>assets/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script src="<?= base_url() ?>assets/js/cube.js"></script>
        <script src="<?= base_url() ?>assets/js/script.js"></script>
        <script src="<?= base_url() ?>assets/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <script>
        <?php if($did_register == true): ?>
        $(document).ready(function(){
            swal("Thank you!", "You have successfully registered!", "success");

  });

        <?php endif ?>
        function submit_form(){
            //do validation
            $("#dat").submit();
        }
        </script>

    </body>

</html>
