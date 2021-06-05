<footer class="footer_sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="footer_box">
          <h4>About Us</h4>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit posuere diam facilisis metus ultricies tristique. Vestibulum feugiat gravida imperdiet suspendisse auctor duis ornare accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit posuere diam facilisis metus ultricies tristique. 
          </p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="footer_box">
          <h4>Know Link</h4>
          <div class="link">
            <span><a href="#">Home</a></span>
            <span><a href="#">About</a></span>
            <span><a href="#">Course</a></span>
            <span><a href="#">Contact Us</a></span>
            <span><a href="#">Terms & Conditions</a></span>
            <span><a href="#">Privacy Policy</a></span>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="footer_box">
          <h4>Contact Info</h4>
          <div class="cont_us">
            <ul class="ul_set">
              <li><i class="la la-phone"></i> +91 7389110444</li>
              <li><i class="la la-envelope"></i> info@rahimnagori.com</li>
              <li><i class="la la-map-marker"></i>  ujjain m.p</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copy_right">
    <div class="container">
      <p>
        Copyrights © <?=$this->config->item('PROJECT');?> <?=date('Y');?>. All rights reserved.
      </p>
    </div>
  </div>
</footer>

<!-- modal us -->

<a href="javascript:void(0);" class="btn btn_theme2" data-toggle="modal" data-target="#Add_polls">modal</a>

<!-- Modal -->
<div class="modal fade " id="Add_polls" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

     <div class="modal-header">

      <h4 class="modal-title">Add Poll</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="la la-times-circle"></i></span></button>

        

      </div>

      <div class="modal-body">

        <div class="optio_raddipo">
            <div class="form-group">
              <label class="radio"> First Choose 
                <input type="radio" checked="checked" name="is_company">
                <span class="checkround"></span>
              </label>
              <input type="text" name="" class="form-control" value="Option 1">
            </div>
            <div class="form-group">
              <label class="radio"> Second Choose 
                <input type="radio"  name="is_company">
                <span class="checkround"></span>
              </label>
              <input type="text" name="" class="form-control" value="Option 1">
            </div>
            <div class="form-group">
              <label class="radio"> Third Choose
                <input type="radio"  name="is_company">
                <span class="checkround"></span>
              </label>
              <input type="text" name="" class="form-control" value="Option 1">
            </div>
            <div class="form-group">
                <label class="check ">Scheduling Date
    <input type="checkbox" name="Scheduling_dtae" id="MyCheckBox">
  <span class="checkmark"></span>
</label>
            </div>
           
            

            <div class="form-group">
              <a href="#" class="btn btn_theme2 btn-lg">Submit</a>
            </div>
        </div>

      </div>

      

    </div>

  </div>

</div>
<!-- Modal close-->
<!-- modal us -->

<script type="text/javascript" src="<?=site_url('assets/site/');?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets/site/');?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets/site/');?>js/owl.carousel.js"></script>
<script type="text/javascript" src="<?=site_url('assets/site/');?>js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=site_url('assets/site/');?>js/custom.js"></script>

<script>
  const BASE_URL = "<?=site_url();?>";
  const LOADING = "<i class='fa fa-spin fa-spinner' aria-hidden='true'></i> Processing ... ";
</script>

 </body>
</html>