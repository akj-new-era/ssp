
<?php $title = 'Home'; include 'header.php'; ?>
<style>
*{
  font-size: 18px;
}
@media (max-height:700px){
.carousel-inner{
  min-height:230px;
  margin-bottom:30px;
}
.mobile-only.btn{
  position:relative;
  top:28px; 
}
.carousel-indicators{
  bottom:20px;
}

}

</style>
  <!-- <section class="landing">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="land_text">
            <h3>IIT Bombay</h3>
            <h2>Student Satellite Program</h2>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="landing">
    <img src="img/back01.png" id="bg" />
    <img src="img/sat3.png" id="moon" />
    <h2 id="text">IIT Bombay<br>Student Satellite Program</h2>
  </section>

  <section class="land_about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section_title">About Us</div>
          <div class="section_content">
            <p>The IIT Bombay Student Satellite Program (IITBSSP) is a landmark project taken up by IIT Bombay students. The vision of this program is to make IIT Bombay a respected Centre of Excellence in Satellite and Space Technology in the world. An interdisciplinary team of 70+ students from the institute, across disciplines, are engaged in projects ranging from the design of space systems of various form factors to development of payloads.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="land_slider">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example" data-slide-to="1"></li>
        <li data-target="#carousel-example" data-slide-to="2"></li>
        <li data-target="#carousel-example" data-slide-to="3"></li>
        <li data-target="#carousel-example" data-slide-to="4"></li>
        <li data-target="#carousel-example" data-slide-to="5"></li>
        <li data-target="#carousel-example" data-slide-to="6"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/pratham.jpg" />
          <div class="carousel-caption" style="text-shadow:none;">
            <h3>Pratham</h3>
            <p style="font-color:black;">India’s first satellite designed completely by students. Launched onboard ISRO’s PSLV C-35 on 26 September 2016. Beacon signal received on 28th September at IITB’s own ground station. Took IIT Bombay into the elite space club and became the ‘First Step Towards Infinity’.<br><br>
            <a href="pratham.php" class="btn btn-success">Know More >></a></p>
          </div>
          <a href="pratham.php" class="mobile-only btn btn-success">Know More >></a>
        </div>
        <div class="item">
          <img src="img/about/advitiy/advitiy_carousel.png" />
          <div class="carousel-caption"style="text-shadow:none;">
            <h3>Advitiy</h3>
            <p>After the successful launch of Pratham, Advitiy was the second satellite under the Student Satellite Programme of IIT Bombay. The name Advitiy means 'Unparalleled' or 'Unprecedented'. The aim was to make it a robust, reliable and repeatable satellite bus.<br><br>
            <a href="advitiy.php" class="btn btn-success">Know More >></a></p>
          </div>
          <a href="advitiy.php" class="mobile-only btn btn-success">Know More >></a>
        </div>
        <div class="item">
          <img src="img/about/sanket/sanket_4.jpg" />
          <div class="carousel-caption"style="text-shadow:none;">
            <h3>Sanket</h3>
            <p>"Sanket", literally meaning "signal" in Sanskrit, is the name of the indigenously developed Antenna Deployment System (ADS) which is used to transmit signals from the satellite to the Earth.<br><br>
            <a href="sanket.php" class="btn btn-success">Know More >></a></p>
          </div>
          <a href="sanket.php" class="mobile-only btn btn-success">Know More >></a>
        </div>
        <div class="item">
          <img src="img/about/stads/stads_carousel.jpg" />
          <div class="carousel-caption"style="text-shadow:none;">
            <h3>Star Tracker based Attitude Determination System</h3>
            <p>A device to measure the attitude (orientation) of the satellites in space. Makes use of the distance from the stars to estimate the attitude over the traditional methods that involve a combination of the sun sensor and magnetometer.<br><br>
            <!-- The greater number of data points make it the most accurate way to measure the attitude of a satellite. -->
            <a href="stads.php" class="btn btn-success">Know More >></a></p>
          </div>
          <a href="stads.php" class="mobile-only btn btn-success">Know More >></a>
        </div>
        <div class="item">
          <img src="img/about/rvd/rvd_carousel.jpg" />
          <div class="carousel-caption"style="text-shadow:none;">
            <h3>Rendezvous and Docking</h3>
            <p>A mission aiming to pioneer a simulation framework for Guidance, Navigation and Control for autonomous rendezvous and docking of one 6U CubeSat, called the chaser, to another, called the target. Something pretty similar to the docking mechanism in the movie Interstellar.<br><br>
            <a href="rvd.php" class="btn btn-success">Know More >></a></p>
          </div>
          <a href="rvd.php" class="mobile-only btn btn-success">Know More >></a>
        </div>
        
        <div class="item">
          <img src="img/about/glee/glee_carousel.jpg" />
          <div class="carousel-caption"style="text-shadow:none;">
            <h3>The Great Lunar Expedition for Everyone</h3>
            <p>A mission aimed at conducting scientific experiments on the surface of the Moon using hundreds of LunaSats (Chipsats of size 5cm x 5cm) built by students from all over the world. Will be functional for 5 earth days, data to be relayed back to the Earth and used further for scientific explorations.<br><br>
            <a href="glee.php" class="btn btn-success">Know More >></a></p>
          </div>
          <a href="glee.php" class="mobile-only btn btn-success">Know More >></a>
        </div>
        <div class="item">
          <img src="img/about/ham_carousel.jpg" />
          <div class="carousel-caption"style="text-shadow:none;">
            <h3>Ham Radio Club & Ground Station Segment</h3>
            <p>Building the amateur radio community in IITB. Works on several aspects of wireless technology from making antennas to receiving signals from the International Space Station. Handles the ground station segment of the Student Satellite Team and works towards building a good network of ground stations all over the country.<br><br>
            <a href="ham.php" class="btn btn-success">Know More >></a></p>
          </div>
          <a href="ham.php" class="mobile-only btn btn-success">Know More >></a>
        </div>
        
      </div>
      <a class="left carousel-control" href="#carousel-example" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </section>

  <section class="land_logo">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-2 col-sm-3">
          <div class="logo_image">
            <img src="img/satlogo.png" class="img-responsive" style="width:70%;">
          </div>
        </div>
        <div class="col-xs-12 col-md-10 col-sm-9">
          <div class="logo_content">
            <p style="font-size:18px;">The IITBSSP patch depicts the Earth and India. That pale blue dot, the cradle of humanity where we come from - a point of reference, for literal and moral navigation. Representing the roots without which there would be no rockets. The (cube) satellite represents our own efforts to develop technology, helping illuminate the unknown dark voids - तमसो मा ज्योतिर्गमय, by generating scientific knowledge - ज्ञानम् परमम् ध्येयम्. The torch is passed on, through the years, and through various team members, in an endless endeavour of "आदिश् अनंत्य", or "aiming toward infinity".</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="land_contact" id="contactUs">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section_title">Reach Us</div>
        </div>
        <div class="col-xs-6 col-sm-3">
          <div class="social-links">
            <img src="img/satlogo.png" class="img-responsive" style="width:30%;">
            <p><b>Student Satellite Program</b></p>
            <p>IIT Bombay</p>
            <p><a href="mailto:iitbssp@iitb.ac.in" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;iitbssp@iitb.ac.in</a></p>
            <ul>
              <li><a href="https://twitter.com/satlabiitb" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="https://www.facebook.com/iitbssp" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://instagram.com/iitbssp" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/company/advitiy-iit-bombay-student-satellite/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3">
          <div class="quick-links">
            <h4>Quick Links</h4>
            <ul>
            <li><a href="ham.php">Ham Radio Club and Ground Station Segment</a></li>
              <li><a href="https://www.aero.iitb.ac.in/satelliteWiki/index.php/Satellite_101" target="_blank">Satellite101 Wiki</a></li>
              
              <li><a href="pratham.php">Pratham</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="blogs.php">Blogs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="tab-wrap">
            <div class="media">  

              <div class="parrent pull-left">
                  <ul class="nav nav-tabs nav-stacked">
                    <li class="active"><a href="#tab1" data-toggle="tab">Current Project Managers</a> 
                    <li class=""><a href="#tab2" data-toggle="tab">Current Faculty Advisors</a></li>
                    <li class=""><a href="#tab3" data-toggle="tab">Current Faculty Mentors</a></li>  
        			      <li class=""><a href="#tab4" data-toggle="tab">Ex-Project Managers</a></li>
                    <li class=""><a href="#tab5" data-toggle="tab">Ex-Faculty Advisors</a></li>
                  </ul>
              </div>

              <div class="parrent media-body">
                <div class="tab-content">

                  <div class="tab-pane active in" id="tab1">
                    <div class="media">
                      <div class="media-body">
                        <p align="justify">
                          <span style="font-weight:bold;">Shaun Zacharia | Pranjal Gupta</span><br/>
                          Project Managers<br />
                          IIT Bombay Student Satellite Program<br />
                          Office: +91-22-2576-4147<br />
                          Email:- iitbssp@iitb.ac.in <br/>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="tab2">
                    <div class="media">
                      <div class="media-body">
                        <b>Prof. Prabhu Ramachandran</b><br>Assistant Professor<br>
                        Department of Aerospace Engineering,<br>
                        Indian Institute of Technology Bombay<br><br>

                        <b>Prof. Arnab Maity</b><br>Assistant Professor<br>
                        Department of Aerospace Engineering,<br>
                        Indian Institute of Technology Bombay<br><br> 

                    
                        <b>Prof. Varun Bhalerao</b><br>Assistant Professor<br>
                        Department of Physics,<br>
                        Indian Institute of Technology Bombay<br><br>               
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="tab3">
                    <div class="media">
                      <div class="media-body">
                        <b><a href="https://www.ee.iitb.ac.in/web/faculty/homepage/rajeshzele">Prof. Rajesh H. Zele</a></b><br>
                        Department of Electrical Engineering,<br>
                        Indian Institute of Technology Bombay<br><br>
                        <b><a href="http://www.sc.iitb.ac.in/~srikant/dokuwiki/doku.php">Prof. Srikant Sukumar</a></b><br>Associate Professor<br>
                        Systems and Controls Engineering,<br>
                        Indian Institute of Technology Bombay<br><br>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="tab4">
                  	<div class="media">
                      <div class="media-body">
                        <b>Sanskriti Bhansali</b> &#60;sanskritibhansali@gmail.com&#62; <br/>
                        <b>Aniruddha Ranade</b>  &#60;aniruddha.ranade.iitb@gmail.com&#62; <br/>
                  	  	<b>Anmol Sikka</b>  &#60;anmolsikka09@gmail.com&#62; <br/>
                      	<b>Yash Sanghvi</b>  &#60;sanghviyash7@gmail.com&#62; <br/>
            						<b>Ratnesh Mishra</b> &#60;ratnesh1607@gmail.com&#62; <br/>
            						<b>Manvi Dhawan</b> &#60;manvidhawan1993@gmail.com&#62;<br/>                  
            						<b>Shantanu Shahane</b> &#60;shahaneshantanu@gmail.com&#62;<br/>
            						<b>Tushar Jadhav</b> &#60;tusharj.iitb@gmail.com&#62;<br/>
            						<b>Sanyam Mulay</b> &#60;sanyamsmulay@gmail.com&#62;<br/>
            						<b>Jhonny Santosh Jha</b> &#60;jhajhonny@gmail.com&#62;<br/>
            						<b>Saptarshi Bandyopadhyay(Co-founder)</b><br/>&#60;saptarshi.bandyopadhyay@gmail.com&#62;<br/>
            						<b>Shashank Tamaskar(Co-founder)</b><br/>&#60;tamaskar@gmail.com&#62;<br/>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="tab5">
                    <div class="media">
                      <div class="media-body">
                          <b>Prof. K. Sudhakar</b><br><br>
                          <b>Prof. Hemendra Arya</b><br>Assistant Professor<br>
                          Department of Aerospace Engineering,<br>
                          Indian Institute of Technology Bombay<br><br>
                          <b>Prof. Prasanna M. Mujumdar</b><br>Assistant Professor<br>
  	                      Department of Aerospace Engineering,<br>
  	                      Indian Institute of Technology Bombay<br><br>
                      </div>
                    </div>
                  </div>
          
                </div> <!--/.tab-content-->  
              </div> <!--/.media-body--> 
            </div> <!--/.media-->     
          </div><!--/.tab-wrap-->      
        </div><!--/.col-sm-6-->

      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>
