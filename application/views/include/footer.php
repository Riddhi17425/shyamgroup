<style>
.bottom-whatsapp {
    position: fixed;
   bottom: 50px;
    width: 55px;
    left: 15px;
    height: 55px;
    z-index: 999;
}
.action-box{border:1px solid #fff;}
    .action-box {
    border: 1px solid rgba(255, 255, 255, .3);
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: center;
    padding: 35px 44px;
    gap: 14px;
    border-radius: 5px;
    width:100%;
}
.action-box-content {
    margin-left: 0px;
}

.top_ft_card
{
    display: flex;
    flex-wrap: wrap;
}

.top_ft_card .col-md-4 {
  display: flex;
}
/*For Error Message*/
.invalid-feedback {
    color: red;
    font-size: 15px;
    margin-top: 2px;
}
/* Highlight invalid input fields */
.is-invalid {
    border-color: red;
}
.whatsapp-form-modal{
    top:20%;
}
.whatsapp-form-modal .modal-dialog{
    width:40%;
}
/* WhatsApp floating button - proper circular style */
.whatsapp-btn-footer {
    position: fixed;
    bottom: 25px;
    left: 20px;
    width: 65px;
    height: 65px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 999;
    background: transparent;   /* remove the green circle */
    box-shadow: none;
    transition: transform 0.3s ease;
}

.whatsapp-btn-footer img {
    width: 55px;
    height: 55px;
    border-radius: 12px;
}

.whatsapp-btn-footer:hover {
    transform: scale(1.08);
}


/* If you'd rather have a bounce instead of/in addition to the pulse */
@keyframes whatsapp-bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-8px); }
    60% { transform: translateY(-4px); }
}

.whatsapp-btn-footer {
    animation: whatsapp-bounce 2.5s ease-in-out infinite;
}

.whatsapp-btn .btn-spinner {
    display: inline-block;
    width: 16px;
    height: 16px;
    border: 2px solid rgba(255, 255, 255, 0.4);
    border-top-color: #fff;
    border-radius: 50%;
    animation: btnSpin 0.7s linear infinite;
    margin-right: 8px;
    vertical-align: middle;
}

@keyframes btnSpin {
    to {
        transform: rotate(360deg);
    }
}
</style>
<?php
    $segment         = $this->uri->segment(1);
    $is_contact_page = $segment == 'contact-us';
    $is_vendor_page  = $segment == 'vender';
?>
<section class="top_ft">
  <div class="container">
    <div class="top_ft_card" style="<?php echo($is_contact_page || $is_vendor_page) ? 'display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;' : ''; ?>">

      <!-- Ahmedabad Office (Always show) -->
      <div class="col-md-4">
        <div class="action-box">
          <span class="action-box-icon"><i class="fa fa-map-marker"></i></span>
          <div class="action-box-content">
            <h3>Ahmedabad Office</h3>
            <a href="https://maps.app.goo.gl/qvX7ugjpkAotpFZQ8" target="_blank" rel="noopener noreferrer" class="action-box-text">Shyam Group:107-108, Square Corporate Park,<br> Nr. CIMS Hospital, Science City Road, Ahmedabad-60.<br></a>
          </div>
        </div>
      </div>

      <!-- For Vendor (Hide on /vender page) -->
      <?php if (! $is_vendor_page) {?>
      <div class="col-md-4">
        <div class="action-box">
          <span class="action-box-icon"><i class="fa fa-wrench"></i></span>
          <div class="action-box-content">
            <h3>For Vendor</h3>
            <p class="action-box-text">Registration For Further Detail</p>
            <p><a href="<?php echo base_url(); ?>vender" class="ft_btn">Get in Touch</a></p>
          </div>
        </div>
      </div>
      <?php }?>

      <!-- Contact Us (Hide on /contact-us page) -->
      <?php if (! $is_contact_page) {?>
      <div class="col-md-4">
        <div class="action-box">
          <span class="action-box-icon"><i class="fa fa-comments"></i></span>
          <div class="action-box-content">
            <h3>Contact Us</h3>
            <p class="action-box-text">
              <i class="fa fa-envelope-o"></i> <span style="margin-left:8px;"><a href="mailto:info@shyamgroups.co.in" target="_blank" rel="noopener noreferrer" class="action-box-text">info@shyamgroups.co.in</a></span><br>
              <a href="tel:+918511332200" target="_blank" rel="noopener noreferrer" class="action-box-text">Call us :  +91 85 11 33 22 00</a>
            </p>
            <p><a href="<?php echo base_url(); ?>contact-us" class="ft_btn">Get in Touch</a></p>
          </div>
        </div>
      </div>
      <?php }?>

    </div>
  </div>
