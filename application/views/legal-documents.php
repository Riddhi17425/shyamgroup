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
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
</head>

<body>

<div class="body-inner">
  <?php include 'include/top-nav.php'; ?>
  <?php include 'include/header.php'; ?>
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/legel-documents.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left">Legal Document</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li>Legal Document</li>
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
        <div  class="col-md-2 col-xs-12">
            <h3 class="call-to-action-title">Legal Document</h3>
        </div>
        <div><p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Legal Document</p> </div>
        <div class="col-md-2 col-xs-12">
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
        <div class="col-md-12">


          <div class="Legal_pdf_main">
              <div class="row text-center mb-5">
                 <h2 class="border-title">Legal Documents</h2>
              </div>
              <div class="row">
                  <div class="col-sm-3 Legal_pdf_card">
                      <a class="Legal_pdf" target="_new" href="<?php echo base_url(); ?>documents/pdf/pdf1.pdf"><img src="<?php echo base_url(); ?>images/new_images/pdf-icon.png" alt="image"> Final Proposed Land Use Plan</a>
                  </div>
                  <div class="col-sm-3 Legal_pdf_card">
                      <a class="Legal_pdf" target="_new" href="<?php echo base_url(); ?>documents/pdf/pdf2.pdf"><img src="<?php echo base_url(); ?>images/new_images/pdf-icon.png" alt="image"> DP Report 1</a>
                  </div>
                  <div class="col-sm-3 Legal_pdf_card">
                       <a class="Legal_pdf" target="_new" href="<?php echo base_url(); ?>documents/pdf/pdf3.pdf"><img src="<?php echo base_url(); ?>images/new_images/pdf-icon.png" alt="image"> DP Report 2 – GDCR</a>
                  </div>
                  <div class="col-sm-3 Legal_pdf_card">
                      <a class="Legal_pdf" target="_new" href="<?php echo base_url(); ?>documents/pdf/pdf4.pdf"><img src="<?php echo base_url(); ?>images/new_images/pdf-icon.png" alt="image"> DP Sanction Notification</a>
                  </div>
                   <div class="col-sm-3 Legal_pdf_card">
                     <a class="Legal_pdf" target="_new" href="<?php echo base_url(); ?>documents/pdf/pdf5.pdf"><img src="<?php echo base_url(); ?>images/new_images/pdf-icon.png" alt="image"> Annual Report-DSIRDA 2022-23</a>
                  </div>
              </div>
          </div>


          <!--<?php foreach ($tbl_projects_final as $projects_final_list): ?>-->
          <!--<table align="center" cellpadding="0" cellspacing="0" style="text-align:center;border:1px solid #737988;width: 100%;">-->
          <!--  <thead style="border: 1px solid #737988; background: #f67d36; color: #fff;">-->
          <!--    <tr>-->
          <!--      <td height="35" colspan="2" align="center" valign="middle"><strong style="font-size: 20px"> <?php echo $projects_final_list['name'] ?> </strong></td>-->
          <!--      <td height="35" colspan="2" align="center" valign="middle"><strong style="font-size: 20px">Files</strong></td>-->
          <!--    </tr>-->
          <!--  </thead>-->
          <!--  <br>-->
          <!--  <?php foreach ($tbl_projects_documents_final[$projects_final_list['id']] as $projects_documents_final_list): ?>-->
          <!--  <tbody style="border: 1px solid #737988;">-->
          <!--    <tr>-->
          <!--      <td height="35" colspan="2" align="center" valign="middle"><strong><?php echo $projects_documents_final_list['documents_name']; ?></strong></td>-->
          <!--      <td height="35" colspan="2"><?php if ($projects_documents_final_list['documents_name'] == "") {?>-->
          <!--        <a href="#"><img src="<?php echo base_url(); ?>documents/pdf.png" alt="image"></a>-->
          <!--        <?php } else {?>-->
          <!--        <a target="_new" href="<?php echo base_url(); ?>documents/<?php echo $projects_documents_final_list['file']; ?>">-->
          <!--        <center>-->
          <!--        <img src="<?php echo base_url(); ?>documents/pdf.png" alt="image"></a>-->
          <!--        <?php }?></td>-->
          <!--    </tr>-->
          <!--  </tbody>-->
          <!--  <?php endforeach; ?>-->
          <!--</table>-->
          <!--<?php endforeach; ?>-->
        </div>

      </div>
    </div>
    <!-- Container end -->
  </section>
  <!-- Main container end -->

  <?php include 'include/footer.php'; ?>

  <!-- Javascript Files
	================================================== -->

  <?php include 'include/js.php'; ?>
</div>
<!-- Body inner end -->
</body>
</html>