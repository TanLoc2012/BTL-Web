<?php
    require_once "mvc/utility/utility.php";
    $user = getUserToken();
    if($user != null) {
        if($user["role_id"] == 1) {
            header('Location: http://localhost/Laptrinhweb/Home');
        }
        else if($user["role_id"] == 3) {
            header('Location: http://localhost/Laptrinhweb/Home/staff');
        }
        if($user["role_id"] == 4) {
            header('Location: http://localhost/Laptrinhweb/Home/chef');
        }
    }
    else header('Location: http://localhost/Laptrinhweb/Home');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="icon" type="image/png" href="https://gokisoft.com/uploads/2021/03/s-568-ico-web.jpg" /> -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="http://localhost/Laptrinhweb/public/css/dashboard.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>


</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="http://localhost/Laptrinhweb/Home">Restaurent</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Tìm kiếm" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="http://localhost/Laptrinhweb/Home">Thoát</a>
    </li>
  </ul>
</nav>	
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link 
            <?php if(isset($isActive)) {
                    if($isActive=='Dashboard')
                      echo 'active';
                    else echo '';
            }
            ?>"
             href="http://localhost/Laptrinhweb/Admin">
              <i class="bi bi-house-fill"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(isset($isActive)) {
                    if($isActive=='CategoryAdmin')
                      echo 'active';
                    else echo '';
            }
            ?>" href="http://localhost/Laptrinhweb/CategoryAdmin">
              <i class="bi bi-folder"></i>
              Danh Mục Sản Phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(isset($isActive)) {
                    if($isActive=='ProductAdmin')
                      echo 'active';
                    else echo '';
            }
            ?>" href="http://localhost/Laptrinhweb/ProductAdmin">
              <i class="bi bi-file-earmark-text"></i>
              Sản Phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(isset($isActive)) {
                    if($isActive=='OrderAdmin')
                      echo 'active';
                    else echo '';
            }
            ?>" href="http://localhost/Laptrinhweb/OrderAdmin">
              <i class="bi bi-minecart"></i>
              Quản Lý Đơn Hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(isset($isActive)) {
                    if($isActive=='FeedbackAdmin')
                      echo 'active';
                    else echo '';
            }
            ?>" href="http://localhost/Laptrinhweb/FeedbackAdmin">
              <i class="bi bi-question-circle-fill"></i>
              Quản Lý Phản Hồi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(isset($isActive)) {
                    if($isActive=='UserAdmin')
                      echo 'active';
                    else echo '';
            }
            ?>" href="http://localhost/Laptrinhweb/UserAdmin">
              <i class="bi bi-people-fill"></i>
              Quản Lý Người Dùng
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <!-- hien thi tung chuc nang cua trang quan tri START-->