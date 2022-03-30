<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/quanly/css/style.css">
    <link rel="stylesheet" href="/public/css/all.min.css">
    <script src="/public/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/quanly/css/jquery.datetimepicker.css">
    <script src="/quanly/js/jquery.datetimepicker.js"></script>
    <title>Quản lý - hãng sản xuất</title>
</head>
<body>
<?php
  if(!isset($_SESSION['idnguoidung'])){
      header("Location: /");
  }
?>
<?php include_once __SITE_PATH . '/quanly/layouts/navigation.php';  ?>
<?php include_once __SITE_PATH . '/quanly/layouts/content_header.php';  ?>


<div id="danhsach"></div>

<?php include_once __SITE_PATH . '/quanly/layouts/content_footer.php';  ?>
</body>
<script>
    function DanhSach(){
      alert(1)
    }
</script>
</html>