<?php

session_Start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  include_once('class/classuser.php');
  $user=new User();
  $user->userLogin($username,$upassword);
}

 ?>




<!doctype html>
<html>
<head>
  <title>User log</title>

  <meta charset="utf-8"/>
  <meta name="author" content="Sandesh Jonchhe">

  <meta name="description" content="Index page by Sandesh Jonchhe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="icon" type="image/png" href="../gallery/b.png">
<!--JS FILES-->

<!--CSS Files-->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="../assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="../assets/css/material-kit.css" type="text/css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../assets/css/dashstyle.css"  >
</head>

<body style="margin:0px;">
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '121861798404001',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.9'
    });


   /*for checking login status*/
	FB.getLoginStatus(function(response)
	{
			if (response.status === 'connected')
			{
				document.getElementById('status').innerHTML='<button onclick="info()" class="btn btn-default" style="background:#3B5998;margin-left:-55px;">Get your Facebook details</button>';//we are not connected

			}
			else if (response.status === 'not_authorized')
			{
				document.getElementById('status').innerHTML = '<span style="color:white;">Via</span>';//we are not logged in
			}
			else
			{
					document.getElementById('status').innerHTML='You are not logged in to your facebook account';
			}
	});
			FB.AppEvents.logPageView();
	};


  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk')
   );

	function login()
	{
		FB.login(function(response){
			if (response.status === 'connected')
			{
				document.getElementById('status').innerHTML='<button onclick="info()" class="btn btn-default" style="background:#3B5998;margin-left:-55px;">Get your Facebook details</button>';
        //we are connected

			}
			else if (response.status === 'not_authorized')
			{
				document.getElementById('status').innerHTML = '<span style="color:white;">Via</span>';//we are not logged in
			}
			else
			{
					document.getElementById('status').innerHTML='You are not logged in to your facebook account';
			}
	});
	}

	/*FOR EXTRACTION OF USER DETAILS*/
	function info(){
		FB.api('/me','GET',{fields: 'first_name,last_name,name,id,picture'}, function(response){
				document.getElementById('status').innerHTML = response.picture.data.url;
				document.getElementById('status').innerHTML = response.first_name;
				document.getElementById('status').innerHTML = response.last_name;
				document.getElementById('status').innerHTML = '<img src="'+response.picture.data.url+'">';
        	document.getElementById('fname').innerHTML = response.first_name;
          document.getElementById('lname').innerHTML = response.last_name;
          document.getElementById('uname').innerHTML = response.name;
          document.getElementById('fname').innerHTML = response.first_name;



		});

	}

   </script>


<div class="container_fluid">

    <div id="wrapper"   >
       <div id="login" class="col-md-4 loginform animate" ><Center>
          <h4>Log In</h4>


            <!-- START- FORM FOR LOGIN-->
            <form action="" method="POST">
            <div class="content">
                  <div class="form-group label-floating">
		                    <label class="control-label">UserName</label>

                        <input type="text" class="form-control" name="username" required>
	                </div>


                <div class="form-group label-floating">
                  <label class="control-label">Password</label>
                  <input type="password" class="form-control" name="upassword" required>
                </div>

<br>
                <div>
                  <input type="submit" value="Login" class="btn btn-default">
                </div>
<br>
                 Not a member yet ?  <span onClick="openregister()" style="cursor:pointer;text-decoration:underline;color:blue;">
                 Join us
               </span>
                </form>
                <div class="form-group label-floating" style="font-size:12px;color:#555555;">
                    * if you havent been approved by the admin,then you cannot login at the moment.Contact the admin for userlogin apporval
                </div>

                <!--END- FORM FOR LOGIN-->
            </div>

</div>

