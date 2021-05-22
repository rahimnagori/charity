<?php include 'include/header.php'; ?>
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
      <h1>Welcome to Donation</h1>
      <div class="login_box1">
        <div class="login_hedding">
          <h4>Sign Up</h4>
        </div>
        <div class="tab_my1">
          <ul class="ul_set">
            <li class="active"><a href="#Customers" data-toggle="tab" aria-expanded="true">Doner  </a></li>
            <li class=""><a href="#Businesse" data-toggle="tab" aria-expanded="false">Organization</a></li>
          </ul>
        </div>
        <div class="tab-content">
          <div id="Customers" class="tab-pane active">
            <div class="formn_me">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>First Name </label>
                    <div class="icon_us">
                      <i class="la la-user"></i>
                      <input type="text" name="" placeholder="First Name" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Last Name </label>
                    <div class="icon_us">
                      <i class="la la-user"></i>
                      <input type="text" name="" placeholder="Last Name" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Address </label>
                <div class="icon_us">
                  <i class="la la-map-marker"></i>
                  <input type="text" name="" placeholder="Address" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email </label>
                    <div class="icon_us">
                      <i class="la la-envelope"></i>
                      <input type="text" name="" placeholder="Email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone </label>
                    <div class="icon_us">
                      <i class="la la-mobile"></i>
                      <input type="text" name="" placeholder="Phone" class="form-control">
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
                      <input type="password" name="" placeholder="Password" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <div class="icon_us">
                      <i class="la la-unlock"></i>
                      <input type="password" name="" placeholder="Confirm Password" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="btnloggib ">
                <button type="submit" class="btn btn_theme2 btn-lg btn-block" >Submit</button>
              </div>
            </div>
          </div>
          <div id="Businesse" class="tab-pane">
            <div class="formn_me">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>First Name </label>
                    <div class="icon_us">
                      <i class="la la-user"></i>
                      <input type="text" name="" placeholder="First Name" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Last Name </label>
                    <div class="icon_us">
                      <i class="la la-user"></i>
                      <input type="text" name="" placeholder="Last Name" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Category </label>
                <div class="icon_us">
                  <i class="la la-list-alt"></i>
                  <select class="form-control">
                    <option>Categry</option>
                    <option>School</option>
                    <option>Masjid</option>
                    <option>Madarsa</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Address </label>
                <div class="icon_us">
                  <i class="la la-map-marker"></i>
                  <input type="text" name="" placeholder="Address" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email </label>
                    <div class="icon_us">
                      <i class="la la-envelope"></i>
                      <input type="text" name="" placeholder="Email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone </label>
                    <div class="icon_us">
                      <i class="la la-mobile"></i>
                      <input type="text" name="" placeholder="Phone" class="form-control">
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
                      <input type="password" name="" placeholder="Password" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <div class="icon_us">
                      <i class="la la-unlock"></i>
                      <input type="password" name="" placeholder="Confirm Password" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="btnloggib ">
                <a class="btn btn_theme2 btn-lg btn-block" href="#">Submit</a>
              </div>
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