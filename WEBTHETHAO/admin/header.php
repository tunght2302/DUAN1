<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách nhân viên | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="./doc/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!-- Font-icon css-->
  <link rel="stylesheet" type="../text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <ul class="app-menu">
      
      <li>
        <a class="app-menu__item" href="index.php?act=dskh"
          ><i class="app-menu__icon bx bx-id-card"></i>
          <span class="app-menu__label">Quản lý khách hàng</span></a
        >
      </li>
      <li>
     
      <li>
        <a class="app-menu__item" href="index.php?act=addpro"
          ><i class="app-menu__icon bx bx-purchase-tag-alt"></i
          ><span class="app-menu__label">Quản lý sản phẩm</span></a
        >
      </li>
      <li>
        <a class="app-menu__item" href="index.php?act=listbill"
          ><i class="app-menu__icon bx bx-task"></i
          ><span class="app-menu__label">Quản lý đơn hàng</span></a
        >
      </li>
      <li><a class="app-menu__item" href="index.php?act=comment"><i class='app-menu__icon bx bx-user-voice'></i><span
            class="app-menu__label">Quản lý bình luận</span></a></li>
      <li>
        <a class="app-menu__item" href="index.php?act=list"
          ><i class="app-menu__icon bx bx-pie-chart-alt-2"></i
          ><span class="app-menu__label">Thống kê</span></a
        >
      </li>
    </ul>
  </aside>