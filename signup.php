<?php include 'top.html'; ?>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div id="mainTextBox" class="inner cover well well-lg" >
            <h1 class="cover-heading">Welcome!</h1>

            <br />

            <p class="lead">We are creating a robust set of tools to allow anyone to be a successful shadchan.</p>

            <h2>Yes, Even You!</h2>

            <br />

            <form action="createMatches.php">
              <div class="form-group">
                <div id="formGroupExampleInput1">

                  <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-warning" style="pointer-events: none;">
                      <input type="radio" name="options" id="option1" autocomplete="off" required /> Are You Dating?
                    </label>
                    <label class="btn btn-primary active">
                      <input type="radio" name="options" id="option2" autocomplete="on" /> Yes
                    </label>
                    <label class="btn btn-primary">
                      <input type="radio" name="options" id="option3" autocomplete="off" /> No
                    </label>
                  </div>

                  <br><br><br>

                    <div class="btn-group" >
                    <label>
                      Birthday: <input type="date" name="birthday" required />
                    </label>
                  </div>

                  <br><br><br>

                  <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-warning" style="pointer-events: none;">
                      <input type="radio" name="options" id="gender-select" autocomplete="off" required /> Gender:
                    </label>
                    <label class="btn btn-info active">
                      <input type="radio" name="options" id="gender-select-male" autocomplete="on" /> Dude
                    </label>
                    <label class="btn btn-danger">
                      <input type="radio" name="options" id="gender-select-female" autocomplete="off" /> Gal
                    </label>
                  </div>



                </div>
                <div id="formGroupExampleInput2">
                  <h3><small>Signup and join the revolution!</small></h3>
                  <input type=submit class="btn btn-lg btn-success" value="Get Started" />
                </div>
              </div>
            </form>
          </div>
<?php include 'bottom.html'; ?>
