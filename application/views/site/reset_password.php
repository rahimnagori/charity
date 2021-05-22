<?php include 'include/header.php'; ?>
<div class="inner_cont">
  <div class="container">
    <p>
      <span><a href="#">Home</a></span>
      <span>Reset</span>
    </p>
  </div>
</div>
<div class="pad_sec logoi_sec">
  <div class="container">
    <div class="logi_des">
      <h1><?=$this->config->item('PROJECT');?></h1>
      <div class="login_box1">
        <div class="login_hedding">
          <h4>Reset Password</h4>
        </div>
        <div class="formn_me">
          <div class="form-group">
            <label>Email </label>
            <div class="icon_us">
              <i class="la la-envelope"></i>
              <input type="text" name="" placeholder="Email" class="form-control">
            </div>
          </div>
          <div class="btnloggib ">
            <a class="btn btn_theme2 btn-lg btn-block" href="">Rest</a>
          </div>
        </div>
      </div>
      <div class="donit">
        <p>
          Or you can <a href="<?=site_url('Login');?>">Login</a> to your account.
        </p>
      </div>
    </div>
  </div>
</div>
<?php include 'include/footer.php'; ?>