</section>

<footer id="footer" class="footer">
  <div class="footer-top">
    <div class="container">
      <!--<div class="row">-->
      <!--  <div class="col-md-4">-->
      <!--    <div class="action-box"> <span class="action-box-icon"> <i class="fa fa-map-marker"></i> </span>-->
      <!--      <div class="action-box-content">-->
      <!--        <h3>Where We Are</h3>-->
      <!--        <p class="action-box-text">107-108, Square Corporate Park, -->
      <!--        <br> Nr. CIMS Hospital, Science City Road, Ahmedabad-60. <br /> </p>-->
      <!--        <p><a href="<?php echo base_url(); ?>contact-us"><i class="fa fa-caret-right"> </i> Find More</a></p>-->
      <!--      </div>-->
      <!--    </div>-->
          <!-- Action box 1 end -->
      <!--  </div>-->
        <!-- Col end -->

      <!--  <div class="col-md-4">-->
      <!--    <div class="action-box"> <span class="action-box-icon"> <i class="fa fa-wrench"></i> </span>-->
      <!--      <div class="action-box-content">-->
      <!--        <h3>For Vendor</h3>-->
      <!--        <p class="action-box-text">Registration For Further Detail</p>-->
      <!--        <p><a href="<?php echo base_url(); ?>vender"><i class="fa fa-caret-right"> </i> Learn More</a></p>-->
      <!--      </div>-->
      <!--    </div>-->
          <!-- Action box 2 end -->
      <!--  </div>-->
        <!-- Col end -->

      <!--  <div class="col-md-4">-->
      <!--    <div class="action-box"> <span class="action-box-icon"> <i class="fa fa-comments"></i> </span>-->
      <!--      <div class="action-box-content">-->
      <!--        <h3>Contact Us</h3>-->
      <!--        <p class="action-box-text"><i class="fa fa-envelope-o"></i> info@shyamgroups.co.in<br />-->
      <!--          Call us : (+91) 85113 32200</p>-->
      <!--        <p><a href="<?php echo base_url(); ?>contact-us"><i class="fa fa-caret-right"> </i> Learn More</a></p>-->
      <!--      </div>-->
      <!--    </div>-->
          <!-- Action box 3 end -->
      <!--  </div>-->
        <!-- Col end -->

      <!--</div>-->
      <!-- Content row end -->
    </div>
    <!--/ Container end -->
  </div>
  <!-- Footer top end -->

  <div class="footer-main">
    <div class="container">
      <div class="footer_main_child">
        <div class="col-md-6 col-sm-12 col-12 footer-widget ">
             <a href="<?php echo base_url(); ?>" > <img src="<?php echo base_url(); ?>images/logo.svg" alt="shyamgroup" width="170" height="90"></a>
              <p class="mt-5 mb-5">
               Established in 2013, Shyam Group is one of the leading real estate developers in Dholera, offering residential plots in Dholera SIR and land investment opportunities backed by transparent, RERA-aligned processes.</p>
              <div class="ft_social">
                  <!--<img src="<?php echo base_url(); ?>images/new_images/x.svg" alt="shyamgroup" width="24" height="24">-->
                 <a href="https://www.instagram.com/shyamgroup.official/" target="_blank" rel="noopener noreferrer" title="Instagram">
                  <img src="<?php echo base_url(); ?>images/new_images/insta.svg" alt="Shyam Group Instagram page" width="24" height="24">
                </a>
                <a href="https://www.facebook.com/shyamgroups" target="_blank" rel="noopener noreferrer" title="Facebook">
                    <img src="<?php echo base_url(); ?>images/new_images/fb.svg" alt="Shyam Group Facebook page" width="24" height="24">
                </a>
                <a href="https://www.linkedin.com/company/shyam-infrazone-private-limited/" target="_blank" rel="noopener noreferrer" title="LinkedIn">
                  <img src="<?php echo base_url(); ?>images/new_images/linkedin.svg" alt="Shyam Group LinkedIn page" width="24" height="24">
                </a>
              </div>
          </div>
          <div class="col-md-5 offset-md-1 col-12 col-sm-12">
              <div class="footer_main_child_rt">
                  <div class="col-md-6  col-6 col-sm-6 footer-widget  ">
          <h3 class="widget-title">Links</h3>
          <ul class="list-arrow">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>company-profile">About</a></li>
             <li><a href="<?php echo base_url(); ?>blogs">Blogs</a></li>
            <li><a href="<?php echo base_url(); ?>testimonials">Testimonial</a></li>
            <li><a href="<?php echo base_url('awards'); ?>">Awards</a></li>
            <!--<li><a href="<?php echo base_url(); ?>dholera-news">Events and Exhibitions</a></li>-->
            <li><a href="<?php echo base_url(); ?>contact-us">Contact</a></li>
            <!--<li><a href="<?php echo base_url(); ?>payment">Payments</a></li>-->
            <!--<li><a href="<?php echo base_url(); ?>company-profile">Privacy Policy</a></li>-->
            <!-- <li><a href="#">Blog</a></li> -->
          </ul>
        </div>
        <div class="col-md-6 col-6 col-sm-6 footer-widget ">
          <!--<h3 class="widget-title">About Us</h3>-->
          <!--<ul class="list-arrow">-->
          <!--  <li><a href="<?php echo base_url(); ?>home">Company Profile</a></li>-->
          <!--  <li><a href="<?php echo base_url(); ?>company-profile">Vision & Mission</a></li>-->
          <!--  <li><a href="<?php echo base_url(); ?>our-projects">Certificates</a></li>-->
          <!--</ul>-->
          <h3 class="widget-title">About Dholera Sir</h3>
          <ul class="list-arrow">
           <li><a href="<?php echo base_url(); ?>our-projects">Our Projects</a></li>
                <!--<li><a href="<?php echo base_url(); ?>pressrelease">Media News</a></li>-->
                <li><a href="<?php echo base_url(); ?>current-status-dholera">Current Status</a></li>
                <li><a href="<?php echo base_url(); ?>tenders">Tenders</a></li>
                <li><a href="<?php echo base_url(); ?>legal-documents">Downloads</a></li>
                <!--<li><a href="<?php echo base_url(); ?>">Blogs</a></li>-->
                <li><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
                <li><a href="<?php echo base_url(); ?>print-media">Print Media</a></li>
          </ul>
        </div>
        <!--<div class="col-md-2 col-sm-12 footer-widget">-->
        <!--  <h3 class="widget-title">Projects</h3>-->
        <!--  <ul class="list-arrow">-->
        <!--    <li><a href="<?php echo base_url(); ?>shyam-villa">Shyam Villa</a></li>-->
        <!--    <li><a href="<?php echo base_url(); ?>dholera-global-city">Dholera Global City</a></li>-->
        <!--    <li><a href="<?php echo base_url(); ?>smart-city-dholera-2">Smart City Dholera 2</a></li>-->
        <!--    <li><a href="<?php echo base_url(); ?>">Project Brochures</a></li>-->
            <!--<li><a href="<?php echo base_url(); ?>legal-documents">Legal Document</a></li>-->
        <!--  </ul>-->
        <!--</div>-->
        <!-- Col end -->

        <!--<div class="col-md-3 col-sm-12 footer-widget">-->
        <!--  <h3 class="widget-title">Dholera Sir Planned Smart City</h3>-->
        <!--  <iframe width="220" height="270" src="https://www.youtube.com/embed/4Dtg6_h6wdQ" frameborder="0" allowfullscreen></iframe>-->
        <!--</div>-->
        <!-- Col end -->

        <!--<div class="col-md-3 col-sm-12 footer-widget">-->
        <!--  <h3 class="widget-title">Dholera News</h3>-->
        <!--  <ul class="list-arrow">-->
        <!--    <?php foreach ($tbl_news_footer as $news_footer_list): ?>-->
        <!--    <li><a href="<?php echo base_url(); ?>Dholera_News/detail/<?php echo $news_footer_list['id']; ?>"><?php echo $news_footer_list['title']; ?></a></li>-->
        <!--    <?php endforeach; ?>-->
        <!--  </ul>-->
        <!--</div>-->
        <!-- Col end -->

        <!--<div class="col-md-5 col-sm-12 footer-widget">-->
        <!--  <h3 class="widget-title">Address</h3>-->
          <!--<div class="working-hours"> <i class="fa fa-home"> </i> <b class="ft_title">Ahmedabad Office :-</b> <br>-->
          <!--  107-108, First Floor, I Square Corporate Park, Nr. CIMS Hospital, Science City Road, Sola, Ahmedabad - 380060, Gujarat, India. </div>-->
          <!--<br>-->
        <!--  <div class="working-hours"> -->
        <!--  <i class="fa fa-home"> </i> <b class="ft_title">Mumbai Office :-</b> <br>-->
        <!--  605 Suchita Business Park, Pant Nagar, Opp. Raigad Chowk, Ghatkopar East.-->
        <!--    Mumbai - 400077. </div>-->
            <!--<br>-->
          <!--<div class="working-hours"> <i class="fa fa-home"> </i> <b class="ft_title">Bengaluru Associate Office :-</b> <br>-->
          <!--No. 19, 1st Main, 1st A Cross, Suvarna Jyothi Layout, Nagadevanahalli, Bangalore, 560056</div>-->
           <!-- Regus Business Centre, Level 4 Kanakia Dynasty, A wing, Andheri-Kurla Road, Andheri East. Mumbai 400059. </div>-->
          <!--<br>-->
          <!--<div class="working-hours"> <i class="fa fa-envelope-o"> </i> info@shyamgroups.co.in </div>-->
        <!--</div>-->
              </div>
          </div>

        <!-- Col end -->

      </div>
      <!-- Row end -->
    </div>
    <!-- Container end -->
  </div>
  <!-- Footer main end -->

  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <div class="copyright-info"> 
              <a href="<?php echo base_url(); ?>privacy-policy" style="color: inherit; text-decoration: none;">Privacy Policy</a> 
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 text-center">
          <div class="copyright-info">
         <span>© <?php echo date("Y"); ?> Shyam Group. All Rights Reserved.</span>
