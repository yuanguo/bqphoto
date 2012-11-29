<!DOCTYPE html> 
<html> 
<head> 
	<title>Page Title</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0-rc.2/jquery.mobile-1.2.0-rc.2.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0-rc.2/jquery.mobile-1.2.0-rc.2.min.js"></script>
	
	<?php
 		$cache_expire = 60*60*24*365;
 		header("Pragma: public");
	 	header("Cache-Control: max-age=".$cache_expire);
 		header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$cache_expire) . ' GMT');
 	?>
 	
 	<script src="http://connect.facebook.net/en_US/all.js"></script>
</head> 

<body> 
<div data-role="page">
	<div class= "ui-controlgroup-controls" style="margin : 50px 20px">
		<!-- Logo img -->
		<div style="margin:10px auto; width: 288px; height: 200px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;" data-cid="image1" class="codiqa-control moveable">
        	<img src="http://codiqa.com/static/images/v2/image.png" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px">
      	</div>
      	
		<!-- login button -->
		<div id="fb-root"></div>
		<script>
  			window.fbAsyncInit = function() {
    			// init the FB JS SDK
   				FB.init({
      				appId      : '381618945259278', // App ID from the App Dashboard
      				channelUrl : 'https://apps.facebook.com/bqphoto', // Channel File for x-domain communication
      				status     : true, // check the login status upon init?
      				cookie     : true, // set sessions cookies to allow your server to access the session?
      				xfbml      : true  // parse XFBML tags on this page?
    			});

		    	// Additional initialization code such as adding Event Listeners goes here
  			};

		  // Load the SDK's source Asynchronously
		  // Note that the debug version is being actively developed and might 
		  // contain some type checks that are overly strict. 
		  // Please report such bugs using the bugs tool.
		  (function(d, debug){
		     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement('script'); js.id = id; js.async = true;
		     js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
		     ref.parentNode.insertBefore(js, ref);
		   }(document, /*debug*/ false));

		   function login () {
			   FB.login (function(response)) {
				   if (response.authresponse) {
					   // connected
				   } else {
					   // cancelled
				   }
			   }
		   }
		</script>
		<div class="ui-controlgroup-controls" style="margin-top: 40px">
			<input type="button" value="Log In With Facebook Account" name="btnLogin" id="btnLogin"/>
		</div>
	</div>
</div><!-- /page -->
</body>
</html>