<?php include 'include/header.php'; ?>
<style type="text/css">
  .header_top,
  .sidebar
  {
    display: none;
  }
  .login_page {
  padding-top: 14%;
  padding-bottom: 14%;
}
</style>
<div class="login_page">
      <div class="login_logo text-center">
         <img src="img/logo.png">
      </div>
      <div class="login_box1">
         <div class="login_hedding">
            <h4>Login</h4>
         </div>
                  <form role="form" id="login_form1" action="https://www.webwiders.com/WEB01/Zirish/Admin/login/do_login" method="post">
         <div class="formn_me">
            <div class="form-group">
               <label>Email </label>
               <div class="icon_us">
                  <i class="la la-envelope"></i>
                  <input type="text" name="email" placeholder="Enter Email" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label>Password</label>
               <div class="icon_us">
                  <i class="la la-unlock"></i>
                  <input type="password" name="password" placeholder="Password" class="form-control">
               </div>
            </div>
            <div class="remnper">
               <!-- <div class="pull-left">
                  <label class="checkbox-inline">
                  <input type="checkbox" name="remember" id="remember" value="1">
                  Remember Me
                  </label>
               </div> -->
               <div class="pull-right">
                  <a href="https://www.webwiders.com/WEB01/Zirish/Admin/forget-password">
                  Forgot password?
                  </a>
               </div>
            </div>
            <div class="btnloggib ">
               <button type="submit" class="btn btn_theme2 btn-lg btn-block">Login</button>
            </div>
         </div>
      </form>
      </div>
      <!-- <div class="donit">
         <p>
            if you don't have account? <a href="jvascript:void(0)" onclick="alert('coming soon!')" >Sign Up</a>
         </p>
      </div> -->
   </div>
<?php include 'include/footer.php'; ?>