</div>

        </div>
        <div class="col-xs-12 col-sm-4 text-right">
          <div class="copyright-info">  
            <a href="<?php echo base_url(); ?>terms-conditions" style="color: inherit; text-decoration: none;">Terms & Conditions</a> 
         </div>
        </div>
        <!--<div class="col-xs-12 col-sm-6">-->
        <!--  <div class="footer-menu">-->
        <!--    <ul class="nav unstyled">-->
        <!--      <li style="margin-right: 47%;"> </li>-->
        <!--      <li>Powered by : </li>-->
        <!--      <li style="padding-left: 0px;"><a href="http://www.intelliworkz.tech/" target="_new">Intelliworkz</a></li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--</div>-->
      </div>
      <!-- Row end -->

      <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
        <button class="btn btn-primary" title="Back to Top"> <i class="fa fa-angle-double-up"></i> </button>
      </div>
    </div>
    <!-- Container end -->
  </div>
  <!-- Copyright end -->

</footer>
 <!--Footer end -->
 <!--whatsapp btn-->

<a type="button" class="btn btn-primary enquire_btn" data-toggle="modal" data-target="#enquireModal">
Enquire Now
</a>
<a type="button" class="btn whatsapp-btn-footer" data-toggle="modal" data-target="#whatsappModal">
<img src="<?php echo base_url(); ?>images/whatsapp (1).png" alt="whatsapp-img" width=65>
</a>

