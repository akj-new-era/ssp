<?php $title = 'Contact Us'; include 'header.php'; ?>
<section class="about-head">
    <div class="container-fluid">
        <div class="about-title">
            <h1>Contact Us</h1>
        </div>
    </div>
</section>


<style>

@import url(//fonts.googleapis.com/css?family=Six+Caps|Open+Sans:400,300,600);


h2 {
  font: 300 33px/40px ;
  font-style: "RocknRoll One";
  font-size: 24px;
  color: #ffffff;
  font-weight: bold;
  margin: 0 0 20px;
}
h3 {
  /* font: 13px/20px 'Open Sans', sans-serif; */
  font-style: "Montserrat";
  color: #ffffff;
  margin: 0 0 6px;
  font-size:18px;
}
p {
  margin-bottom: 24px;
  font-style: "Montserrat";
}

hr {
    background-color: #51596d;
    border: none;
    height: 1px;
    margin: 0 0 20px;
}

.contact {
  padding: 30px 30px 30px 30px;
  color: #ffffff;
  width: 400px;
  height: 400px;
  /* background-color: #14163D; */
  background-color: #212A3A;
  margin: 20px auto;
  /* margin-top: 45%; */
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  /* box-shadow */
}
.prefix {
  width: 100%;
  display: inline-block;

}
.email {
  color: #ffffff;
  margin-left: 5px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.email:hover {
  color: #ffffff;
  text-decoration: none;
}


*{
  /* margin: 0;
  padding: 0;*/
  box-sizing: border-box;
  outline: none; 
  font-family: 'Montserrat';
  font-size: 18px;
}

body{
  
  height: 100vh;
}

.wrapper{
  position: absolute;
  margin-top: 5%;
  /*
  left: 50%;
  transform: translate(-50%, -50%); */
  width: 200%;
  max-width: 550px;
  height:400px;
  /* background: rgba(0,0,0,0.8); */
  padding: 20px;
  border-radius: 5px;
  /* box-shadow: 0 0 10px rgba(0,0,0,0.3);  */
  box-shadow: 0 0 10px #212A3A; 
}

.wrapper .title h1{
  color: #212A3A;
  text-align: center;
  margin-bottom: 25px;
}

.contact-form{
  display: flex;
}

.input-fields{
  display: flex;
  flex-direction: column;
  margin-right: 4%;
}

.input-fields,
.msg{
  width: 48%;
}

.input-fields .input,
.msg textarea{
  margin: 10px 0;
  background: transparent;
  border: 0px;
  border-bottom: 2px solid #212A3A;
  padding: 10px;
  color: #212A3A;
  width: 100%;
}

.msg textarea{
  height: 212px;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #212A3A;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #212A3A;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: #212A3A;
}

.sent-notification {
  color: #2a2A3A;
}

.btn1 {
    background: #212A3A;
    text-align: center;
    padding: 15px;
    width: 100%;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
}

.btn1:hover {
  border: 2px solid #212A3A;
  background: none;
  color: #212A3A;
  transition: 0.3s ease;
}

@media screen and (max-width: 600px){
  .contact-form{
    flex-direction: column;
  }
  .msg textarea{
    height: 80px;
  }
  .input-fields,
  .msg{
    width: 100%;
  }
  .wrapper {
    width: 100%;
    height: auto;
  }
  .contact {
    width: 100%;
    margin: 10px 0;
  }
}


.flex-container {
  display: flex;
  flex-direction: row;
  font-size: 30px;
  text-align: center;
}

.flex-item-left {
  /* background-color: #f1f1f1; */
  padding: 10px;
  flex: 50%;
}

.flex-item-right {
  /* background-color: dodgerblue; */
  padding: 10px;
  flex: 50%;
}

/* Responsive layout - makes a one column-layout instead of two-column layout */
@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
    margin-bottom: 600px;
  }
}
</style>
</head>
<body>
<br><br>
<div class="flex-container">
  <div class="flex-item-left">
  <div class="contact">
        <h2 style="font-family: RocknRoll One;">
        Shaun Zacharia
        </h2>
        <!-- <hr> -->
        <h3>
       Project Manager<br>
       Student Satellite Program, IIT Bombay<br><br>
        </h3>
        <p>
        <span class="prefix">
        <i class="fa fa-phone" style="padding-right:15px;"></i>
            <span>+91-22-2576-4147</span> <br><br>
            <i class="fa fa-envelope" style="padding-right:15px;"></i>
             <span>iitbssp@iitb.ac.in</span> <br><br>
             <!-- <span style="padding-left:25px;"> -->
             <i class="fa fa-map-marker" style="padding-right:15px; padding-left:25px;"></i> 
            <span>Student Satellite Lab</span> <br>
            Aerospace Engineering Department<br> IIT Bombay, Powai
        </span>
        </p>
      </div>
  </div>
  <div class="flex-item-right">
  <div class="row">
            <div class="col-md-6">
            <div class="wrapper">
  <div class="title" >
    <h2 style="color: #212A3A; margin-top: 2%; font-family:RocknRoll One; ">Reach Out To Us</h2>
  </div>
  <div class="contact-form" id="myForm">
    <div class="input-fields">
      <input id="name" type="text" class="input" placeholder="Name">
      <input id="email" type="text" class="input" placeholder="Email Address">
      <input type="text" class="input" placeholder="Phone">
      <input id="subject" type="text" class="input" placeholder="Subject">
      <h4 class="sent-notification"></h4>
    </div>
    <div class="msg">
      <textarea id="body" placeholder="Message"></textarea>
      <button type="button" onclick="sendEmail()" value="Send an Email" class="btn1">send</button>
    </div>
  </div>
</div>
            </div>
        </div>

  </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript">
  function sendEmail(){
    var name = $("#name");
    var email = $("#email");
    var subject = $("#subject");
    var body = $("#body");

    if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
      $.ajax({
        url: 'sendEmail.php',
        method: 'POST',
        dataType: 'json',
        data:{
          name: name.val(),
          email: email.val(),
          subject: subject.val(),
          body: body.val()
        }, success: function(response){
          $('#myForm')[0].reset();
          $('.sent-notification').text("Message Sent Successfully");
        }
      });
    }
  }
  function isNotEmpty(caller){
    if(caller.val() == ""){
      caller.css('border','1px solid red');
      return false;
    }
    else
    {
      caller.css('border','');
      return true;
    }
  }
</script>

</html>
<?php include 'footer.php'; ?>