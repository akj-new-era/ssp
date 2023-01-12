<?php $title = 'Advitiy'; include('header.php'); ?>
<style>
*{
  font-size: 18px;
}
</style>
<style>
.lead {
    font-size: 18px;
}

.mission-advitiy {
    font-size: 18px;
}

@media (max-width: 991px){
	#img1{
	display: block;
    max-width: 70%;
    margin-left: auto;
    margin-right: auto;
}

</style>

<section class="about-head">
    <div class="container-fluid">
        <div class="about-title">
            <h1>Advitiy</h1>
        </div>
    </div>
</section>

<section class="pricing-area">
    <div class="center wow fadeInDown">

        <!-- <h2 style="text-align:left;" >About Advitiy</h2><br> -->
        <div class="container">
            <div class="row">
                <div class="col-md-4"> 
                    <img src="img/about/advitiy/advitiy_2.png" alt="" style="width:100%; padding-top:65px;">
                </div>
                <div class="col-md-8">
            <p class="lead" style="text-align:justify; padding:55px 0px 25px 0px;"> After the successful launch of Pratham,
                <b>Advitiy</b> was the second satellite under the Student Satellite Programme of IIT Bombay. The name Advitiy
                means 'Unparalleled' or 'Unprecedented'. The aim was to make it a robust, reliable and repeatable
                satellite bus. Advitiy would be transmitting pre-loaded and uplinked images through <b>Slow Scan Television
                (SSTV)</b> protocol which can be intercepted by a low-cost receiver (~5000 INR) that can be built even by a
                layperson. Thus, along with robustness and reliability, increasing space awareness and enthusiasm among
                India's youth and school children was another aim of Advitiy. After the announcement of opportunity for
                ISRO's PSLV Stage 4 Orbital Platform, the team decided to pause work on Advitiy and carry forward the
                work on Antenna Deployment System along with other suitable CubeSat subsystems whose indigenous
                development will be of relevance. </p>
</div>
</div>
        </div>

        <section class="about-section2 dark-bg text-white">
            <div class="container" style="padding: 20px 0px 25px 0px;">
                <div class="row" style="margin-left:auto; margin-right:auto;">
                    <div class="col-md-9">
                    <h1 class="text-center" style="padding-bottom:15px;">Mission Statement</h1>

                    <ul class="mission-advitiy" >
                        <li>To build a reliable satellite that is robust and repeatable.</li>
                        <li style="text-align: left;">To preserve and enhance the knowledge and skills within the team in
                        the field of Satellite and Space Technology</li>
                        <li style="text-align: left;">To share the knowledge within the team related to satellite building
                        with other aspiring students/universities</li>
                    </ul>
                    </div>
                    <div class="col-md-3">
                        <img src="img/about/advitiy/advitiy_1.png" id="img1" style="width:70%; padding-top:20px; padding-left:20px;">
                    </div>
                </div>
            </div>
        </section>

        <div class="container" style="padding:25px 0px 25px 0px; align-items:center;">

            <h1 class="text-center">Technical Details at a Glance</h1>
            <table class="table table-bordered mb-3p" style="width:90%; font-size:15px; margin-left:auto;margin-right:auto;">
                <tr>
                    <th>Orbit</th>
                    <td>
                        <div">Sun-Synchronous Polar LEO</div>
                    </td>
                </tr>
                <tr>
                    <th>Mass</th>
                    <td>
                        <div">893 g</div>
                    </td>
                </tr>
                <tr>
                    <th>Size</th>
                    <td>
                        <div">10x10x11.35 cm3</div>
                    </td>
                </tr>
                <tr>
                    <th>Deployer</th>
                    <td>
                        <div">ISIS PPOD</div>
                    </td>
                </tr>
                <!-- <tr>
                    <td>Control</td>
                    <td>
                        <div"></div>
                    </td>
                </tr> -->
                <tr>
                    <th rowspan="3" style="padding:50px 0px 25px 8px;">Control</th>
                    <td><div">3-Axis Stabilized</div></td>
                </tr>
                <tr>
                    <td><div">Controlled in Eclipse</div></td>
                </tr>
                <tr>
                    <td><div">2 - Modes (Detumbling and Nominal)</div></td>
                </tr>
                <tr>
                    <th>Estimator</th>
                    <td>
                        <div">MEKF + QuEST</div>
                    </td>
                </tr>
                <tr>
                    <th>Sensors</th>
                    <td>
                        <div">GPS, Magnetometer, Gyroscope, Photodiodes x 6</div>
                    </td>
                </tr>
                <tr>
                    <th>Actuators</th>
                    <td>
                        <div">Magnetorquers x 3 (8.5cm x 8.5cm)</div>
                    </td>
                </tr>
                <tr>
                    <th>Power Generated</th>
                    <td>
                        <div">Max. 2.2 W</div>
                    </td>
                </tr>
                <!-- <tr>
                    <td>Processor</td>
                    <td>
                        <div">Power: AVR XMEGA</div>
                    </td>
                </tr> -->
                <tr>
                    <th rowspan="3" style="padding:50px 0px 25px 8px;">Processor</th>
                    <td><div">Power: AVR XMEGA</div></td>
                </tr>
                <tr>
                    <td><div">OBC: AVR XMEGA</div></td>
                </tr>
                <tr>
                    <td><div">Communication: AVR XMEGA x 2</div></td>
                </tr>
                <tr>
                    <th>Beacon</th>
                    <td>
                        <div">144-146 MHz, On Off Keying (OOK), CW</div>
                    </td>
                </tr>
                <tr>
                    <th>Downlink/Payload</th>
                    <td>
                        <div">144-146 MHz, FM Modulation</div>
                    </td>
                </tr>
                <tr>
                    <th>Uplink</th>
                    <td>
                        <div">144-146 MHz, FSK Modulation</div>
                    </td>
                </tr>
                <tr>
                    <th>Antenna</th>
                    <td>
                        <div">Deployed Dipole (48 cm approx.)</div>
                    </td>
                </tr>
                <tr>
                    <th>Antenna Deployment Mechanism</th>
                    <td>
                        <div">Wire-burn Mechanism</div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/fittext.js"></script>
<script src="js/lettering.js"></script>
<script src="js/textillate.js"></script>
<script>
$(function() {
    $('.tlt').textillate({
        loop: true,
        minDisplayTime: 4000,
        in: {
            effect: 'fadeInLeftBig',
            delayScale: 1.5,
            delay: 50,
            sync: true,
            shuffle: false,
            reverse: false,
        },

        out: {
            effect: 'fadeOutRightBig',
            delayScale: 1.5,
            delay: 50,
            sync: true,
            shuffle: false,
            reverse: true,
        },
    });
})
</script>