<!-- <a href="https://www.shyamgroups.co.in/social-media" type="button" class="btn btn-primary Social_btn">
Social Media
</a> -->


<div class="modal fade" id="enquireModal" tabindex="-1" role="dialog" aria-labelledby="enquireModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="enquireModalLabel">Enquiry Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-body">
            <form action="<?php echo base_url(); ?>ModalForm/submit_form" method="post" name="inquiryForm" id="modalForm">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input class="form-control form-control-name" name="name" placeholder="Enter Your Name" type="text" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s{2,}/g, ' ').trimStart();" >
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input class="form-control form-control-email" name="email" placeholder="Enter Your Email ID" type="email">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <label>Phone Number</label>
                        <input class="form-control form-control-phone" name="phone" placeholder="Enter Your Number" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" >
                    </div>
                    <div class="col-md-6">
                        <label>City</label>
                        <input class="form-control form-control-phone" name="city" placeholder="Enter City" type="text">
                        <!--<select class="form-control" name="city">-->
                        <!--    <option value="">Select City</option>-->
                        <!--    <option value="Ahmedabad">Ahmedabad</option>-->
                        <!--    <option value="Surat">Surat</option>-->
                        <!--    <option value="Mumbai">Mumbai</option>-->
                        <!--    <option value="Delhi">Delhi</option>-->
                        <!--    <option value="Pune">Pune</option>-->
                        <!--    <option value="Jaipur">Jaipur</option>-->
                        <!--    <option value="Kolkata">Kolkata</option>-->
                        <!--    <option value="Bangalore">Bangalore</option>-->
                        <!--    <option value="Chennai">Chennai</option>-->
                        <!--</select>-->
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-12">
                        <label>Message</label>
                        <textarea class="form-control form-control-message" name="comment" placeholder="Enter Your Message" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-12">
                        <label>Confirm Captcha</label>
                        <!-- reCAPTCHA Widget -->
                        <div class="g-recaptcha" data-sitekey="6LcYahEsAAAAALj0QYHkfniCG6LuVAOoI8dW8_T1" data-callback="verifyCaptcha"></div>
                        <!-- Hidden input for jQuery validation -->
                        <input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha">

                     </div>
                </div>

                <div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary solid blank">
                </div>
            </form>
        </div>

        </div>
      </div>
    </div>
  </div>
  <div class="modal fade whatsapp-form-modal" id="whatsappModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content whatsapp-modal">

      <div class="modal-header whatsapp-header">
          <div class="model-head-title">
        <h5 class="modal-title">Chat with us on WhatsApp</h5>
        <button type="button" class="close whatsapp-close" data-dismiss="modal">
          <span>&times;</span>
        </button>
        </div>
      </div>


      <div class="modal-body">
        <form id="whatsappForm" method="post"
      action="<?php echo site_url('whatsapp/inquiry'); ?>">


          <div class="form-group">
            <label>Message</label>
            <textarea class="form-control"
              name="message"
              placeholder="Type your message"
              rows="3"></textarea>
          </div>


          <div class="form-group">
            <label>Contact No. <span class="text-danger">*</span></label>
            <input type="text"
              class="form-control"
              name="phone"
              placeholder="+91 Enter your number"
              oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,15);" required>
          </div>


          <div class="text-center">
            <button type="submit" class="btn whatsapp-btn" id="whatsappSubmitBtn">
              Start Chat with Us
            </button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>


