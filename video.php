<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="css/favicon.ico">

    <title>ShadchanApp - The Shadchan App: Friends Connecting Friends</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/myStuff.css" rel="stylesheet">
    <link href="css/miniProfiles.css" rel="stylesheet">

    <!-- special css for video play -->
    <link href="css/video-back.css" rel="stylesheet">




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


  <body id="mainStuff">
    <div id="fb-root"></div>
    <script>


      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1781961102019556',
          xfbml      : true,
          version    : 'v2.9'
        });
        FB.AppEvents.logPageView();

        //To determine if a user has authenticated your app:
        FB.getLoginStatus(function(response) {
          if (response.status === 'connected') {
            // the user is logged in and has authenticated your
            // app, and response.authResponse supplies
            // the user's ID, a valid access token, a signed
            // request, and the time the access token
            // and signed request each expire
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
            window.location = "../shadchanapp_web/createMatches.php";
          } else if (response.status === 'not_authorized') {
            // the user is logged in to Facebook,
            // but has not authenticated your app
          } else {
            // the user isn't logged in to Facebook.
            //FB.login()
          }
         });




      };


      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1781961102019556";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));




    </script>









    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">









            <div id="mainTextBox" class="inner cover well well-lg" >
              <h1 class="cover-heading">Be a Shadchan, It’s Fun!</h1>
            </br>
              <p class="lead">Tinder is being turned on its keppeleh</br>in this new twist where friends are connecting friends!</p>
              <h3><small>Signup and join the revolution!</small></h3>





              <!-- Facebook login or logout button -->
              <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>




<!--
              <form>
                <div class="form-group">
                  <div id="formGroupExampleInput3">
                    <a class="btn btn-lg btn-primary" href="signup.php">Facebook</a>
                    <a class="btn btn-lg btn-primary" href="video.php">Video</a>
                  </div>
                </div>
              </form>
-->

            </div>


            <video autoplay loop id="video-background" muted>
              <source src="videos/Good-Mood.mp4" type="video/mp4">
            </video>






<?php include 'bottom.html'; ?>
