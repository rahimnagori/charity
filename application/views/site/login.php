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
          <div class="form-group">
            <label>Email </label>
            <div class="icon_us">
              <i class="la la-envelope"></i>
              <input type="text" name="" placeholder="Email" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="icon_us">
              <i class="la la-unlock"></i>
              <input type="password" name="" placeholder="Password" class="form-control">
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
          <div class="btnloggib ">
            <button type="submit" class="btn btn_theme2 btn-lg btn-block btn_submit" >Login</button>
          </div>
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