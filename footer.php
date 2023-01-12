
  <!-- <footer>
  	<p>&copy; IIT Bombay Student Satellite Program 2021. Any reproduction MUST be accompanied by a reference to the Satellite Program.</p>
  	<p>Developed and Maintained by Web Team, Student Satellite Program</p>
  </footer>

  <script src="js/main.js"></script>
  <script src="js/blog_script.js"></script>
  jQuery library 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   Latest compiled JavaScript 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html> -->

<style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

.footer-distributed{
	background: #212a3a;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 18px sans-serif;
	padding: 30px 50px;
	margin-top: 0px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
	padding-right: 30px;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 18px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 18px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 18px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:18px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 18px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

.footer-links a:hover {
	font-weight: 700;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 18px;
	font-weight: normal;
	margin-top:20px;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 18px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

.footer-icons #facebook:hover {
	color: #4267B2;
	transition: 0.3s ease;
	/* background: linear-gradient(45deg, #405DE6, #5251DB, #833AB4, #C13584, #E1306C, #FD1D1D); */
}

.footer-icons #twitter:hover {
	color: #1DA1F2;
	transition: 0.3s ease;
	/* background: linear-gradient(45deg, #405DE6, #5251DB, #833AB4, #C13584, #E1306C, #FD1D1D); */
}
.footer-icons #linkedin:hover {
	color: #0077B5;
	transition: 0.3s ease;
	/* background: linear-gradient(45deg, #405DE6, #5251DB, #833AB4, #C13584, #E1306C, #FD1D1D); */
}
.footer-icons #instagram:hover {
	color: #E1306C;
	transition: 0.3s ease;
	/* background: linear-gradient(45deg, #405DE6, #5251DB, #833AB4, #C13584, #E1306C, #FD1D1D); */
}
/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}

  </style>

<footer class="footer-distributed">

			<div class="footer-left">

				<!-- <h3 style="font-size:20px;">IITBSSP </h3> -->
          <!--     <span><img src="img/satlogo.png" height="100" width="100"></span></h3>-->

				<p class="footer-links">
					<a href="index.php" class="link-1" style="font-size:18px;">Home</a>
					
					<a href="pratham.php"  style="font-size:18px;">Pratham</a>
				
					<a href="timeline.php" style="font-size:18px;">Timeline</a>
				
					<a href="faq.php" style="font-size:18px;">FAQs</a>
					
					<a href="ham.php" style="font-size:18px;">HRC</a> 
					
				</p>

				<p class="footer-company-name" style="color:white;" style="font-size:15px;">© IIT Bombay Student Satellite Program 2021. Any reproduction MUST be accompanied by a reference to the Satellite Program.</p>
			</div>

			<div class="footer-center">
<!--
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
				</div>-->
        <div></div>
				<div>
					<i class="fa fa-phone" style="font-size:15px;"></i>
					<p style="font-size:18px;"> +91-22-2576-4147</p>
				</div>

				<div>
					<i class="fa fa-envelope" style="font-size:15px;"></i>
					<p><a href="mailto:support@company.com" style="color: white; font-size:18px;">iitbssp@iitb.ac.in</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-links" style="font-size:15px; font-weight:normal;">
					<span>Like and Follow us</span>
				</p>

				<div class="footer-icons">

					<a id="facebook" href="https://www.facebook.com/iitbssp" target="_blank"><i class="fa fa-facebook"></i></a>
					<a id="twitter" href="https://twitter.com/satlabiitb" target="_blank"><i class="fa fa-twitter"></i></a>
					<a id="linkedin" href="https://www.linkedin.com/company/advitiy-iit-bombay-student-satellite/" target="_blank"><i class="fa fa-linkedin"></i></a>
					<a id="instagram" href="https://instagram.com/iitbssp" target="_blank"><i class="fa fa-instagram"></i></a>

				</div>

			</div>

		</footer>

    <script src="js/main.js"></script>
  <script src="js/blog_script.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>