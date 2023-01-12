<?php $title = 'Electrical'; include 'header.php'; ?>
<style>
*{
  font-size: 18px;
}
</style>
<section class="about-head">
    <div class="container-fluid">
        <div class="about-title">
            <h1>Electrical</h1>
        </div>
    </div>
</section>

<style>
    /* body:not(.t02) {background: linear-gradient(180deg, rgba(255, 255, 255, 0.18) 0%, rgba(47, 79, 121, 0.75) 180%);} */
p {


font-style: normal;
font-weight: normal;
font-size: 18px;
}
</style>

<section class="about-section3 ">
    <div class="container">
        <div class="row">
            <!--<div class="col-sm-12 col-md-3 col-md-push-9">
                <br><br><br>
                <img src="images/ElecSS.png" class="img-responsive"><center>The Pratham Satellite</center>
            </div>
            <div class="col-sm-12 col-md-9 col-md-pull-3">-->
                <div class="section3-content">
                <p align="justify"><b>Electrical Subsystem</b> is responsible for taking care of power and computational requirements of the system. It manages the power available on the satellite and regulates its distribution. Electrical subsystem equips the system with the required processing power which is used for controlling the satellite, power regulation, handling communication (between IC’s) and for various decision making involved during mission life. It provides and manages data storage onboard the satellite.
                There are two main segments in this subsytem: </p>

<!-- <p align="justify"> -->
<ol style="font-size:18px";>
<li>The <b>Power</b> section harnesses power from sun-rays using high-energy solar cells, supplies it to various systems on-board, stores the remaining power in batteries for use in the eclipse region, monitors the health of components and reports faults to the On-Board Computer, which then instructs the Power section to take appropriate action.<br>

<li>The <b>On-Board Computer (OBC)</b> section is like the brain of the satellite. It controls the way the satellite functions and is expected to take all the decisions for the satellite. It collects data from attitude sensors and executes controls loops and gives feedback to the actuators, collects health data from the Power section and various sensors and takes decisions in case of faults and initiates transmission of data at appropriate times (when the satellite is visible from the ground station).
<!-- </p> -->
</ol>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="t02">
<?php include 'footer.php'; ?>
</div>