<!--START-- FORM FOR REGISTERING-->
    <div id="register" class="registerform col-md-4"><center>

        <form action="userreg.php" method="POST" enctype="multipart/form-data" class="color:black;background:red;">
        <div class="social-line" >
          <h4 style="margin-left:-60px;color:white;">Sign Up</h4>
                  <div class="collapse navbar-collapse"  >
                  <ul class="nav navbar-nav "  >
                    <div id="status"></div>
                      <li>
                          <a href="https://twitter.com/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                    <i class="fa fa-twitter"></i>
                  </a>
                      </li>
                      <li>
                          <a href="#"  onclick="login()" class="btn btn-simple btn-white btn-just-icon">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                      </li>
                <li>
                          <a href="https://www.instagram.com/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                    <i class="fa fa-instagram"></i>
                  </a>
                      </li>
                  </ul>
                </div>
        </div>

        <p class="text-divider">Or Be Classical</p>

        <div class="content">
            <label id="erroruname"></label>
              <div class="form-group label-floating">

                    <label class="control-label">UserName</label>
                  <i class="icon-user"></i>

                    </span>
                    <textarea type="text" class="form-control" name="uname" id="uname" required autofocus></textarea>
              </div>
              <label id="errorfname"></label>
              <div class="form-group label-floating">

                    <label class="control-label">First Name</label>

                    <textarea type="text" class="form-control" name="fname" id="fname" required ></textarea>

              </div>
                <label id="errorlname"></label>
              <div class="form-group label-floating">

                    <label class="control-label">Last Name</label>

                    <textarea type="text" class="form-control" name="lname" id="lname" required ></textarea>
              </div>

              <div class="form-group label-floating">
                    <label class="control-label">Email</label>

                    <input type="email" class="form-control" name="uemail" id="uemail" required>
              </div>
                <label id="errorcontact"></label>
              <div class="form-group label-floating">
                    <label class="control-label">Contact</label>

                    <input type="number" class="form-control" name="ucontact" id="ucontact" required>
              </div>
                <label id="errorpassword"></label>
               <div class="form-group label-floating">
                  <label class="control-label">Password</label>
                  <input type="password" class="form-control" name="upword" id="upword" required>
                </div>
                  <label id="errorrpword"></label>
                <div class="form-group label-floating">
                  <label class="control-label">Re-type Password</label>
                  <input type="password" class="form-control" name="urpword" id="urpword" required>
                </div>
                  <label id="erroraddress"></label>
              <div class="form-group label-floating">
                    <label class="control-label">Address</label>

                    <input type="text" class="form-control" name="uaddress" id="uaddress" required>
              </div>
              <div class="label-floating">
                    <label class="control-label ">Upload</label>


                    <br>
                    <input type="file" name="upath" id="upath">
              </div>


              <br>


            <div>
              <input type="submit" value="Sign Up" class="btn btn-default" onClick="reutrn validation()" >
            </div>
<br>
  									Already a member ?
                    <span class="loginlink" onClick="openlogin()" style="cursor:pointer;text-decoration:underline;color:blue;">
  									 <a href="#wrapper" >Log in </a>
  								</span>
            </form>


        </div>
    </div>
  </div>

</div>
<script>
function validation()
{
  var uname= $('#uname').val();
  var fname = $('#fname').val();
	var check_fname = /^[a-zA-Z]*$/
	var lname = $('#lname').val();
	var check_lname = /^[a-zA-Z]*$/
  var email = $('#uemail').val();
  var check_uemail =  /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i
	var contact = $('#ucontact').val();
	var check_ucontact = /^[0-9]*$/
	var upword = $('#upword').val();
	var urpword = $('#urpword').val();

  $('erroruname').html("");
  $('errorfname').html("");
	$('errorlname').html("");
	$('erroruemail').html("");
	$('errorucontact').html("");
	$('errorupword').html("");
	$('errorurpword').html("");

  if (uname=="")
  {
   $('#erroruname').html("please enter Username");
   return false;
  }
  if (fname=="")
  {
   $('#errorfname').html("please enter valid First Name");
   return false;
  }
  if (lname=="")
  {
   $('#errorlname').html("please enter valid Last name");
   return false;
  }
  if (uemail=="")
  {
   $('#erroruemail').html("please entervalid Email Address");
   return false;
  }
  if (ucontact=="")
  {
   $('#errorucontact').html("please enter ur contact details");
   return false;
  }
  if(upword=='')
	{
		$('#errorupword').html("please enter password");
		return false;
	}
	if(upword.length<8)
	{
	$('#errorupword').html(" Password too short ");
	return false;
	}
		 if ($('#upword').val() != $('#urpword').val())
	 {
    $('#match').html('password doesnt match');
	return false;
	}






}

</script>
<script src="../js/bootstrap.min.js">
</script>
<script src="../assets/js/material.min.js">
</script>
<script src="../assets/js/nouislider.min.js">
</script>
<script src="../assets/js/bootstrap-datepicker.js">
</script>
<script src="../assets/js/material-kit.js">
</script>
<script src="../jquery/jquery-3.2.0.min.js">
</script>
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
function openregister()
{
document.getElementById('register').style.display="block";
document.getElementById('login').style.display="none";

}
function openlogin()
{
document.getElementById('login').style.display="block";
document.getElementById('register').style.display="none";

}

</script>
</body>
</html>
