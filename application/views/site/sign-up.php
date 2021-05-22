<?php include 'include/header.php'; ?>

<link rel="stylesheet" href="<?=site_url('assets/site/telInput/');?>intlTelInput.css">

<div class="inner_cont">
  <div class="container">
    <p>
      <span><a href="#">Home</a></span>
      <span>Sign Up</span>
    </p>
  </div>
</div>
<div class="pad_sec sign_up_sec">
  <div class="container">
    <div class="logi_des">
      <h1>Welcome to <?=$this->config->item('PROJECT');?></h1>
      <div class="login_box1">
        <div class="login_hedding">
          <h4>Sign Up</h4>
        </div>
        <div class="tab-contents">
          <div id="Customers" class="tab-pane active">
            <div class="formn_me">
              <form id="signupForm" name="signupForm" onsubmit="register(event);" >
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>First Name </label>
                      <div class="icon_us">
                        <i class="la la-user"></i>
                        <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control" required >
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Last Name </label>
                      <div class="icon_us">
                        <i class="la la-user"></i>
                        <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control" required >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email </label>
                      <div class="icon_us">
                        <i class="la la-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" required >
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Phone </label>
                      <div class="icon_us">
                        <i class="la la-mobile"></i>
                        <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" required >



                        <!--
                        <input type="tel" class="form-control" name="phone" required="" id="phone" >
                        <span id="valid-msg" class="hide">✓ Valid</span>
                        <span id="error-msg" class="hide"></span>
                        -->




                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Password</label>
                      <div class="icon_us">
                        <i class="la la-unlock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" required >
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <div class="icon_us">
                        <i class="la la-unlock"></i>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control" required >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12" id="responseMessage">
                  </div>
                </div>
                <div class="btnloggib ">
                  <button type="submit" class="btn btn_theme2 btn-lg btn-block btn_submit" >Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="donit">
        <p>
          if you have account? <a href="<?=site_url();?>">Login</a>
        </p>
      </div>
    </div>
  </div>
</div>

<?php include 'include/footer.php'; ?>

<script src="<?=site_url('assets/site/telInput/');?>intlTelInput.js" ></script>

<script>
  $("#first_name").val('Rahim');
  $("#last_name").val('Nagori');
  $("#email").val('turgut@mailinator.com');
  $("#phone").val('9494949494');
  $("#password").val('12312312');
  $("#confirm_password").val('12312312');
  function register(e){
    e.preventDefault();
    if(check_form()){
      $.ajax({
        url: BASE_URL + 'Organization_Join',
        type: 'POST',
        data: new FormData($('#signupForm')[0]),
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function( xhr ) {
          // xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
          $(".btn_submit").attr('disabled' , true);
          $(".btn_submit").html(LOADING);
          $("#responseMessage").html('');
          $("#responseMessage").hide();
        }
      })
      .done(function(response) {
        response = JSON.parse(response);
        if(response.status == 1){
          $('form#signupForm').trigger("reset");
        }
        $("#responseMessage").html(response.responseMessage);
        $("#responseMessage").show();
      })
      .fail(function(error) {
        alert( "Server error, please try again later." );
      })
      .always(function() {
        $(".btn_submit").attr('disabled' , false);
        $(".btn_submit").html('Submit');
      });
    }
  }

  function check_form(){
    return true;
    /* Check for valid email and both passwords min8 char */
  }

</script>