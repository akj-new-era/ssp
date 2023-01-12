<?php $title = 'Communication'; include 'header.php'; ?>
<style>
*{
  font-size: 18px;
}
</style>
<section class="about-head">
		<div class="container-fluid">
			<div class="about-title">
				<h1>Communication</h1>
			</div>
		</div>
	</section>

	<section class="about-section3">
		<div class="container">
			<div class="row">
				<!-- <div class="col-sm-12 col-md-3">
					<img src="img/pratham.jpg" class="img-responsive">
				</div> -->
				<div class="col-sm-12 col-md-12">
					<div class="section3-content">
                    <p>The <b>Communication Subsystem</b> of the satellite is one the most important subsystems, without which the satellite is just a rock revolving around the Earth. The communication subsystem performs the following tasks:
                    </p> 
                        <ol style="font-size:18px";>
                            <li><b>On-board Antenna and Beacon:</b> The most important task is to design a satellite antenna for sending the data to the Earth. Beacon is the signature of the satellite which generally transmits in Morse Code. The downlink generally transmits Health Monitoring (HM) data through an appropriately modulated signal.</li>
                            <li><b>Modulation and Demodulation:</b> The beacon is generally a CW signal. An appropriate modulation technique is chosen for the downlink signal considering the transmission range and data rate required</li>
                            <li><b>Ground Station:</b> To receive a signal from the satellite, a ground station is set up by the subsystem which consists of satellite tracker, antennae, low noise amplifier, demodulator and radio equipment to catch the Downlink and Beacon signal.</li>
                        </ol>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include 'footer.php'; ?> 