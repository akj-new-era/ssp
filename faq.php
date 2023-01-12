<?php $title = 'FAQ'; include 'header.php'; ?>
<style>
*{
  font-size: 18px;
}
</style>
<section class="about-head">
    <div class="container-fluid">
        <div class="about-title">
            <h1>Frequently Asked Questions</h1>
        </div>
    </div>
</section>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* #t01 {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.18) 0%, rgba(47, 79, 121, 0.75) 70%, rgba(47, 79, 121, 0.75) 100%);
} */
.accordion {
    background: #212a3a;
    border: 2px solid rgba(111, 142, 184, 0.7);
    box-sizing: border-box;
  color: white;
  cursor: pointer;
  padding: 22px;
  width: 100%;
  text-align: left;
  outline: none;
  font-size: 18px;
  transition: 0.4s;
  font-family: 'Montseerat';
font-style: normal;
font-weight: normal;
margin: 10px;
}

/*.active:after {
  content: "\2212";
}*/

.accordion:after {
  content: '\02C5';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.container-fluid {
    width: 70%;
}

.panel {
  padding: 0 18px;
  /* background: rgba(210, 230, 255, 0.65); */
/* border: 2px solid rgba(111, 142, 184, 0.7);
box-sizing: border-box; */
margin-bottom: 0px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  font-family: Poppins;
font-style: normal;
font-weight: normal;
color: black;
font-size:18px;
}
</style>
</head>
<body>
<div id="t01">
<h1 style="font-family: Roboto;
font-style: normal;
font-weight: 500;color: #2F4F79; padding-bottom: 20px;"><center><br></center></h1>

<div class="container-fluid">

<button class="accordion">Q1. How can I be a part of IITBSSP?	</button>
<div class="panel">
  <p>We conduct a recruitment test for IIT Bombay students every year in January, interested people can apply through this.
</p>
</div>

<button class="accordion">Q2. What is a systems engineer?</button>
<div class="panel">
  <p>Systems Engineer is the person responsible for ensuring that the various subsystems working on a project satisfy the requirements set on them. The person must have a combination of technical as well as managerial skills and should have a broad understanding of all the subsystems relevant to the project. They ensure that the team functions keeping in mind the practices of systems engineering (more on that in the Satellite 101 wiki: 
    <a href="https://www.aero.iitb.ac.in/satelliteWiki/index.php/Systems_Engineering_Life_Cycle">https://www.aero.iitb.ac.in/satelliteWiki/index.php/Systems_Engineering_Life_Cycle</a>  and keep track of the progress of the project.
  </p>
</div>

<button class="accordion">Q3. How are the projects funded?</button>
<div class="panel">
  <p>The projects are funded by IRCC, an institute body that funds all technical projects.</p>
</div>

<!-- <button class="accordion">Q4. How are the projects funded?</button>
<div class="panel">
  <p>The projects are funded by IRCC, an institute body that funds all technical projects.</p>
</div> -->

<!-- <button class="accordion">Q1. Why the name Pratham?</button>
<div class="panel">
  <p><b>Pratham</b> means <i>first</i> in Sanskrit. Since, Pratham is IIT-B's first* student satellite, we found the name appropiate. </p>
</div> -->

<button class="accordion">Q4. What is the role of the faculty of IITB in Pratham?</button>
<div class="panel">
  <p>Since its a Student Satellite, the IITB faculty lead by Prof K. Sudhakar have given the students a free hand in running the project. Hence it is upto the student team to set deadlines, review work and keep the project on track. The faculty are also the PI for the project, and have helped us a lot in managing the monetary resources.</p>
</div>

<button class="accordion">Q5. What is the toughest job for the Project Manager of Pratham?</button>
<div class="panel">
  <p>The First Project Manager of Saptarshi, feels that the toughest job is running the team. We are a team of highly passionate students who want to excel in our work, but tend to drift off in our own orbit sometimes. Hence keeping the team together is the toughest job for a Student Team's leader, he says.</p>
</div>

<button class="accordion">Q6. I want to setup a ground station in my institute, how do I go about it?</button>
<div class="panel">
  <p>The HRC conducts a Ground Station Workshop (GSW) every year for students from other institutes who want to establish a satellite team and GSS in their college. The workshop guides them on how to initialize the team, whom to approach for help, and what sources to look upon when stuck. The workshop also focuses on how to manage a team in a way that it doesn’t become static and keeps working to achieve its target in the long run.
    </p> 
  </div>

<!-- <button class="accordion">Q5. Why is Pratham taking so much time to finish?</button>
<div class="panel">
  <p>One of the things we have stressed in the making of Pratham is making it by ourselves. Hence we have not bought any of the Sub-Systems of the shelf, unlike other student satellites. This is not because we dont have the money, but we want to learn and hence dont want to do it. Secondly, we donot have pre-exisiting facility for satellite making. Hence we are anticipating our needs at each design stage and are setting up our lab simultaneously with building the satellite. It is but natural therefore that we will take more time.</p>
</div> -->

<button class="accordion">Q7. What is the budget of Pratham? </button>
<div class="panel">
  <p>Pratham costs about Rs 1.5 crores, including launch. We have recieved lot of help in this regard both from IIT Bombay and ISRO.</p>
</div>

<button class="accordion">Q8. Why such a large weightage to Flight Model in Pratham's Mission Success? </button>
<div class="panel">
  <p>Since our main objective is learning, we want to give it enough  weightage  in our success criteria too. We consider learning perfect when the Flight Model is accepted for launch.</p>
</div>

<button class="accordion">Q9. Why the addition of copyright rule to Pratham's documents?</button>
<div class="panel">
  <p>We have stressed in spreading our knowledge among the student community and giving students free access to our documents. But unfortunately it has backfired and some groups do not give us credit after having used our documents. Hence we will still give free access to the documents, only after a hardcopy of the copyright rule is sent to us by the student team.</p>
</div>

<button class="accordion">Q10. Why does Pratham not make all its Design documents opensource so that the students can benefit from them?</button>
<div class="panel">
  <p>The Pratham team believes that giving budding satellite teams access to PDR or CDR documents&nbsp;kills their desire to learn and takes away the learning from the design process itself. We have already seen it happen a couple of time and don't want this to happen again. We are more than willing to help student satellite teams and believe that even we can learn from their efforts.&nbsp;Hence, our request to all the student satellite teams is that they first prepare their own conceptual design documents, understand the intricacies of the satellite as a system and then approach us for the documents.&nbsp;</p>
</div>


</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<br><br><br>
</div>

<?php include 'footer.php'; ?>