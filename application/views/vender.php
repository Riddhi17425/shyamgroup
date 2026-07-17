<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Basic Page Needs
         ================================================== -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta http-equiv="Content-Language" content="EN" />
      <meta name="author" content="Shyam Group" />
      <meta name="distribution" content="Global" />
      <?php include 'include/meta.php'; ?>

      <!-- Mobile Specific Metas
         ================================================== -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php include 'include/css.php'; ?>
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
   </head>
   <body>

      <div class="body-inner">
         <?php include 'include/top-nav.php'; ?>
         <?php include 'include/header.php'; ?>
         <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/vender.png)">
            <!-- <div class="banner-text">
               <div class="container">
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="banner-heading">
                       <h1 class="border-title border-left">Vender</h1>
                       <ol class="breadcrumb">
                         <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                         <li>Vender</li>
                       </ol>
                     </div>
                   </div>
                 </div>
               </div>
               </div> -->
         </div>
         <!-- Banner area end -->
         <section class="call-to-action">
            <div class="container">
               <div class="coman_routs">
                  <div class="col-md-2 ">
                     <h3 class="call-to-action-title">Vendor</h3>
                  </div>
                  <div>
                     <p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Vendor</p>
                  </div>
                  <div class="col-md-2 ">
                     <div class="call-to-action-btn-angle">
                        <!--<a href="<?php echo base_url(); ?>contact-us"><i class="fa fa-phone"></i>Contact Us</a> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="main-container" class="main-container">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <div class="sidebar sidebar-left">
                        <div class="widget contact-info">
                           <h1 class="border-title border-left">Vendor</h1>
                           <div class="contact-info-box mb-5">
                              <i class="fa fa-map">&nbsp;&nbsp;</i>
                              <div class="contact-info-box-content">
                                 <h4 class="mb-4">Address</h4>
                                 <div class="mb-4">
                                    <p><b>Registered Office  :- </b></p>
                                    <p>
                                       T-5, 3rd Floor, Gokul Complex, Drive-In Road, Opp. Swaninarayan Gurukul Temple, Gurukul, Ahmedabad-52.
                                    </p>
                                 </div>
                                 <!--<div>-->
                                 <!--    <p><b>Mumbai Office :- </b></p>-->
                                 <!--    <p>-->
                                 <!--  Regus Business Centre, Level 4 Kanakia Dynasty, A wing, Andheri-Kurla Road, Andheri East. Mumbai 400059.</p></div>-->
                              </div>
                           </div>
                           <div class="contact-info-box mb-5">
                              <i class="fa fa-envelope">&nbsp;&nbsp;</i>
                              <div class="contact-info-box-content">
                                 <h4>Mail Us</h4>
                                 <p>info@shyamgroups.co.in</p>
                                 <p>hardik.shyamgroup@gmail.com</p>
                              </div>
                           </div>
                           <div class="contact-info-box mb-5">
                              <i class="fa fa-phone-square">&nbsp;&nbsp;</i>
                              <div class="contact-info-box-content">
                                 <h4>Call Us</h4>
                                 <p><a href="tel: 85 11 33 22 00"> 85 11 33 22 00</a></p>
                                 <!--<p>Chirag Parekh : (+91) 85111 10305</p>-->
                                 <!--<p>Pramod Shah : (+91) 97027 16158</p>-->
                              </div>
                           </div>
                        </div>
                        <!-- Widget end -->
                     </div>
                     <!-- Sidebar left end -->
                  </div>
                  <!-- Sidebar col end -->
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                     <h3 class="border-title border-left">Registration Form</h3>
                     <span style="color:#FF0000"><?php //echo $this->session->flashdata('msg'); ?></span>
                     <form action="<?php echo base_url(); ?>Vender/send_mail" method="post" id="vendorForm" name="vendorForm">
                        <div class="error-container"></div>
                        <div class="row mb-3">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Company Name *</label>
                                 <input class="form-control form-control-name" name="company_name" placeholder="" type="text" required="">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Contact Person Name *</label>
                                 <input class="form-control form-control-name" name="contact_person" placeholder="" type="text" required="" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s{2,}/g, ' ').trimStart();">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Designation *</label>
                                 <input class="form-control form-control-name" name="designation" placeholder="" type="text" required="">
                              </div>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Email ID *</label>
                                 <input class="form-control form-control-email" name="email" placeholder="" type="email" required="">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Cell No Primary *</label>
                                 <input class="form-control form-control-name" name="contact_one" placeholder="" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" required="">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Cell No Secondary</label>
                                 <input class="form-control form-control-name" name="contact_two" placeholder="" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" type="text">
                              </div>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Landline No*</label>
                                 <input class="form-control form-control-name" name="landline" placeholder="" type="text" required="">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>GST No</label>
                                 <input class="form-control form-control-name" name="gst_no" placeholder="" type="text">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>PAN No</label>
                                 <input class="form-control form-control-name" name="pan_no" placeholder="" type="text">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Website</label>
                                 <input class="form-control form-control-subject" name="web_site" placeholder="" type="text">
                              </div>
                           </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                               <label>Address</label>
                               <textarea class="form-control form-control-message" name="address" placeholder="" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                               <label>Conform Captcha</label>
                               <!-- reCAPTCHA Widget -->
                               <div class="g-recaptcha" data-sitekey="6LcYahEsAAAAALj0QYHkfniCG6LuVAOoI8dW8_T1" data-callback="verifyVendorCaptcha"></div>
                               <!-- Hidden input for jQuery validation -->
                               <input type="hidden" name="hiddenVendorRecaptcha" id="hiddenVendorRecaptcha">
                            </div>
                        </div>
                        <div><br>
                           <input type="submit" name="submit" value="Submit" class="btn btn-primary solid blank">
                        </div>
                     </form>
                  </div>
               </div>
               <!-- Content row -->
            </div>
            <!-- Conatiner end -->
         </section>
         <!-- Main container end -->
         <?php include 'include/footer.php'; ?>
         <!-- Javascript Files
            ================================================== -->
         <!-- initialize jQuery Library -->
         <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
         <!-- Bootstrap jQuery -->
         <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
         <!-- Owl Carousel -->
         <script type="text/javascript" src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
         <!-- Counter -->
         <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.counterup.min.js"></script>
         <!-- Waypoints -->
         <script type="text/javascript" src="<?php echo base_url(); ?>js/waypoints.min.js"></script>
         <!-- Color box -->
         <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
         <!-- Smoothscroll -->
         <script type="text/javascript" src="<?php echo base_url(); ?>js/smoothscroll.js"></script>
         <!-- Isotope -->
         <script type="text/javascript" src="<?php echo base_url(); ?>js/isotope.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>js/ini.isotope.js"></script>
         <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM&amp;sensor=false"></script>
         <!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
         <!-- For latitude and longitude use http://www.latlong.net/ -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js" integrity="sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>js/custom_validations.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>js/gmap3.js"></script>
         <script type="text/javascript">
            // 		$(function () {
            // 	       $('#map')
            // 	         .gmap3({
            // 	           address:"121 King Street, Melbourne Victoria 3000 Australia",
            // 	           zoom: 18,
            // 	           center:[-37.817274,144.955709],
            // 	           mapTypeId : google.maps.MapTypeId.ROADMAP,
            // 	           scrollwheel: false
            // 	         })
            // 	         .marker([
            // 		        {position:[-37.817274,144.955709]},
            // 		        {icon: "http://maps.google.com/mapfiles/marker_grey.png"}
            // 		      ])
            // 	     });

                let vendorFormSubmitted = false;
                function verifyVendorCaptcha(response) {
                    $("#hiddenVendorRecaptcha").val(response);
                    $("#vendorForm").validate().element("#hiddenVendorRecaptcha"); // Trigger re-validation
                }
                $(document).ready(function() {
                // Setup form validation
                    $("#vendorForm").validate({
                    ignore: [],
                    rules: {
                        company_name: {
                            required: true,
                            englishOnly: true,
                            minlength: 2,
                            maxlength: 100
                        },
                        contact_person: {
                            required: true,
                            blockName: true,
                            englishOnly: true,
                            lettersonly: true,
                            minlength: 2,
                            maxlength: 50
                        },
                        designation: {
                            required: true,
                            englishOnly: true,
                            minlength: 2,
                            maxlength: 50
                        },
                        email: {
                            required: true,
                            email: true,
                            noSpamEmail: true,
                            englishOnly: true
                        },
                        contact_one: {
                            required: true,
                            validPhone: true,
                            number: true
                        },
                        contact_two: {
                            validPhone: true,
                            number: true
                        },
                        landline: {
                            required: true,
                            validPhone: true,
                            number: true
                        },
                        gst_no: {
                            englishOnly: true,
                            minlength: 15,
                            maxlength: 15
                        },
                        pan_no: {
                            englishOnly: true,
                            minlength: 10,
                            maxlength: 10
                        },
                        web_site: {
                            url: true
                        },
                        address: {
                            englishOnly: true,
                            maxlength: 300
                        },
                        hiddenVendorRecaptcha: {
                            required: function () {
                                return grecaptcha.getResponse() === "";
                            }
                        }
                    },
                    messages: {
                        company_name: {
                            required: "Please enter company name"
                        },
                        contact_person: {
                            required: "Please enter contact person name"
                        },
                        designation: {
                            required: "Please enter designation"
                        },
                        email: {
                            required: "Please enter email address",
                            email: "Please enter a valid email address"
                        },
                        contact_one: {
                            required: "Please enter primary contact number"
                        },
                        landline: {
                            required: "Please enter landline number"
                        },
                        gst_no: {
                            minlength: "GST number must be 15 characters",
                            maxlength: "GST number must be 15 characters"
                        },
                        pan_no: {
                            minlength: "PAN number must be 10 characters",
                            maxlength: "PAN number must be 10 characters"
                        },
                        web_site: {
                            url: "Please enter a valid website URL"
                        },
                        address: {
                            maxlength: "Address cannot exceed 300 characters"
                        },
                        hiddenVendorRecaptcha: "Please complete the captcha verification."
                    },
                    errorElement: "div",
                    errorPlacement: function (error, element) {
                        error.addClass("invalid-feedback");
                        if (element.attr("name") === "hiddenVendorRecaptcha") {
                            error.insertAfter(".g-recaptcha");
                        } else {
                            error.insertAfter(element);
                        }
                    },
                    highlight: function (element) {
                        $(element).addClass("is-invalid").removeClass("is-valid");
                    },
                    unhighlight: function (element) {
                        $(element).addClass("is-valid").removeClass("is-invalid");
                    },
                    submitHandler: function (form) {
                        if (!vendorFormSubmitted) {
                            vendorFormSubmitted = true;

                            const btn = $(form).find('input[type="submit"]');
                            btn.prop("disabled", true).val("Submitting...");

                            form.submit();
                        }
                    }
                });

                });

         </script>
         <!-- Template custom -->
         <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
      </div>
      <!-- Body inner end -->
   </body>
</html>