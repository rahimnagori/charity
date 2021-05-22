<?php include 'include/header.php'; ?>

<div class="dasboadd">

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <?php include 'include/sidebar.php'; ?>
      </div>
      <div class="col-sm-9">
        <div class="right_box">
          <h4 class="hedding_right">Profile</h4>
          <div class="card_bodym">
            <!--  <div class="balance_detail">
              <div class="box_bl1">
                 <h4>Your Balance</h4>
                 <h1>$8000</h1>
                 <h5>Tip Amount $120</h5>
              </div>
              </div> -->
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?=$orgDetails['first_name'];?>" required >
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?=$orgDetails['last_name'];?>" required >
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Organization Name</label>
              <input type="text" name="organization_name" placeholder="Organization Name" class="form-control" value="<?=$orgDetails['organization_name'];?>" required >
            </div>
            <div class="form-group">
              <label>Email</label>
              <span class="form-control"><?=$orgDetails['email'];?></span>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <span class="form-control"><?=$orgDetails['phone'];?></span>
            </div>
            <div class="form-group">
              <label><button class="btn btn_theme2 btn-lg">Submit</button></label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'include/footer.php'; ?>