</div>

  <!-- Modal for WhatsApp Inquiry -->

<script>
document.addEventListener('DOMContentLoaded', function () {
  var form = document.getElementById('whatsappForm');
  var btn  = document.getElementById('whatsappSubmitBtn');

  if (form && btn) {
    form.addEventListener('submit', function (e) {
      // Agar HTML5 required validation fail ho rahi hai to text change mat karo
      if (!form.checkValidity()) {
        return; // browser apna default validation message dikha dega
      }

      // Button text change + disable (double click/double submit rokne ke liye)
       btn.innerHTML = '<span class="btn-spinner"></span>Connecting to WhatsApp...';      btn.disabled = true;

      // form apne aap submit ho jayega (redirect wagera controller se hoga)
    });
  }
});
</script>



<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "RealEstateAgent",
  "name": "Shyam Group",
  "image": "http://shyamgroups.co.in/documents/logo.png",
  "@id": "",
  "url": "http://www.shyamgroups.co.in",
  "telephone": "9725045819",
  "priceRange": "500000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "T-5, 3rd Floor, Gokul Complex, Drive-In Road, Opp. Swaninarayan Gurukul Temple, Gurukul",
    "addressLocality": "Ahmedabad",
    "postalCode": "380052",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 23.0462401,
    "longitude": 72.53408760000002
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ],
    "opens": "10:00",
    "closes": "19:00"
  },
  "sameAs": [
    "https://www.facebook.com/shyamgroups",
    "https://x.com/shyamgroups",
    "https://www.linkedin.com/company/shyam-infrazone-private-limited"
  ]
}
</script>
<script>
let formSubmitted = false;

