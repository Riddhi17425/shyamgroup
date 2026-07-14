<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="header">MAIN NAVIGATION</li>
        
        <li>
          <a href="<?php echo base_url(); ?>welcome">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview"> 
          <a href="#">
            <i class="fa fa-share"></i> <span>Dholera News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>blog/add_form"><i class="fa fa-edit"></i> Add News </a></li>
            <li><a href="<?php echo base_url(); ?>blog"><i class="fa fa-table"></i> News List </a></li>
          </ul>
        </li>

        <li class="treeview"> 
          <a href="#">
            <i class="fa fa-share"></i> <span>Media News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>media/add_form"><i class="fa fa-edit"></i> Add News </a></li>
            <li><a href="<?php echo base_url(); ?>media"><i class="fa fa-table"></i> News List </a></li>
          </ul>
        </li>

        <li class="treeview"> 
          <a href="#">
            <i class="fa fa-share"></i> <span>Testimonials</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>testimonial/add_form"><i class="fa fa-edit"></i> Add Testimonial </a></li>
            <li><a href="<?php echo base_url(); ?>testimonial"><i class="fa fa-table"></i> Testimonial List </a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url(); ?>contact">
            <i class="fa fa-share"></i> <span>Contact List</span>
          </a>
        </li>

        <li class="treeview"> 
          <a href="#">
            <i class="fa fa-share"></i> <span>Awards</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>awards/add_form"><i class="fa fa-edit"></i> Add Awards </a></li>
            <li><a href="<?php echo base_url(); ?>awards"><i class="fa fa-table"></i> Awards List </a></li>
          </ul>
        </li>


        <!--<li>-->
        <!--  <a href="<?php echo base_url(); ?>newsletter">-->
        <!--    <i class="fa fa-share"></i> <span>Newsletter List</span>-->
        <!--  </a>-->
        <!--</li>-->

        <li>
          <a href="<?php echo base_url(); ?>changepassword">
            <i class="fa fa-share"></i> <span>Change Password</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>