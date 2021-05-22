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