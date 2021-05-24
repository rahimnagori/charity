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
            <!--
            <div class="balance_detail">
              <div class="box_bl1">
                 <h4>Your Balance</h4>
                 <h1>$8000</h1>
                 <h5>Tip Amount $120</h5>
              </div>
            </div>
            -->
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email</label>
                  <span class="form-control"><?=$orgDetails['email'];?></span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Phone</label>
                  <span class="form-control"><?=$orgDetails['phone'];?></span>
                </div>
              </div>
            </div>
            <form id="profileForm" name="profileForm" onsubmit="update_form(event);" >
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>First Name (Representative)</label>
                    <input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?=$orgDetails['first_name'];?>" required >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Last Name (Representative)</label>
                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?=$orgDetails['last_name'];?>" required >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Organization Name</label>
                <input type="text" name="organization_name" placeholder="Organization Name" class="form-control" value="<?=$orgDetails['organization_name'];?>" required >
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="state" placeholder="City" class="form-control" value="" required >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>State</label>
                    <input type="text" name="city" placeholder="State" class="form-control" value="" required >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Teaching</label>
                    <input type="text" name="teaching_staff" placeholder="Teaching Staff" class="form-control" value="" required >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Non-Teaching</label>
                    <input type="text" name="non_teaching_staff" placeholder="Non Teaching Staff" class="form-control" value="" required >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Annual Budget</label>
                    <input type="text" name="annual_budget" placeholder="Annual Budget" class="form-control" value="" required >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Annual Fund Requirements</label>
                    <input type="text" name="annual_fund_requirements" placeholder="Annual Fund Requirements" class="form-control" value="" required >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label><button class="btn btn_theme2 btn-lg">Submit</button></label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'include/footer.php'; ?>

<script>
  function update_form(e){
    e.preventDefault();
    if(check_form()){
      $.ajax({
        url: BASE_URL + 'Organization-Profile-Update',
        type: 'POST',
        data: new FormData($('#profileForm')[0]),
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
          $('form#profileForm').trigger("reset");
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