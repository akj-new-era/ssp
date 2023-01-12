<?php $title = 'GNC'; include 'header.php'; ?>
<style>
*{
  font-size: 18px;
}
</style>
<section class="about-head">
		<div class="container-fluid">
			<div class="about-title">
				<h1>GUIDANCE, NAVIGATION AND CONTROL</h1>
			</div>
		</div>
	</section>

	<section class="about-section3 ">
		<div class="container">
			<div class="row">
				<!-- <div class="col-sm-12 col-md-3">
					<img src="img/pratham.jpg" class="img-responsive">
				</div> -->
				<div class="col-sm-12 col-md-12">
					<div class="section3-content">
						<p>The <b>Guidance, Navigation and Control Subsystem</b> is responsible for controlling the position, trajectory and attitude (i.e. orientation) of the satellite. Previously named as <b>Attitude Determination and Control Subsystem (ADCS)</b>, this subsystem’s name was changed to GNC to broaden its horizon and include the control of the trajectory and position of the satellite too, rather than just the control of the attitude. The GNC subsystem has to perform the following tasks:
                        </p> 
                        <ol style="font-size:18px";>
                            <li> To determine and alter the <b>attitude</b> of the satellite according to the requirements of the Communications, Power and Payload subsystems.</li>
                            <li>To control the <b>trajectory and position</b> of the satellite so that effective communication can be established with the ground station.</li>
                            <li>To perform <b>orbit maneuvers</b>, that is shift the orbit of the satellite.</li>
                            <li>To devise and verify through extensive simulations, the control algorithm that will <b>stabilize</b> the satellite once it is launched by the space vehicle.</li>
                            <li>To perform <b>failure mode analysis</b> to ensure that the satellite will sustain itself through unexpected events.</li>
                        </ol>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include 'footer.php'; ?> 