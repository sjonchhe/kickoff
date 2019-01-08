
<!doctype html>
<html>
<head>
  <title>Getting access to user credentials</title>

  </head>
  <body>
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
				document.getElementById('status').innerHTML='We are connected.';
			
			}
			else if (response.status === 'not_authorized')
			{
				document.getElementById('status').innerHTML = 'We are not logged in ';
			}
			else 
			{
					document.getElementById('status').innerHTML='You are not logged in to your facebook account';
			}
	});
			
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
				document.getElementById('status').innerHTML='We are connected.';
					
				
			}
			else if (response.status === 'not_authorized')
			{
				document.getElementById('status').innerHTML = 'We are not logged in ';
			}
			else 
			{
					document.getElementById('status').innerHTML='You are not logged in to your facebook account';
			}
	});
	}
	
	/*FOR EXTRACTION OF USER DETAILS*/
	function info(){
		FB.api('/me','GET',{fields: 'first_name,last_name,name,id,picture,email'}, function(response){
				document.getElementById('status').innerHTML = response.picture.data.url;
				document.getElementById('status').innerHTML = response.first_name;
				document.getElementById('status').innerHTML = response.last_name;
				document.getElementById('status').innerHTML = '<img src="'+response.picture.data.url+'">';
        	document.getElementById('fname').innerHTML = response.first_name;
          document.getElementById('lname').innerHTML = response.last_name;
          document.getElementById('uname').innerHTML = response.name;
          document.getElementById('email').innerHTML = response.email;
				
				
				
				
		});
	
	}
	
   </script>
    

	<div id="status"></div>
	<button onclick="info()">Get Info</button>
	<button onclick="login()">Login</button>
	<br>	
	<div id="fname"></div>
	<div id="lname"></div>
	<div id="uname"></div>
	
	
	<div id="email"></div>

  </body>
  </html>
