<?php $title = 'Timeline'; include 'header.php'; ?>

<section class="about-head">
    <div class="container-fluid">
        <div class="about-title">
            <h1>Timeline</h1>
        </div>
    </div>
</section>

<style>
.dropbtn {
  background-color: #212a3a;
  color: white;
  padding: 16px;    
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* @media (max-width: 800px) {
  .dropbtn{
    right: 0;
}
.dropdown{
    position: absolute;
}
} */

.dropbtn:hover, .dropbtn:focus {
  background-color: #212a3a;
}

.dropdown {
  position: fixed;
 display: inline-block;
}

.dropdown-content {
  display: none;
  position: relative;
  background-color: #f1f1f1;
  min-width: 160px;
  max-height: 300px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown a:hover {background-color: #ddd;
color: #212a3a;
text-decoration: none;
}

.show {display: block;}
</style>

  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


<style>
    body {
	color: #768390;
	background: #fff;
	font-family: 'Montseerat';
	padding: 0;
    animation: gradient 15s ease infinite;
	-webkit-font-smoothing: antialiased;
    background: rgb(255,255,255);
    /* background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(178,206,242,1) 85%, rgba(178,206,242,1) 100%); */
    /* background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(208,229,255,1) 80%, rgba(208,229,255,1) 100%); */
    /* background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(225,238,255,1) 65%, rgba(225,243,255,1) 100%); */
}
 h1, h2, h3, h4, h5, h6 {
	 color: #3d4351;
	 margin-top: 0;
}
 a {
	 color: #337AB7;
}
 a:hover {
	 color: #337AB7;
	 text-decoration: underline;
}
 .example-header {
	 background: #3d4351;
	 color: #fff;
	 font-weight: 300;
	 padding: 3em 1em;
	 text-align: center;
}
 .example-header h1 {
	 color: #fff;
	 font-weight: 300;
	 margin-bottom: 20px;
}
 .example-header p {
	 font-size: 12px;
	 text-transform: uppercase;
	 letter-spacing: 3px;
	 font-weight: 700;
}
 .container-fluid .row {
	 padding: 0 0 4em 0;
}
 .container-fluid .row:nth-child(even) {
	 background: #f1f4f5;
}
 .example-title {
	 text-align: center;
	 margin-bottom: 60px;
	 padding: 3em 0;
	 border-bottom: 1px solid #e4eaec;
}
 .example-title p {
	 margin: 0 auto;
	 font-size: 16px;
	 max-width: 400px;
}
/* /================================== TIMELINE ==================================/ */
/* /-- GENERAL STYLES ------------------------------/ */
 .timeline {
	 line-height: 1.4em;
	 list-style: none;
	 margin: 0;
	 padding: 0;
	 width: 100%;
}
 .timeline h1, .timeline h2, .timeline h3, .timeline h4, .timeline h5, .timeline h6 {
	 line-height: inherit;
}
/* /----- TIMELINE ITEM -----/ */
 .timeline-item {
	 padding-left: 40px;
	 position: relative;
}
 .timeline-item:last-child {
	 padding-bottom: 0;
}
/* /----- TIMELINE INFO -----/ */
 .timeline-info {
	 font-size: 20px;
	 font-weight: 700;
	 letter-spacing: 3px;
	 margin: 0 0 0.5em 0;
	 /* text-transform: uppercase; */
	 white-space: nowrap;
     /* font-family: 'Montserrat'; */
  /* font-style: normal; */
  font-weight: 600;
  color: #212a3a;
}
/* /----- TIMELINE MARKER -----/ */
 .timeline-marker {
	 position: absolute;
	 top: 0;
	 bottom: 0;
	 left: 0;
	 width: 15px;
}
 .timeline-marker:before {
	 background:#212a3a;
	 border: 3px solid transparent;
	 border-radius: 100%;
	 content: "";
	 display: block;
	 height: 15px;
	 position: absolute;
	 top: 4px;
	 left: 0;
	 width: 15px;
	 transition: background 0.3s ease-in-out, border 0.3s ease-in-out;
}
 .timeline-marker:after {
	 content: "";
	 width: 3px;
	 background: #212a3a;
	 display: block;
	 position: absolute;
	 top: 24px;
	 bottom: 0;
	 left: 6px;
}
 .timeline-item:last-child .timeline-marker:after {
	 content: none;
}
 .timeline-item:not(.period):hover .timeline-marker:before {
	 /* /background: transparent;/ */
	 border: 3px solid rgb(87, 75, 75);
}
/* /----- TIMELINE CONTENT -----/ */
 .timeline-content {
	 padding-bottom: 40px;
     color: #212a3a;
    font-family: 'Montserrat';
font-style: normal;
font-weight: normal;
font-size: 18px;
}
 .timeline-content p:last-child {
	 margin-bottom: 0;
}
/* /----- TIMELINE PERIOD -----/ */
 .period {
	 padding: 0;
}
 .period .timeline-info {
	 display: none;
}

.timeline-title {
    font-size: 30px;
    font-family: RocknRoll One;
    color: #212a3a;
    text-transform: uppercase;
}

 .period .timeline-marker:before {
	 background: transparent;
	 content: "";
	 width: 15px;
	 height: auto;
	 border: none;
	 border-radius: 0;
	 top: 0;
	 bottom: 30px;
	 position: absolute;
	 border-top: 3px solid rgb(87, 75, 75);
	 border-bottom: 3px solid rgb(87, 75, 75);
}
 .period .timeline-marker:after {
	 content: "";
	 height: 32px;
	 top: auto;
}
 .period .timeline-content {
	 padding: 40px 0 70px;
}
 .period .timeline-title {
	 margin: 0;
}
/* /---------------------------------------------- MOD: TIMELINE SPLIT ----------------------------------------------/ */
 @media (min-width: 768px) {
	 .timeline-split .timeline, .timeline-centered .timeline {
		 display: table;
	}
	 .timeline-split .timeline-item, .timeline-centered .timeline-item {
		 display: table-row;
		 padding: 0;
	}
	 .timeline-split .timeline-info, .timeline-centered .timeline-info, .timeline-split .timeline-marker, .timeline-centered .timeline-marker, .timeline-split .timeline-content, .timeline-centered .timeline-content, .timeline-split .period .timeline-info, .timeline-centered .period .timeline-info {
		 display: table-cell;
		 vertical-align: top;
	}
	 .timeline-split .timeline-marker, .timeline-centered .timeline-marker {
		 position: relative;
	}
	 .timeline-split .timeline-content, .timeline-centered .timeline-content {
		 padding-left: 30px;
	}
	 .timeline-split .timeline-info, .timeline-centered .timeline-info {
		 padding-right: 30px;
	}
	 .timeline-split .period .timeline-title, .timeline-centered .period .timeline-title {
		 position: relative;
		 left: -45px;
	}
}
/* /---------------------------------------------- MOD: TIMELINE CENTERED ----------------------------------------------/ */
 @media (min-width: 992px) {
	 .timeline-centered, .timeline-centered .timeline-item, .timeline-centered .timeline-info, .timeline-centered .timeline-marker, .timeline-centered .timeline-content {
		 display: block;
		 margin: 0;
		 padding: 0;
	}
	 .timeline-centered .timeline-item {
		 padding-bottom: 40px;
		 overflow: hidden;
	}
	 .timeline-centered .timeline-marker {
		 position: absolute;
		 left: 50%;
		 margin-left: -7.5px;
	}
	 .timeline-centered .timeline-info, .timeline-centered .timeline-content {
		 width: 50%;
	}
	 .timeline-centered > .timeline-item:nth-child(odd) .timeline-info {
		 float: left;
		 text-align: right;
		 padding-right: 30px;
	}
	 .timeline-centered > .timeline-item:nth-child(odd) .timeline-content {
		 float: right;
		 text-align: left;
		 padding-left: 30px;
	}
	 .timeline-centered > .timeline-item:nth-child(even) .timeline-info {
		 float: right;
		 text-align: left;
		 padding-left: 30px;
	}
	 .timeline-centered > .timeline-item:nth-child(even) .timeline-content {
		 float: left;
		 text-align: right;
		 padding-right: 30px;
	}
	 .timeline-centered > .timeline-item.period .timeline-content {
		 float: none;
		 padding: 0;
		 width: 100%;
		 text-align: center;
	}
	 .timeline-centered .timeline-item.period {
		 padding: 50px 0 90px;
	}
	 .timeline-centered .period .timeline-marker:after {
		 height: 30px;
		 bottom: 0;
		 top: auto;
	}
	 .timeline-centered .period .timeline-title {
		 left: auto;
	}
}
/* /---------------------------------------------- MOD: MARKER OUTLINE ----------------------------------------------/ */
 .marker-outline .timeline-marker:before {
	 background: transparent;
	 border-color: #ff6b6b;
}
 .marker-outline .timeline-item:hover .timeline-marker:before {
	 background: #ff6b6b;
}
 
</style>


<div class="container-fluid">




<div class="row example-centered">
    <div class="dropdown" style="position: sticky; top:20%;">
    <button onclick="myFunction()" class="dropbtn">Choose Year</button>

  <div id="myDropdown" class="dropdown-content">
    <a href="#t01">2007</a>
    <a href="#t02">2010</a>
    <a href="#t03">2012</a>
    <a href="#t04">2014</a>
    <a href="#t05">2015</a>
    <a href="#t06">2016</a>
    <a href="#t07">2017</a>
    <a href="#t08">2018</a>
    <a href="#t09">2019</a>
    <a href="#t10">2020</a>
    <a href="#t11">2021</a>
  </div>
</div>

        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
            <ul class="timeline timeline-centered">

            <li class="timeline-item period" id="t01">
            <!-- <div class="timeline-info"></div>
                    <div class="timeline-marker"></div> -->
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2007</h2>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>August, 2007</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Concept feasibility proved to IITB<br>
                          <br>Conceptual design phase finished<br>
                          <br>Signed MOU with ISRO</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>September, 2007</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Preliminary design phase finished</p>
                    </div>
                </li>
                
                <li class="timeline-item period" id="t02">
                <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2010</h2>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>August, 2010</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Detailed Design Phase.</p>
                    </div>
                </li>

                <li class="timeline-item period" id="t03">
                <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2012</h2>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>April, 2012</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Performance Verification Review</p>
                    </div>
                </li>

                <li class="timeline-item period" id="t04">
                <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2014</h2>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>March, 2014</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>MOU extension</p>
                    </div>
                </li>
                
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>April, 2014</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Status Update meeting at ISRO.</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>December, 2014</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Themal Stimulations</p>
                    </div>
                </li>

                <li class="timeline-item period" id="t05">
                <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2015</h2>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>January, 2015</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>SNAP<br><br>Autonomous Ground-Station</p>
                    </div>
                </li>
                
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>February, 2015</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Integration Sequence and testing</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>November, 2015</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>QM testing at ISRO</p>
                    </div>
                </li>

                <li class="timeline-item period" id="t06">
                <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2016</h2>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>February, 2016</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Critical design review at ISRO</p>
                    </div>
                </li>
                
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>May, 2016</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>FM integration at ISRO</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>June, 2016</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>FM testing at ISRO</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>July, 2016</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Pre-shipment review</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>September, 2016</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Activities at SHAR<br><br>Launch from SHAR</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>October, 2016</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Beacon signal stopped<br><br>Post launch review</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>December, 2016</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Beacon signal received again<br><br>Beacon signal stopped</p>
                    </div>
                </li>

                <li class="timeline-item period" id="t07">
                <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2017</h2>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>January, 2017</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Four months completion</p>
                    </div>
                </li>

            <li class="timeline-item period" id="t08">
            <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2018</h2>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>December, 2018</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Ham Radio Club of IIT Bombay integrated with IITBSSP</p>
                    </div>
                </li>
                

                <li class="timeline-item period" id="t09">
                    <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2019</h2>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>May, 2019</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>The study for new missions began </p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>June, 2019</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Decided to participate in GLEE and started its payload study</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>July, 2019</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Two new systems, namely, Sanket and STADS were reviewed and approved by Faculty Advisors</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>September, 2019</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>System analysis and requirements documentation for STADS</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>October, 2019</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Algorithm design for STADS began</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>December, 2019</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Official logo of Sanket designed<br><br>
                          First prototype of Sanket developed<br><br>
                          Proposal of Sanket sent to ISRO regarding PSLV stage 4 technology demonstration experiments</p>
                    </div>
                </li>

                <li class="timeline-item period" id="t10">
                    <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2020</h2>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>January, 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Study began on electronics and communication aspects of GLEE<br><br>
                          STADS began implementing & testing algorithms and the development of structures
                          </p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>April, 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>HRC started the weekly blog series ‘Transmission Tales’ on WordPress</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>May, 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>HRC started its Instagram account (2nd May)<br><br>
                        Algorithm design for STADS finalised 
                        </p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>July, 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Worked on CDR (conceptual design review) for STADS</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>August, 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Online satellite tracking session conducted by HRC (29th August)</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>September, 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Started working on interfacing of components for the two major payloads (seismology and radio astronomy) for GLEE<br><br>
                            Sanket’s first Preliminary Design Review (PDR) formulated<br><br>
                            HRC started exploring amateur radio astronomy 
                            </p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>October, 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>GLEE published a paper: “Lunar Exploration through ChipSat” in the 71st International Astronautical Congress<br>
                        <br> 
                        HRC published an article in Citizens Matter (online magazine)
                        </p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>November, 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Amateur radio astronomy talk (speaker Prof. H R Soni) conducted by HRC (1st November)</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>December, 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Sanket published a paper “Sanket: Technology Demonstration of Antenna Deployment System on PSLV Stage-4” at National Conference on Small Satellite Technology and Applications <br><br>
                        STADS published “An Approach to Star Tracker Design for Nano-Satellite Applications” at NCSSTA 2020 (National Conference on Small Satellite Technology and Applications)<br><br>
                        ‘Track the ISS from home’ event organized by HRC <br><br>
                        HRC detected the occurrence of Geminids meteor shower
                        </p>
                    </div>
                </li>

                <li class="timeline-item period" id="t11">
                    <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Year 2021</h2>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>January, 2021</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Basic PCB design done, backpropagation techniques for seismology payload studied for GLEE<br><br>
                        ‘How things work SSTV’ event conducted by HRC <br><br>
                        Ground Station Workshop conducted by HRC<br>
                        </p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>February, 2021</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>First prototype of STADS developed</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>March, 2021</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Radiation detection payload study began by GLEE<br><br>
                          Online satellite tracking session conducted by HRC
                          </p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>April, 2021</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Started testing of Sanket (drafting the test plan, collecting equipment required)</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>May, 2021</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Review meet with faculty advisors for STADS</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>June, 2021</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Physical testing of component interfacing began for GLEE</p>
                    </div>
                </li>

                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>July, 2021</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <p>Second update of CDR (Conceptual Design Review) for STADS</p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

<script src="https://use.typekit.net/bkt6ydm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
