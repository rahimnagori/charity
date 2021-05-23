<div class="left_side">
  <ul class="ul_set sider_barr">
    <li class="<?=($active_page == 'profile') ? 'active' : '';?>"><a href="<?=site_url('Organization-Profile');?>"><i class="la la-user"></i> Profile</a></li>
    <!--
    <li><a href="add-post.php"><i class="la la-plus-circle"></i> Post</a></li>
    <li><a href="my-post.php"><i class="la la-list-ul"></i>My Post</a></li>
    <li><a href="account.php"><i class="la la-bank"></i> Account</a></li>
    -->
    <li class="<?=($active_page == 'password') ? 'active' : '';?>" ><a href="<?=site_url('Organization-Password');?>"><i class="la la-unlock"></i> Change Password</a></li>
    <li><a href="<?=site_url('Organization-Logout');?>"><i class="la la-sign-out"></i> Logout</a></li>
  </ul>
</div>