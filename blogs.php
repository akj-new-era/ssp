
<?php $title = 'Blogs'; include 'header.php'; ?>
<style>
*{
  font-size: 18px;
}
</style>
<section class="about-head" >
    <div class="container-fluid">
        <div class="about-title">
            <h1>BLOGS</h1>
        </div>
    </div>
</section>
<br>
<br>

<style>
.blog_card_footer{
	border: 0.125rem solid #212a3a;
	border-radius:2rem;
	padding: 0em 0.75em;
}

.blog_card_footer .read_more {
  	margin-left: 0px;
}

.blog_card_footer {
  	margin-left: 20px;
}

.blog_card_footer a {
  	color:#212a3a;
}

.blog_card_footer:hover{
  	background-color:#212a3a;
}

.blog_card_footer:hover a{
	color:white;
}
.blog_card_body {
	color: #212a3a;
}
.blog_card_description {
	color: #212a3a;
	font-style: "Montserrat";
}
</style>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="myBtnContainer">
				  <button class="btn active" onclick="filterSelection('all')" style="font-size:11px;"> All</button>
				  <button class="btn" onclick="filterSelection('cat-pratham')" style="font-size:11px;"> Pratham</button>
				  <button class="btn" onclick="filterSelection('cat-hrc')" style="font-size:11px;"> HRC & GSS</button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4 filterDiv cat-pratham">
				<div class="blog_card">
					<div class="blog_card_thumb">
						<a href="https://theiinaniitian.wordpress.com/2017/09/26/the-making-of-pratham-satellite/" target="_blank"><img src="img/blogs/blog01.png"></a>
					</div>
					<div class="blog_card_date">
						<span class="blog_card_date_day">26</span>
						<span class="blog_card_date_month">Sep'17</span>
					</div>
					<div class="blog_card_body">
						<div class="blog_card_category"><a href="https://theiinaniitian.wordpress.com/2017/09/26/the-making-of-pratham-satellite/" target="_blank">Pratham</a></div>
						<div class="blog_card_title"><a href="https://theiinaniitian.wordpress.com/2017/09/26/the-making-of-pratham-satellite/" target="_blank">The Making of Pratham</a></div>
						<div class="blog_card_subtitle"><i class="glyphicon glyphicon-user"></i>&nbsp;Yash Sanghvi</div>
						<p class="blog_card_description">A couple of weeks after the launch of Pratham we were invited to a college for giving a talk. The organizers quite nervously asked us, “We have reserved a two hour slot for your talk...</p>
					</div>
					<div class="blog_card_footer">
						<span class="read_more"><a href="https://theiinaniitian.wordpress.com/2017/09/26/the-making-of-pratham-satellite/" target="_blank" style="font-size:14px;">Read More</a></span>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-4 filterDiv cat-pratham">
				<div class="blog_card">
					<div class="blog_card_thumb">
						<a href="http://anmoldiaries.blogspot.in/2017/09/when-satellite-launched-us.html" target="_blank"><img src="img/blogs/blog02.png"></a>	
					</div>
					<div class="blog_card_date">
						<span class="blog_card_date_day">26</span>
						<span class="blog_card_date_month">Sep'17</span>
					</div>
					<div class="blog_card_body">
						<div class="blog_card_category"><a href="http://anmoldiaries.blogspot.in/2017/09/when-satellite-launched-us.html" target="_blank">Pratham</a></div>
						<div class="blog_card_title"><a href="http://anmoldiaries.blogspot.in/2017/09/when-satellite-launched-us.html" target="_blank">When Satellite launched us!</a></div>
						<div class="blog_card_subtitle"><i class="glyphicon glyphicon-user"></i>&nbsp;Anmol Sikka</div>
						<p class="blog_card_description">There are some days which get etched in your memory. From a year earlier multiple memories were made and now a year hence here I am reliving and relishing the days...</p>
					</div>
					<div class="blog_card_footer">
						<span class="read_more"><a href="http://anmoldiaries.blogspot.in/2017/09/when-satellite-launched-us.html" target="_blank" style="font-size:14px;">Read More</a></span>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-4 filterDiv cat-pratham">
				<div class="blog_card">
					<div class="blog_card_thumb">
						<a href="https://theiinaniitian.wordpress.com/2017/09/28/a-40-hour-adventure-prathams-thermo-vacuum-test/" target="_blank"><img src="img/blogs/blog03.png"></a>
					</div>
					<div class="blog_card_date">
						<span class="blog_card_date_day">28</span>
						<span class="blog_card_date_month">Sep'17</span>
					</div>
					<div class="blog_card_body">
						<div class="blog_card_category"><a href="https://theiinaniitian.wordpress.com/2017/09/28/a-40-hour-adventure-prathams-thermo-vacuum-test/" target="_blank">Pratham</a></div>
						<div class="blog_card_title"><a href="https://theiinaniitian.wordpress.com/2017/09/28/a-40-hour-adventure-prathams-thermo-vacuum-test/" target="_blank">A 40 Hour Adventure</a></div>
						<div class="blog_card_subtitle"><i class="glyphicon glyphicon-user"></i>&nbsp;Yash Sanghvi</div>
						<p class="blog_card_description">More often than not, superlatives are found in the most unexpected of places. The purest form of beauty, for instance, can be found in simplicity. The purest form of happiness can be found in tears...</p>
					</div>
					<div class="blog_card_footer">
						<span class="read_more"><a href="https://theiinaniitian.wordpress.com/2017/09/28/a-40-hour-adventure-prathams-thermo-vacuum-test/" target="_blank" style="font-size:14px;">Read More</a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4 filterDiv cat-hrc">
				<div class="blog_card">
					<div class="blog_card_thumb">
						<a href="https://hrciitb.wordpress.com/category/transmission-tales/" target="_blank"><img src="img/blogs/transmission_tales.jpg"></a>
					</div>
					<div class="blog_card_date">
						<span class="blog_card_date_day">30</span>
						<span class="blog_card_date_month">Apr'20</span>
					</div>
					<div class="blog_card_body">
						<div class="blog_card_category"><a href="https://hrciitb.wordpress.com/category/transmission-tales/" target="_blank">HRC & GSS</a></div>
						<div class="blog_card_title"><a href="https://hrciitb.wordpress.com/category/transmission-tales/" target="_blank">Transmission Tales</a></div>
						<div class="blog_card_subtitle"><i class="glyphicon glyphicon-user"></i>&nbsp;Ham Radio Club</div>
						<p class="blog_card_description">Radio technology has come a long way since its invention and there have been several interesting incidents that are worth taking a look at...</p>
					</div>
					<div class="blog_card_footer">
						<span class="read_more"><a href="https://hrciitb.wordpress.com/category/transmission-tales/" target="_blank" style="font-size:14px;">Read More</a></span>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-4 filterDiv cat-hrc">
				<div class="blog_card">
					<div class="blog_card_thumb">
						<a href="https://hrciitb.wordpress.com/category/the-communication-chronicles/" target="_blank"><img src="img/blogs/communication_chronicles.jpg"></a>
					</div>
					<div class="blog_card_date">
						<span class="blog_card_date_day">28</span>
						<span class="blog_card_date_month">July'20</span>
					</div>
					<div class="blog_card_body">
						<div class="blog_card_category"><a href="https://hrciitb.wordpress.com/category/the-communication-chronicles/" target="_blank">HRC & GSS</a></div>
						<div class="blog_card_title"><a href="https://hrciitb.wordpress.com/category/the-communication-chronicles/" target="_blank">The Communication Chronicles</a></div>
						<div class="blog_card_subtitle"><i class="glyphicon glyphicon-user"></i>&nbsp;Ham Radio Club</div>
						<p class="blog_card_description">Have you ever wondered how you can talk to your friends, thousands of kilometers away, or what actually happens when you turn on the radio? <br>This technology, however trivial it may seem to us, actually has some very interesting scientific phenomenon involved in it...</p>
					</div>
					<div class="blog_card_footer">
						<span class="read_more"><a href="https://hrciitb.wordpress.com/category/the-communication-chronicles/" target="_blank" style="font-size:14px;">Read More</a></span>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-4 filterDiv cat-hrc">
				<div class="blog_card">
					<div class="blog_card_thumb">
						<a href="https://hrciitb.wordpress.com/category/ham-radio-101/" target="_blank"><img src="img/blogs/ham101.jpg"></a>
					</div>
					<div class="blog_card_date">
						<span class="blog_card_date_day">24</span>
						<span class="blog_card_date_month">Aug'20</span>
					</div>
					<div class="blog_card_body">
						<div class="blog_card_category"><a href="https://hrciitb.wordpress.com/category/ham-radio-101/" target="_blank">HRC & GSS</a></div>
						<div class="blog_card_title"><a href="https://hrciitb.wordpress.com/category/ham-radio-101/" target="_blank">Ham Radio 101</a></div>
						<div class="blog_card_subtitle"><i class="glyphicon glyphicon-user"></i>&nbsp;Ham Radio Club</div>
						<p class="blog_card_description">What is Ham Radio? Who is a ham operator? What does he/she do using the ham radio? How does he/she operate? Why is it such a fascinating hobby?<br> To get the answers to all these questions...</p>
					</div>
					<div class="blog_card_footer">
						<span class="read_more"><a href="https://hrciitb.wordpress.com/category/ham-radio-101/" target="_blank" style="font-size:14px;">Read More</a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4 filterDiv cat-hrc">
				<div class="blog_card">
					<div class="blog_card_thumb">
						<a href="https://hrciitb.wordpress.com/category/h-a-m/" target="_blank"><img src="img/blogs/ham.jpg"></a>
					</div>
					<div class="blog_card_date">
						<span class="blog_card_date_day">31</span>
						<span class="blog_card_date_month">Mar'21</span>
					</div>
					<div class="blog_card_body">
						<div class="blog_card_category"><a href="https://hrciitb.wordpress.com/category/h-a-m/" target="_blank">HRC & GSS</a></div>
						<div class="blog_card_title"><a href="https://hrciitb.wordpress.com/category/h-a-m/" target="_blank">H.A.M.</a></div>
						<div class="blog_card_subtitle"><i class="glyphicon glyphicon-user"></i>&nbsp;Ham Radio Club</div>
						<p class="blog_card_description">Most of you must be aware that amateur radio, also known as ham radio, is the use of radio frequency spectrum as a hobby or as a disaster management system. Well, it is much more than just that. There are many exciting aspects of amateur radio some of which are QRP, Echolink, and activities such as a foxhunt...</p>
					</div>
					<div class="blog_card_footer">
						<span class="read_more"><a href="https://hrciitb.wordpress.com/category/h-a-m/" target="_blank" style="font-size:14px;">Read More</a></span>
					</div>
				</div>
			</div>

		</div>
	</div>

<?php include 'footer.php'; ?>
