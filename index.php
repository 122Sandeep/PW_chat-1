<!DOCTYPE html>
<html>
<head>
	<title>PW Chatbot</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="bsjs/bootstrap.min.css">
<script src="bsjs/jquery.min.js"></script>
<script src="bsjs/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/index.css">
<!--  -->
<script> 

$(document).ready(function(){

$(".reg").click(function() {
    $('html, body').animate({
        scrollTop: $(".container-fluid").offset().top
    }, 2000);
});
})

$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});


</script>


</head>


<body>
<!-- LOGIN -->
<div class="jumbotron text-center">
  <h1>PW Chatbot</h1>
  <h2>We welcome you plz login</h2>
  
  <p><br></p> 

<div class="formcenter">
<form method="post" action="login.php">
  <div class="form-group">
    <!-- <label for="email">Email address:</label> -->
    <input type="email" class="form-control customa" id="email" placeholder="Email Address" name="EmAiL">
  </div>
  <div class="form-group">
    <!-- <label for="pwd">Password:</label> -->
    <div ><input type="password" class="form-control customa" id="pwd" placeholder="Password" name="PaSs"></div>
  </div>
  
  <button type="submit" class="btn custom">Login</button>
</form>
</div>

</div>


<div class="container-fluid">
 
<div class="col-sm-8">
 
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->



 <h1>SignUp</h1>
 <form action="php/register.php" method="post">
  <div class="form-group">
    
    <input type="name" class="form-control customa" id="name" placeholder="Your Name" name="reg_name">
  </div><div class="form-group">
    <!-- <label for="email">Email address:</label> -->
    <input type="email" class="form-control customa" id="email" placeholder="Email Address" name="reg_email">
  </div>
  <div class="form-group">
    <!-- <label for="pwd">Password:</label> -->
    <div ><input type="password" class="form-control customa" id="pwd" placeholder="Password" name="reg_pass"></div>

</div>



  
  <button type="submit" class="btn btn-info" id="Registration">Join</button>
  
  </div>
  <div class="col-sm-4"> <span><img src="data:image/jpeg;base64,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"/></span></div>
</form>
</div>

<button style="text-decoration:none"  class="reg"><strong>SIGNUP</strong></button>






</body>
</html>