<?php include 'include/header.php'; ?>

<div class="dasboadd">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <?php include 'include/sidebar.php'; ?>
      </div>
      <form id="changePasswordForm" name="changePasswordForm" onsubmit="update_password(event);" >
        <div class="col-sm-9">
          <div class="right_box">
            <h4 class="hedding_right">Change Password</h4>
            <div class="card_bodym">
              <div class="form-group">
                <label>Old Password</label>
                <input type="password" name="old_password" placeholder="Old Password" class="form-control" required >
              </div>
              <div class="form-group">
                <label>New Password</label>
                <input type="password" name="password" placeholder="New Password" class="form-control" required >
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" required >
              </div>
              <div class="row">
                <div class="col-sm-12" id="responseMessage">
                </div>
              </div>
              <div class="form-group">
                <label><button class="btn btn_theme btn-lg btn_submit">Submit</button></label>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include 'include/footer.php'; ?>

<script>
  function update_password(e){
    e.preventDefault();
    if(check_form()){
      $.ajax({
        url: BASE_URL + 'Organization-Password-Update',
        type: 'POST',
        data: new FormData($('#changePasswordForm')[0]),
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
          $('form#changePasswordForm').trigger("reset");
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