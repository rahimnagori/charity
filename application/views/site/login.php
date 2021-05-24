<?php include 'include/header.php'; ?>
<div class="inner_cont">
  <div class="container">
    <p>
      <span><a href="#">Home</a></span>
      <span>Login</span>
    </p>
  </div>
</div>
<div class="pad_sec logoi_sec">
  <div class="container">
    <div class="logi_des">
      <h1>Welcome to <?=$this->config->item('PROJECT');?></h1>
      <div class="login_box1">
        <div class="login_hedding">
          <h4>Login</h4>
        </div>
        <div class="formn_me">
          <form id="loginForm" name="loginForm" onsubmit="login(event);" >
            <div class="form-group">
              <label>Email </label>
              <div class="icon_us">
                <i class="la la-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Email" class="form-control" required >
              </div>
            </div>
            <div class="form-group">
              <label>Password</label>
              <div class="icon_us">
                <i class="la la-unlock"></i>
                <input type="password" id="password" name="password" placeholder="Password" class="form-control" required >
              </div>
            </div>
            <div class="remnper">
              <div class="pull-left">
                <!--
                <label class="checkbox-inline">
                <input type="checkbox" name="remember" id="remember" value="1">
                Remember Me
                </label>
                -->
              </div>
              <div class="pull-right">
                <a href="<?=site_url('Forget');?>">
                  Forgot password?
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12" id="responseMessage">
                <?=$this->session->flashdata('email_verified');?>
              </div>
            </div>
            <div class="btnloggib ">
              <button type="submit" class="btn btn_theme2 btn-lg btn-block btn_submit" >Login</button>
            </div>
          </form>
        </div>
      </div>
      <div class="donit">
        <p>
          if you don't have account? <a href="<?=site_url('Join');?>">Sign Up</a>
        </p>
      </div>
    </div>
  </div>
</div>
<?php include 'include/footer.php'; ?>

<script>
  $("#email").val('turgut@mailinator.com');
  $("#password").val('12312312');
  function login(e){
    e.preventDefault();
    if(check_form()){
      $.ajax({
        url: BASE_URL + 'Organization_Login',
        type: 'POST',
        data: new FormData($('#loginForm')[0]),
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
          $('form#loginForm').trigger("reset");
          localStorage.setItem('email', response.organizationData.email);
          localStorage.setItem('phone', response.organizationData.phone);
          localStorage.setItem('organization_id', response.organizationData.organization_id);
          window.location.href = response.redirect;
        }
        $("#responseMessage").html(response.responseMessage);
        $("#responseMessage").show();
      })
      .fail(function(error) {
        alert( "Server error, please try again later." );
      })
      .always(function() {
        $(".btn_submit").attr('disabled' , false);
        $(".btn_submit").html('Login');
      });
    }
  }

  function check_form(){
    return true;
    /* Check for valid email and both passwords min8 char */
  }
</script>