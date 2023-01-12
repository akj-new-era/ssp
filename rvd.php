
<?php $title = 'RVD'; include 'header.php'; ?>
<style>
*{
  font-size: 18px;
}

#rvd{
	width:350px; 
	height:250px; 
	left:50%; 
	top:8px;"
}

@media (max-width:1000px){
	#rvd{
		left:20%;
	}
}

@media (max-width:550px){
	#rvd{
		left:10%;
		width:300px;
	}
}

@media (max-width:430px){
	#rvd{
		left:0%;
		width:300px;
	}
}
</style>
	<section class="about-head">
		<div class="container-fluid">
			<div class="about-title">
				<h1>Rendezvous And Docking</h1>
			</div>
		</div>
	</section>

	<section class="mt-5p">
		<div class="container">
			<div class="row" style="padding: 15px 0px 15px 0px;">
				<div class="col-md-12">
				<p class="ft-18">The <b>Rendezvous and Docking (RVD) System</b> in IITBSSP aims to pioneer a simulation framework for Guidance, Navigation, and Control for autonomous rendezvous and docking of one 6U CubeSat, called the chaser, to another, called the target; under the purview of GNC subsystem.</p>				</div>
			</div>
		</div>
	</section>

	<section class="about-section2">
		<div class="container">
			<div class="row" style="padding: 15px 0px 15px 0px;">
				<div class="col-sm-12 col-md-6 col-md-push-4" >
					<div class="section2-img" >
						<!-- <img src="img/pratham.jpg" class="section2-img1"> -->
						<img src="img/about/rvd/rvd_1.jpg" class="section2-img2" id="rvd">
						<p class="section2-img2-caption" ><i style="font-size:13px;">(Shenzhou spacecraft performing rendezvous with Tiangong-1 (China's first prototype space station) © China Manned Space Engineering Office)</i></p>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-md-pull-6">
					<div class="section2-content">
						<p>The tasks for this system are divided into three sections -</p>
						<ul class="">
							<li><b>Guidance</b> refers to determining a strategy to find the desired path or trajectory that the Chaser needs to follow to go from its current location to a decided location, along with determining the changes in velocity, rotation, and acceleration required to follow that path.</li>
							<li><b>Navigation</b> determines a strategy for estimating the state of the Chaser along the flight path, given outputs from specified sensors.</li>
							<li><b>Controls</b> works towards designing an efficient position and attitude controller keeping in mind the guidance strategy and constraints of the mission.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="about-section3 dark-bg text-white">
		<div class="container">
			<div class="row" style="padding: 15px 0px 0px 0px;">
				<div class="col-md-12">
					<div class="section3-content">
					<p>A standard RVD mission is broken up into <b>four phases</b>. Here’s how we’re going to work with each: </p>
				</div>
				</div>
				<div class="col-sm-12 col-md-3 col-md-push-9">
					<img src="img/about/rvd/rvd_7.jpeg" class="img-responsive mt-23p" style="margin-top:80px; height:190px;" >
					<p class="section3-img1-caption" ><i style="font-size:13px;">(SpaceX Crew Dragon spacecraft successfully performing rendezvous with ISS © SpaceX)</i></p>
				</div>
				<div class="col-sm-12 col-md-9 col-md-pull-3">
					<div class="section3-content">
						<p><b>Phasing - </b></p>
						<p>After the launch, the chaser and target are very far away separated by a certain phase angle. In this phase, we aim to minimize this phase angle and the relative distance between the two and also correct the launch injection errors.
						Absolute Navigation takes place here.
						Selected technique - Special point maneuver using simulated annealing for solving optimization problems to minimize the amount of fuel used.</p>

						<p><b>Far Range Rendezvous - </b></p>
						<p>In this phase, the Chaser moves from the orbit at the end of phasing to a point in the close vicinity of the Target, in the same orbit. Relative navigation starts in this phase. Selected Guidance technique - Hoffmann Transfer</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="about-section3 dark-bg text-white">
		<div class="container">
			<div class="row" style="padding: 15px 0px 15px 0px;">
				<div class="col-sm-12 col-md-3">
					<img src="img/about/rvd/rvd_3.jpeg" class="img-responsive mt-25p">
					<p class="section3-img2-caption" ><i style="font-size:13px;">(The final approach plan for Engineering Test Satellite VII (ETS-VII) which leads to Docking © NASDA)</i></p>
				</div>
				<div class="col-sm-12 col-md-9">
					<div class="section3-content">
						<p><b>Close Range Rendezvous - </b></p>
						<p>Here, the Chaser moves extremely close to the Target, using relative navigation techniques, and aligns itself to be ready for docking. Selected Guidance Technique - ZEM/ZEV</p>

						<p><b>Docking - </b></p>
						<p>In this phase, the Chaser moves along a fixed direction to finally attach itself to the docking port of the Target. In our mission, we are only concerned with Soft Docking. Vision-Based Navigation is employed here to find the relative orientation of the two satellites. Selected position and attitude control technique - Model Predictive Control.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="text-center">
		<div class="container">
			<div class="row" style="padding: 15px 0px 15px 0px;">
				<div class="col-md-12">
					<p class="" style="padding-top:15px;">Currently, the system is engaged in working to design and implement the selected algorithms in the context of the mission statement.</p>
					<p class="">Feel free to reach out to us if you have any doubts or interesting conversations to make regarding RVD!</p>
				</div>
			</div>
		</div>
	</section>

<?php include 'footer.php'; ?>