document.getElementById("modalForm").addEventListener("submit", function (e) {
    // if (formSubmitted) {
    //     e.preventDefault();
    //     return false;
    // }

    // formSubmitted = true;

    // const btn = this.querySelector('input[type="submit"]');
    // if (btn) {
    //     btn.disabled = true;
    //     btn.value = "Submitting...";
    // }
});
function verifyCaptcha(response) {
    $("#hiddenRecaptcha").val(response);
    $("#modalForm").validate().element("#hiddenRecaptcha"); // Trigger re-validation
}

$(document).ready(function() {
    // Setup form validation
    $("#modalForm").validate({
        ignore: [],
        rules: {
            name: {
                required: true,
                blockName: true,
                englishOnly: true,
                minlength: 2,
                maxlength: 50,
                lettersonly: true
            },
            email: {
                required: true,
                email: true,
                noSpamEmail: true,
                englishOnly: true
            },
            phone: {
                required: true,
                validPhone: true,
                englishOnly: true,
                number:true,
            },
            city: {
                required: true
            },
            comment: {
                englishOnly: true,
                maxlength: 300
            },
            hiddenRecaptcha: {
                required: function() {
                    // Returns true (required) if the captcha is empty
                    return grecaptcha.getResponse() === "";
                }
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Name must be at least 2 characters",
                maxlength: "Name cannot be longer than 50 characters",
                lettersonly: "Only letters and spaces are allowed"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address",
                noSpamEmail: "This email address is not allowed"
            },
            phone: {
                required: "Please enter your phone number"
            },
            city: {
                required: "Please enter your city"
            },
            comment: {
                maxlength: "Message cannot be longer than 300 characters"
            },
             hiddenRecaptcha: "Please complete the reCAPTCHA verification."
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            if (element.attr("name") === "g-recaptcha-response") {
                error.insertAfter(".g-recaptcha"); // show error below CAPTCHA
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function(element) {
            $(element).addClass('is-valid').removeClass('is-invalid');
        },
        submitHandler: function(form) {
            if (!formSubmitted) {
                formSubmitted = true;

                // Disable submit button and change text
                const btn = $(form).find('input[type="submit"]');
                if (btn.length) {
                    btn.prop('disabled', true);
                    btn.val('Submitting...');
                }

                form.submit(); // submit form normally
            }
        }
    });

});
</script>
