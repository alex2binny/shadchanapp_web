<?php include 'top.html'; ?>

  <body>


    <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '1781961102019556',
        xfbml      : true,
        version    : 'v2.9'
      });
      FB.AppEvents.logPageView();
      FB.getLoginStatus(function(response) {

        if (response.status === 'connected') {
          // the user is logged in and has authenticated your
          // app, and response.authResponse supplies
          // the user's ID, a valid access token, a signed
          // request, and the time the access token
          // and signed request each expire
          var uid = response.authResponse.userID;
          var accessToken = response.authResponse.accessToken;
        } else if (response.status === 'not_authorized') {
          // the user is logged in to Facebook,
          // but has not authenticated your app
        } else {
          // the user isn't logged in to Facebook.
        }
      });
    };




  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>





    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">



          <!--

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Cover</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

        -->

          <div id="mainTextBox" class="inner cover well well-lg" >
            <h1 class="cover-heading">You are the Shadchan</h1>
          </br>
            <p class="lead">Tinder is being turned on its keppeleh,</br>in this new twist where friends are connecting friends!</p>
            <h3><small>Log in with Facebook</small></h3>

          <div class="fb-login-button" data-width="150" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>

          <br><br><br>


            <form>
              <div class="form-group">
                <div id="formGroupExampleInput3">
                  <a class="btn btn-lg btn-primary" href="signup.php">Next Page</a>
                </div>
              </div>
            </form>



          </div>


<?php include 'bottom.html'; ?>
