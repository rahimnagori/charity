<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/line-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link href="css/style.css?time=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>
<div class="header_top">
  <div class="header_top2">
    <div class="logo">
      <a href="#">
        <img src="img/logo.png">
      </a>
    </div>
    <div class="napingation">
      <span class="butobn_menu">
        <button class="btn btn_theme2 toggle_us" >
          <i class="fa fa-bars"></i>
        </button>
      </span>
      <ul class="ul_set">
           <li class="user_dropp">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span class="img_radiuus">
                                <img src="img/img_1.png">
                             <span class="namee">User Name</span>
            
          </span>
        </a>

          <ul class="dropdown-menu">

    <li><a href="#"><i class="la la-user"></i>Profile</a></li>

    <li><a href="#"><i class="la la-sign-out"></i> Logout</a></li>

  </ul>

        </li>
      </ul>
    </div>
  </div>
</div>


<?php include_once 'include/sidebar.php'; ?>