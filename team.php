<?php $title = 'Current Team'; include 'header.php'; ?>

<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link rel="stylesheet" href="css/flipclock.css">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href="./css/timeline.css" rel="stylesheet" type="text/css">
<link href="./css/team_members.css" rel="stylesheet" type="text/css">
<!-- Social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110447978-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-110447978-1');
</script>
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- main css -->
<link rel="stylesheet" href="css/style.css">
<!--<link rel="stylesheet" href="team/css/cards.css">-->
<link rel="stylesheet" href="css/team.css">
<!-- <link rel="stylesheet" href="css/stylesheet.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.portfolio_area .filters ul li:hover,
.portfolio_area .filters ul li.active {
    color: blue;
    font-size: 20px;
}

.portfolio_area .filters ul li {
    display: inline-block;
    margin-right: 50px;
    font-size: 15px;
    font-weight: 500;
    text-transform: uppercase;
    color: #222222;
    cursor: pointer;
    -webkit-transition: all 0.4s ease 0s;
    -moz-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
    font-family:'RocknRoll One';
}

*,
*:before,
*:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

user agent stylesheet li {
    display: list-item;
    text-text-align: -webkit-match-parent;
}

user agent stylesheet ul {
    list-style-type: disc;
}

.portfolio-items,
.portfolio-filter {
    list-style: none outside none;
    margin: 0 0 40px 0;
    padding: 0;
}

.filters {
    text-align: center;
}

hr {
    width: 100%;
    border: none;
    height: 2px;
    /* Set the hr color */
    color: #333;
    /* old IE */
    background-color: #333;
    /* Modern Browsers */
}

@media (max-width: 700px){
    .portfolio_area .filters ul li{
        display:block;
        padding-bottom:10px;
    }
}
</style>

<section class="about-head">
    <div class="container-fluid">
        <div class="about-title">
            <h1  style="font-family:'Montserrat';"> CURRENT TEAM</h1>
        </div>
    </div>
</section>

<br>
<br>
<br>

<!--================Start Portfolio Area =================-->
<section class="portfolio_area" id="portfolio">
    <div class="container">
        <div class="filters portfolio-filter">
            <ul>
                <li class="active" data-filter="*">all</li>
                <li data-filter=".Sanket">Sanket</li>
                <li data-filter=".STADS">STADS</li>
                <li data-filter=".GLEE">GLEE</li>
                <li data-filter=".HRC">HRC & GSS</li>
                <li data-filter=".RVD">RVD</li>
                <li data-filter=".Nontech">Non-Tech</li>
            </ul>
        </div>

        <div class="filters-content">
            <div class="row portfolio-grid justify-content-center">
                <div class="all center-tile container">
                    <!-- <div class="col-lg-3 col-md-4">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/team/latest/Sanskriti_Bhansali.jpg" "  />
                                        onclick="enlargeImg()" id="img45" alt="
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">
                                            <span class="member-name">Sanskriti </span>
                                            <span class="member-name">Bhansali</span>
                                            <span class="member-name">&nbsp;</span>
                                        </h3>
                                        <span class="post">Project Manager (20-21)</span>
                                    </div>
                                    <ul class="social">
                                        <li><a href="https://www.facebook.com/sanskriti0310" class="fa fa-facebook" target="_blank"></a></li>
                                        <li><a href="https://twitter.com/sanskriti88" class="fa fa-twitter" target="_blank"></a></li>
                                        <li><a href="https://www.instagram.com/sanskritibhansali/" class="fa fa-instagram" target="_blank"></a></li>
                                        <li><a href="https://www.linkedin.com/in/sanskriti-bhansali/" class="fa fa-linkedin" target="_blank"></a></li>
                                        <li><a href="#" class="fa fa-link" target="_blank"></a></li>
                                    </ul>
                                </div>
                            </div> -->
                    <div class="col-lg-3 col-md-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/team/latest/Shaun_Zacharia.jpg" alt="" />
                            </div>
                            <div class="team-content " style="text-align:center;">
                                <h3 class="title">
                                    <span class="member-name">Shaun </span>
                                    <span class="member-name">Zacharia</span>
                                    <!--<span class="member-name">&nbsp;</span>-->
                                </h3>
                                <span class="post">Current Project Manager</span>
                            </div>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/shaun.zacharia.77" class="fa fa-facebook"
                                        target="_blank"></a></li>
                                <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                                <!-- <li><a href="https://www.instagram.com/shaun_zac/" class="fa fa-instagram"
                                        target="_blank"></a></li> -->
                                <li><a href="https://www.linkedin.com/in/shaun-zacharia/"
                                        class="fa fa-linkedin" target="_blank"></a></li>
                                <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-4 ">  -->
                    <div class="col-lg-3 col-md-4"> 
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/team/latest/Pranjal_Gupta.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h3 class="title">
                                    <span class="member-name">Pranjal </span>
                                    <span class="member-name">Gupta</span>
                                </h3>
                                <span class="post">Current Project Manager</span>
                                <!--<span class="post">Web Developer</span>-->
                            </div>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/pranjal.gupta.710" class="fa fa-facebook"
                                        target="_blank"></a></li>
                                <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                                <!-- <li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                                <li><a href="http://linkedin.com/in/pranjal-gupta-aa1411192" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                                <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                            </ul>
                        </div>
                    </div>  
                </div>
            </div>

            <div style="padding-top:10px; padding-bottom:10px; background-color:white;">

            </div>
             <!-- Communication Subsystem  -->

            <div class="row portfolio-grid justify-content-center">
                <div class="all subsystem-heading">
                    <h4 style="font-weight:200px; text-decoration:none; font-size:24px; font-family:'RocknRoll One';">COMMUNICATION SUBSYSTEM</h4>
                </div>
            </div>


            <div class="row portfolio-grid justify-content-center">

                <!-- <div class="col-lg-3 col-md-4 all Sanket">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="images/team/latest/Karan_Jagdale.jpg" alt="" />
                                </div>
                                <div class="team-content">
                                    <h3 class="title">
                                        <span class="member-name">Karan </span>
                                        <span class="member-name">Jagdale</span>
                                        <span class="member-name">&nbsp;</span>
                                    </h3>
                                    <span class="post">Web Developer</span>
                                </div>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/karan.jagdale.5/" class="fa fa-facebook" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-twitter" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-instagram" target="_blank"></a></li>
                                    <li><a href="https://www.linkedin.com/in/karan-jagdale-460b49195/" class="fa fa-linkedin" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-link" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div> -->
                <!-- <div class="col-lg-3 col-md-4 all Sanket">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="images/team/latest/Puneet_Shrivas.jpg" alt="" />
                                </div>
                                <div class="team-content">
                                    <h3 class="title">
                                        <span class="member-name">Puneet </span>
                                        <span class="member-name">Shrivas</span>
                                        <span class="member-name">&nbsp;</span>
                                    </h3>
                                    <span class="post">Web Developer</span>
                                </div>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/puneet.shrivas.7/" class="fa fa-facebook" target="_blank"></a></li>
                                    <li><a href="https://twitter.com/ShrivasPuneet" class="fa fa-twitter" target="_blank"></a></li>
                                    <li><a href="https://www.instagram.com/puneet.shrivas/" class="fa fa-instagram" target="_blank"></a></li>
                                    <li><a href="https://www.linkedin.com/in/puneet-shrivas/" class="fa fa-linkedin" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-link" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div> -->
                <div class="col-lg-3 col-md-4 all HRC">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Arpit_Verma.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Arpit </span>
                                <span class="member-name">Verma</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100009854465275" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/arpit_wan_kenobi/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/arpit-verma-32b764194/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Hrithik_Agarwal.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Hrithik </span>
                                <span class="member-name">Agarwal</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/hrithik.agrawal.142" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/hrithik-agrawal-390a851b1/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Akshat_Vira.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Akshat </span>
                                <span class="member-name">Vira</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/akshat.vira.5" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://instagram.com/akshatvira?utm_medium=copy_link" class="fa fa-instagram" target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/akshat-vira-a63588227" class="fa fa-linkedin" target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Vatsal_Kanodia.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Vatsal </span>
                                <span class="member-name">Kanodia</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/vatsal.kanodia" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/vatsal893/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/vatsal-kanodia-469317192/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/vineet_gala.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Vineet </span>
                                <span class="member-name">Gala</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/galavineet" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!-- <li><a href="https://www.instagram.com/vineet.gala" class="fa fa-instagram"
                                    target="_blank"></a></li> -->
                            <li><a href="https://www.linkedin.com/in/vineet-gala-4581b7191" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all HRC">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Vaishnavi_Agarwal.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Vaishnavi </span>
                                <span class="member-name">Gaurav </span>
                                <span class="member-name">Agarwal</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/vaishnavi.agarwal.71868/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <li><a href="https://twitter.com/VaishnaviGaurav " class="fa fa-twitter"
                                    target="_blank"></a></li>
                            <li><a href="https://www.instagram.com/vishu_navi/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/vaishnavi-agarwal-5774321a9/"
                                    class="fa fa-linkedin" target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all HRC">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Anuj_Agrawal.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Anuj S </span>
                                <span class="member-name">Agrawal</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100008234599104" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <li><a href="https://twitter.com/anujsagrawal22?s=09" class="fa fa-twitter"
                                    target="_blank"></a></li>
                            <li><a href="https://www.instagram.com/anuj_22_agrawal/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/anuj-agrawal-a25862194/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Adesh_Yadav.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Adesh </span>
                                <span class="member-name">Yadav</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100005726355835" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/yadavadesh005/" class="fa fa-instagram" target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/adesh-yadav-818586179/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all HRC">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Pawan_Kumar.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Pawan </span>
                                <span class="member-name">Kumar</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100037822874317" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/vayumavlia1.6/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/pawan-mavlia-a748171a9" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all HRC">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/neeraj_prabhu.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Neeraj</span>
                                <span class="member-name">Prabhu</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="#" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/neerajprabhu20/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="http://www.linkedin.com/in/neeraj-prabhu-144a93222" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/utkarsh_jindal.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Utkarsh</span>
                                <span class="member-name">Jindal</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/profile.php?id=100037822874317" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!-- <li><a href="https://www.instagram.com/vayumavlia1.6/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/pawan-mavlia-a748171a9" class="fa fa-linkedin"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all HRC">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/aarya_chaudhari.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Aarya</span>
                                <span class="member-name">Chaudhari</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/aarya.chaudhari.942" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/aarya_972/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/aaryachaudhari/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/shashwat_chakraborty.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Shashwat</span>
                                <span class="member-name">Chakraborty</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/shashwat.chakraborty.1" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!-- <li><a href="https://www.instagram.com/vayumavlia1.6/" class="fa fa-instagram"
                                    target="_blank"></a></li>-->
                            <li><a href="http://linkedin.com/in/shashwat-chakraborty-519ba4221" class="fa fa-linkedin"
                                    target="_blank"></a></li> 
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/ROOMA_SULTANA_SHAIK.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Rooma</span>
                                <span class="member-name">Sultana Shaik</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/roomasultana.shaik" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <li><a href="https://twitter.com/ShaikRooma?t=jgX7yn5b_LWwZvLkC3vOeg&s=09" class="fa fa-twitter" target="_blank"></a></li>
                            <li><a href="https://instagram.com/rooma_shaik?utm_medium=copy_link" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/rooma-sultana-shaik-681116221" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all HRC">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Muskan_Bhutra.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Muskan</span>
                                <span class="member-name">Bhutra</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/muskan.bhutra.7" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/muskan_bhutra/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/muskan-bhutra-363b82221/" class="fa fa-linkedin"
                                    target="_blank"></a></li> 
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/srishti_sharma.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Srishti</span>
                                <span class="member-name">Sharma</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/muskan.bhutra.7" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/srishtis_19/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="http://linkedin.com/in/srishtis19" class="fa fa-linkedin"
                                    target="_blank"></a></li> 
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/user.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Adithya</span>
                                <span class="member-name">Raj Mishra</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/muskan.bhutra.7" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!-- <li><a href="https://www.instagram.com/srishtis_19/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="http://linkedin.com/in/srishtis19" class="fa fa-linkedin"
                                    target="_blank"></a></li>  -->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <!--</div>-->
                <!--Electrical Subsystem-->
                <!--<div class="row portfolio-grid justify-content-center">
                        <div class="all subsystem-heading">
                            <h4>Electrical Subsystem</h4>
                        </div>
                        </div>-->
                <!--<div class="row portfolio-grid justify-content-center">-->
                <div class="all subsystem-heading">
                    <h4 style="font-weight:200px; text-decoration:none; font-size:24px; font-family:'RocknRoll One';">ELECTRICAL SUBSYSTEM</h4>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Aryan_Lall.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Aryan </span>
                                <span class="member-name">Lall</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/aryan.lall.9" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/aryan_lall/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/aryan-lall-77038a168/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <li><a href="http://aryanlall11.github.io/" class="fa fa-link" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images//team/latest/Rateesh_Sabde.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Rateesh </span>
                                <span class="member-name">Sabde</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/rateesh.sabde/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/rateeshsabde/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/rateesh-sabde-828b51179/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Millen_Kanabar.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Millen </span>
                                <span class="member-name">Kanabar</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!--<li><a href="#" class="fa fa-facebook" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-linkedin" target="_blank"></a></li>-->
                            <li><a href="http://theweepingsage.github.io" class="fa fa-link" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Prashant_Kurrey.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Prashant </span>
                                <span class="member-name">Kurrey</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/prashant.kurrey.98" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/prashant.kurrey/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <!--<li><a href="" class="fa fa-linkedin" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-4 all STADS">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="images/team/latest/Vaibhav_Malviya.jpg" alt="" />
                                </div>
                                <div class="team-content">
                                    <h3 class="title">
                                        <span class="member-name">Vaibhav </span>
                                        <span class="member-name">Malviya</span>
                                        <span class="member-name">&nbsp;</span>
                                    </h3>
                                    <span class="post">Web Developer</span>
                                </div>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/vaibhav.malviya.16" class="fa fa-facebook" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-twitter" target="_blank"></a></li>
                                    <li><a href="https://www.instagram.com/vaibhav.malviya.16/" class="fa fa-instagram" target="_blank"></a></li>
                                    <li><a href="https://www.linkedin.com/in/vaibhavmalviya110" class="fa fa-linkedin" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-link" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div> -->
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Amrutha_Lakshmi_Vadladi.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Amrutha </span>
                                <span class="member-name">Lakshmi </span>
                                <span class="member-name">Vadladi</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/amruthalakshmi.vadladi.9" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/amrutha-lakshmi-vadladi-8b0930174"
                                    class="fa fa-linkedin" target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-4 all Sanket">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="images/team/latest/Hemantkumar_Gidewar.jpg" alt="" />
                                </div>
                                <div class="team-content">
                                    <h3 class="title">
                                        <span class="member-name">Hemantkumar </span>
                                        <span class="member-name">Gidewar</span>
                                        <span class="member-name">&nbsp;</span>
                                    </h3>
                                    <span class="post">Web Developer</span>
                                </div>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/profile.php?id=100005377336573" class="fa fa-facebook" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-twitter" target="_blank"></a></li>
                                    <li><a href="https://www.instagram.com/heman_t.g/" class="fa fa-instagram" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-linkedin" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-link" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div> -->
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Yatin_Jindal.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Yatin </span>
                                <span class="member-name">Jindal</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/yatin.jindal.77/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/y_a_t_i_n_j/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/yatin-jindal-9717a71a9/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Kriti_Verma.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Kriti </span>
                                <span class="member-name">Verma</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/kriti.verma.50115161/" class="fa fa-facebook" target="_blank"></a></li>
                            <li><a href="https://twitter.com/kritiv628" class="fa fa-twitter" target="_blank"></a></li>
                            <!-- <li><a href="#" class="fa fa-instagram" target="_blank"></a></li> -->
                            <li><a href="https://www.linkedin.com/in/kriti-verma-0aba66204" class="fa fa-linkedin" target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Aravind_Bharathi.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Aravind </span>
                                <span class="member-name">Bharathi</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/bvcxz1/" class="fa fa-facebook" target="_blank"></a>
                            </li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!-- <li><a href="https://www.instagram.com/aburstofradium/" class="fa fa-instagram"
                                    target="_blank"></a></li> -->
                            <li><a href="https://www.linkedin.com/in/aravind-bharathi/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <li><a href="https://aravindbharathi.github.io/" class="fa fa-link" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Akshat_Mehta.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Akshat </span>
                                <span class="member-name">Mehta</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/akshat.mehta.568/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/akshatmehta19/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/akshatmehta1906/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Siddhi_Bagul.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Siddhi G </span>
                                <span class="member-name">Bagul</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/siddhi.bagul.54" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/siddhi.bagul_23/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/siddhi-bagul-1817481a0/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/DURGAPRASAD_BHAT.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Durgaprasad</span>
                                <span class="member-name">Prakash</span>
                                <span class="member-name">Bhat</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/durgaprasad.bhat.737" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!-- <li><a href="https://www.instagram.com/siddhi.bagul_23/" class="fa fa-instagram"
                                    target="_blank"></a></li> -->
                            <li><a href="https://www.linkedin.com/in/durgaprasad-bhat-7b0940200" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Shreya_Makkar.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Shreya </span>
                                <span class="member-name">Makkar</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/siddhi.bagul.54" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/shreyaamakkar/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/shreya-makkar-533595207" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Nikhil_K.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Nikhil</span>
                                <span class="member-name">Kaniyeri</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/siddhi.bagul.54" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="http://instagram.com/nikhil.kaniyeri" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/nikhilkaniyeri" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Tanmay_Joshi.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Tanmay</span>
                                <span class="member-name">Joshi</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/siddhi.bagul.54" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/_tnm_ayy/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <!-- <li><a href="https://www.linkedin.com/in/siddhi-bagul-1817481a0/" class="fa fa-linkedin"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Kushagra_Mishra.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Kushagra</span>
                                <span class="member-name">Mishra</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="http://www.facebook.com/kushagra.mishra.140" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="http://www.instagram.com/kush__mish/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <!-- <li><a href="https://www.linkedin.com/in/siddhi-bagul-1817481a0/" class="fa fa-linkedin"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/HEMANT_HAJARE.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Hemant</span>
                                <span class="member-name">Hajare</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/hemant.hajare.3551" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/?hl=en" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/hemant-hajare-643755221" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/navneet1.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Navneet</span>
                                <span class="member-name">&nbsp;</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/navneet.kr.98" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/navneet_amz/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/navneet-navneet-7091a4215" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <!--</div>-->
                <!--GNC Subsystem-->
                <!--<div class="row portfolio-grid justify-content-center">
                        <div class="all subsystem-heading">
                            <h4>GNC Subsystem</h4>
                        </div>
                        </div>-->
                <!--<div class="row portfolio-grid justify-content-center">-->
                <div class="all subsystem-heading">
                    <h4 style="font-weight:200px; text-decoration:none; font-size:24px; font-family:'RocknRoll One';">GNC SUBSYSTEM</h4>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Neilabh_Banzal.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Neilabh </span>
                                <span class="member-name">Banzal</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/neilabh.banzal/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/neilabh_banzal/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/neilabh" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all RVD">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Piyush_Jirwankar.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Piyush </span>
                                <span class="member-name">Jirwankar</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/piyush.jirwankar" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/piyushjirwankar" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-linkedin" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all RVD">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Dhananjay_Tiwari.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Dhananjay </span>
                                <span class="member-name">Tiwari</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100018389464280" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/_tiwari.dhananjay_/?hl=en" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/dhananjay-tiwari-802399176/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <li><a href="http://home.iitb.ac.in/~tiwari.dhananjay/" class="fa fa-link"
                                    target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Prajwal_Prathiksh.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">K T </span>
                                <span class="member-name">Prajwal </span>
                                <span class="member-name">Prathiksh</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/prajwal.prathiksh" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/prajwal.prathiksh/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/k-t-prajwal-prathiksh-5672571b3/"
                                    class="fa fa-linkedin" target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all RVD">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Bhavini_Jeloka.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Bhavini </span>
                                <span class="member-name">Jeloka</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/bhavini.jeloka.7" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-linkedin" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all RVD">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Mitalee_Oza.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Mitalee </span>
                                <span class="member-name">Oza</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/mitalee.oza.3" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-linkedin" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Dhruv_Shah.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Dhruv </span>
                                <span class="member-name">Shah</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook" target="_blank"></a></li>
                            <li><a href="#" class="fa fa-twitter" target="_blank"></a></li>
                            <li><a href="#" class="fa fa-instagram" target="_blank"></a></li>
                            <li><a href="#" class="fa fa-linkedin" target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Shashank_Singh.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Shashank </span>
                                <span class="member-name">Singh</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/Shashank199696/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/shashank__sr/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/shashank-singh-ba407b204/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Aruja_Khanna.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Aruja </span>
                                <span class="member-name">Khanna</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/aruja.khanna/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/arujakhanna/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/aruja-k-4230781a5/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Ishan_Phansalkar.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Ishan </span>
                                <span class="member-name">Phansalkar</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/ishan.phansalkar.9/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/ishanphansalkar/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/ishan-phansalkar/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all RVD">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Anjali_Rawat.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Anjali </span>
                                <span class="member-name">Rawat</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100040419040973" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="http://www.instagram.com/anjli_rwt/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-linkedin" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all RVD">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Pari_Vermani.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Pari </span>
                                <span class="member-name">Lalit</span>
                                <span class="member-name">Vermani</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/pari.vermani" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/hey_its_a_me_pario/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/pari-vermani-98b672177" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all RVD">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Priyanshi_Gupta.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Priyanshi</span>
                                <span class="member-name">Gupta</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100056426336869" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/priyanshii31/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="http://www.linkedin.com/in/priyanshi-gupta-293279222" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Manav_Gada.png" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Manav </span>
                                <span class="member-name">Gada</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100004161919248" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/_manav_gada_/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/manav-gada-474124167/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Alakh_Agrawal.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Alakh</span>
                                <span class="member-name">Agarwal</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/AdeptAlakh/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/adept_alakh/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/alakh-agrawal-704113201/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all RVD">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/shreya_jvs.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Shreya</span>
                                <span class="member-name">JVS</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://m.facebook.com/pari.vermani" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!-- <li><a href="https://instagram.com/hey_its_a_me_pario/" class="fa fa-instagram"
                                    target="_blank"></a></li> -->
                            <li><a href="https://www.linkedin.com/in/shreya-jeedigunta-212252219/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <!--</div>-->
                <!--Instrumentation Subsystem-->
                <!--<div class="row portfolio-grid justify-content-center">
                        <div class="all subsystem-heading">
                            <h4>Instrumentation Subsystem</h4>
                        </div>
                        </div>-->
                <!--<div class="row portfolio-grid justify-content-center">-->
                <div class="all subsystem-heading">
                    <h4 style="font-weight:200px; text-decoration:none; font-size:24px; font-family:'RocknRoll One';">INSTRUMENTATION SUBSYSTEM</h4>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Rohit_Yadav.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Rohit </span>
                                <span class="member-name">Kumar </span>
                                <span class="member-name">Yadav</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/profile.php?id=100005204794673" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/pronoobie_" class="fa fa-instagram" target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/rohitkumaryadav66" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4q  all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Yuktee_Gupta.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Yuktee </span>
                                <span class="member-name">Gupta</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/yuktee.gupta/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/yuktee-gupta/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Aakash.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">&nbsp; </span>
                                <span class="member-name">Aakash</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://m.facebook.com/aakash.akash.73" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/aakashnln/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/aakash-v-42841987/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Anmol_Harshana.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Anmol</span>
                                <span class="member-name">Harshana</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/anmol.harshana" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/anmol-harshana-8735831b0/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Shiven_Barbare.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Shiven </span>
                                <span class="member-name">Barbare</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/shiven.barbare" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/shivn.01/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/shiven-barbare" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Advait_Mehla.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Advait </span>
                                <span class="member-name">Mehla</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/shiven.barbare" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/_advaitm_/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/advaitmehla/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/dhruv_sorathiya.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Dhruv</span>
                                <span class="member-name">Sorathiya</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/shiven.barbare" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <li><a href="https://twitter.com/DhruvSorathiy20?t=p46IrKNMw8xeiuolmy87Rg&s=09" class="fa fa-twitter" target="_blank"></a></li>
                            <li><a href="https://www.instagram.com/dhruv_patel2952/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/dhruv-sorathiya-042820216" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Apoorv_Verma.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Apoorv</span>
                                <span class="member-name">Verma</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/apoorv.verma.14268" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/iam_apoorv03/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/apoorv-verma-b52794201/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Nidhi_Shaw1.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Nidhi </span>
                                <span class="member-name">Shaw</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/shiven.barbare" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/inidhishaw/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <!-- <li><a href="https://www.linkedin.com/in/shiven-barbare" class="fa fa-linkedin"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Reet_Mhaske.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Reet</span>
                                <span class="member-name">Santosh</span>
                                <span class="member-name">Mhaske</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/roomasultana.shaik" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!-- <li><a href="https://www.instagram.com/shivn.01/" class="fa fa-instagram"
                                    target="_blank"></a></li> -->
                            <!-- <li><a href="https://www.linkedin.com/in/shiven-barbare" class="fa fa-linkedin"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Samarth_Sharma.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Samarth</span>
                                <span class="member-name">Sharma</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/shiven.barbare" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/_samarthh__/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/samarth-sharma-9aa088201/?originalSubdomain=in" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/sameep_chattopadhyay.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Sameep</span>
                                <span class="member-name">Chattopadhyay</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100009184691889" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/sameep_ch/"   class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.instagram.com/sameep_ch/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all GLEE">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/vansh_singhal.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Vansh</span>
                                <span class="member-name">Singhal</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/vansh.singhal.925" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/vanshsinghal5/"   class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <!-- <li><a href="https://www.instagram.com/sameep_ch/" class="fa fa-linkedin"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <!--</div>-->
                <!--Mechanical Subsystem-->
                <!--<div class="row portfolio-grid justify-content-center">
                        <div class="all subsystem-heading">
                            <h4>Mechanical Subsystem</h4>
                        </div>
                        </div>-->
                <!--<div class="row portfolio-grid justify-content-center">-->
                <div class="all subsystem-heading">
                    <h4 style="font-weight:200px; text-decoration:none; font-size:24px; font-family:'RocknRoll One';">MECHANICAL SUBSYSTEM</h4>
                </div>

                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Ashay_Wakode.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Ashay </span>
                                <span class="member-name">Wakode</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/ashay.wakode.9" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/ashay-wakode-a074ab154" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Pranav_Kasat.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Pranav </span>
                                <span class="member-name">Kasat</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/pranav.kasat.1" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/pranav-kasat-522aa418b" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-4 all Sanket">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="images/team/latest/Mrigi_Munjal.JPG" alt="" />
                                </div>
                                <div class="team-content">
                                    <h3 class="title">
                                        <span class="member-name">Mrigi </span>
                                        <span class="member-name">Munjal</span>
                                        <span class="member-name">&nbsp;</span>
                                    </h3>
                                    <span class="post">Web Developer</span>
                                </div>
                                <ul class="social">
                                    <li><a href="" class="fa fa-facebook" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-twitter" target="_blank"></a></li>
                                    <li><a href="" class="fa fa-instagram" target="_blank"></a></li>
                                    <li><a href="" class="fa fa-linkedin" target="_blank"></a></li>
                                    <li><a href="#" class="fa fa-link" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div> -->
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Ritul_Shinde.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Ritul </span>
                                <span class="member-name">Shinde</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!--<li><a href="#" class="fa fa-facebook" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/ritulshinde_2305/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/ritul-shinde-432a86171/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Ankit_Kumar.png" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Ankit </span>
                                <span class="member-name">Kumar</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100005757764924" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/0ye_ankit_/?hl=en" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/ankit-kumar-303ba7170/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Mohit_Dhaka.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Mohit </span>
                                <span class="member-name">Dhaka</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100007222275227" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <li><a href="https://twitter.com/mohit_dhk" class="fa fa-twitter" target="_blank"></a>
                            </li>
                            <li><a href="https://www.instagram.com/mohit_dhk" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/mohit-dhaka-320306171" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Vidushi_Verma.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Vidushi </span>
                                <span class="member-name">Verma</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/vidushi.verma.167" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/vidushivermaa/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/vidushi-verma-667868194/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Navjit_Debnath.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Navjit </span>
                                <span class="member-name">Debnath</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/nav.jit.714/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <li><a href="https://twitter.com/solitary_nav" class="fa fa-twitter" target="_blank"></a>
                            </li>
                            <li><a href="https://www.instagram.com/nav.jit/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/navjit-debnath-34b1b5191/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                            <li><a href="https://navjitdebnath.blogspot.com/" class="fa fa-blogger-b"
                                    target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/shreeya_athaley.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Shreeya </span>
                                <span class="member-name">Shrikant </span>
                                <span class="member-name">Athaley</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/shreeya.athaley.7" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/shreeya8ley/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/shreeya-athaley-57b484193" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Soham_Phanse.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Soham </span>
                                <span class="member-name">Phanse</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100011778216063" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/soham-phanse-9088b5194/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Leena_Chaudhari.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Leena </span>
                                <span class="member-name">Chaudhari</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/leena.chaudhari.902266/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/leena.chaudhari10/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/leena-chaudhari-7666521b4/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Aayush_Shah.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Aayush </span>
                                <span class="member-name">Shah</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100002414497285" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/aayush-shah-021b501b5/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Jayant_Saboo.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Jayant </span>
                                <span class="member-name">Saboo</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/jayant.saboo.92" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/jayantsaboo.19/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/jayant-saboo-8a085a194/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Dhanush_S.png" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">&nbsp; </span>
                                <span class="member-name">Dhanush S</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/dhanush.s.5473894" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/dhanush-s-829405192/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/arpit_upadhyay.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Arpit</span>
                                <span class="member-name">Upadhyay</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/arpitupadhyay603/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/itznotarpit/" class="fa fa-instagram" target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/arpit-upadhyay-283b4a1b9/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Yash_Kothari.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Yash</span>
                                <span class="member-name">Kothari</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/yash.kothari.7127" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!-- <li><a href="#" class="fa fa-twitter" target="_blank"></a></li> -->
                            <li><a href="https://www.instagram.com/yashk.14/" class="fa fa-instagram" target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/yash-kothari-2b1a39218" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Aaditya_Sakrikar.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Aaditya</span>
                                <span class="member-name">Sakrikar</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/aaditya.sakrikar" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <li><a href="https://twitter.com/AadityaSakrikar" class="fa fa-twitter" target="_blank"></a></li>
                            <li><a href="https://www.instagram.com/aadisak02/" class="fa fa-instagram" target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/aaditya-sakrikar-871126222/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Chinmay_Pimpalkhare.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Chinmay </span>
                                <span class="member-name">Pimpalkhare</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/dhanush.s.5473894" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/chinmay-pimpalkhare-41212b212?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BxuYPzNj7RpmbOQZT%2F7sCKg%3D%3D" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all STADS">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/hrushikesh_mohite.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Hrushikesh  </span>
                                <span class="member-name">Vithal </span>
                                <span class="member-name">Mohite</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100009467650639" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/invites/contact/?i=1xjed6j8wiy3s&utm_content=3k9d2tj" class="fa fa-instagram" target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/hrushikesh-mohite-7b88961a5" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Sanket">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Ajinkya.png" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Ajinkya</span>
                                <span class="member-name">Satishkumar</span>
                                <span class="member-name">Patil</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/dhanush.s.5473894" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/ajinkyo/" class="fa fa-instagram" target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/ajinkya-patil-717417221" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>


                <!--</div>-->
                <!--Non-Tech Subsystem-->
                <!--<div class="row portfolio-grid justify-content-center">
                            <div class="all subsystem-heading">
                                <h4>Non-Tech Subsystem</h4>
                            </div>
                        </div>-->
                <!--<div class="row portfolio-grid justify-content-center">-->
                <div class="all subsystem-heading">
                    <h4 style="font-weight:200px; text-decoration:none; font-size:25px; font-family:'RocknRoll One';">NON-TECH SUBSYSTEM</h4>
                </div>

                <!-- <div class="col-lg-3 col-md-4 all Nontech">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="images/team/latest/Alok_Kumar.jpg" alt="" />
                                </div>
                                <div class="team-content">
                                    <h3 class="title">
                                        <span class="member-name">Alok </span>
                                        <span class="member-name">Kumar</span>
                                        <span class="member-name">&nbsp;</span>
                                    </h3>
                                    <span class="post">Web Developer</span>
                                </div>
                                <ul class="social">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="https://twitter.com/alok_kr1" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="https://www.linkedin.com/in/alok-kumar-ak/" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-link" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div> -->
                <!--  <div class="col-lg-3 col-md-4 all Nontech">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="images/team/latest/Karan_Chittora.jpg" alt="" />
                                </div>
                                <div class="team-content">
                                    <h3 class="title">
                                        <span class="member-name">Karan </span>
                                        <span class="member-name">Chittora</span>
                                        <span class="member-name">&nbsp;</span>
                                    </h3>
                                    <span class="post">Web Developer</span>
                                </div>
                                <ul class="social">
                                    <li><a href="https://facebook.com/krnchittora2" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="https://www.instagram.com/karan_chittora/" class="fa fa-instagram"></a></li>
                                    <li><a href="https://www.linkedin.com/in/karan-chittora-474202164" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-link" target="_blank"></a></li>
                                </ul>
                            </div> 
                        </div>-->
                <div class="col-lg-3 col-md-4 all Nontech">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Shreya_Laddha.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Shreya </span>
                                <span class="member-name">Laddha</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/shreya.laddha.779" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <!--<li><a href="#" class="fa fa-instagram" target="_blank"></a></li>-->
                            <li><a href="https://www.linkedin.com/in/shreya-laddha/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <li><a href="https://laddhashreya2000.github.io/" class="fa fa-link" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 all Nontech">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Prathmesh_Namdeo.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Prathmesh </span>
                                <span class="member-name">Namdeo</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/prathmesh.namdeo" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/prathu_.namdeo/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/prathmesh-namdeo-aba049120/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Nontech">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/akshat_jain.png" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Akshat </span>
                                <span class="member-name">Jain</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <!-- <li><a href="https://www.facebook.com/prathmesh.namdeo" class="fa fa-facebook"
                                    target="_blank"></a></li> -->
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/akshatjain900/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/akshat-jain-03809a1ba/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Nontech">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Vijaya_Bachhav.JPG" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Vijaya</span>
                                <span class="member-name">Sanjay</span>
                                <span class="member-name">Bachhav</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/vijaya.bachhav.1" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/vijaya.bachhav/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/vijaya-bachhav-b1416662" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Nontech">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Raghav_Rander.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Raghav </span>
                                <span class="member-name">Rander</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://m.facebook.com/100001118299650/" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/raghav_rander04/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/raghav-rander-322763221/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Nontech">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Riddhi_Shah.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Riddhi </span>
                                <span class="member-name">Shah</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100055868786873" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/shahriddhi.08/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/riddhi-shah-43a6091b2/?originalSubdomain=in" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Nontech">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/Vijan_Soni1.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Vijan</span>
                                <span class="member-name">Soni</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/vijan.soni.9" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/vijan.soni/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/vijan-soni-b23aa320b/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Nontech">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/kaushik_dhandekar.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Kaushik</span>
                                <span class="member-name">Dhandekar</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/kaushik.dhandekar" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter" target="_blank"></a></li>-->
                            <li><a href="https://www.instagram.com/invites/contact/?i=1kkqow8c6o85r&utm_content=1ww4qd7" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/kaushik-dhandekar-3326a6202" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <!--<li><a href="#" class="fa fa-link" target="_blank"></a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 all Nontech">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/team/latest/nikhil_tiwari.jpeg" alt="" />
                        </div>
                        <div class="team-content">
                            <h3 class="title">
                                <span class="member-name">Nikhil</span>
                                <span class="member-name">Tiwari</span>
                                <span class="member-name">&nbsp;</span>
                            </h3>
                            <!--<span class="post">Web Developer</span>-->
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/profile.php?id=100055560892152" class="fa fa-facebook"
                                    target="_blank"></a></li>
                            <li><a href="https://twitter.com/NIKHILT18363798" class="fa fa-twitter" target="_blank"></a></li>
                            <li><a href="https://www.instagram.com/nikhil.iitb/" class="fa fa-instagram"
                                    target="_blank"></a></li>
                            <li><a href="https://www.linkedin.com/in/nikhiltiwari-iitb/" class="fa fa-linkedin"
                                    target="_blank"></a></li>
                            <li><a href="https://github.com/nikhil-iitb" class="fa fa-link" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div style="padding-bottom:20px;"></div>

<script src="team/js/jquery-3.2.1.min.js"></script>
<script src="team/js/popper.js"></script>
<script src="team/js/bootstrap.min.js"></script>
<script src="team/js/stellar.js"></script>
<script src="team/js/jquery.magnific-popup.min.js"></script>
<script src="team/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="team/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="team/vendors/isotope/isotope-min.js"></script>
<script src="team/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="team/js/jquery.ajaxchimp.min.js"></script>
<script src="team/js/mail-script.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="team/js/gmaps.min.js"></script>
<script src="team/js/theme.js"></script>

<?php include 'footer.php'; ?>