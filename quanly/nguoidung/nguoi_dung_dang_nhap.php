<?php
    include_once "../../helper/function.php";
    if(!isset($_SESSION)){ob_start();session_start();}
    spl_autoload_register(function ($TenLop) {
        $file = '../../classes/' . $TenLop. '.php';
        if (is_readable($file))
        {
            require_once($file);
        }
        else
            trigger_error("The class '" . $TenLop . "' or the file '" . $TenLop . "' failed to spl_autoload ");
    });
    $tendangnhap = isset($_POST['tendangnhap']) ? $_POST['tendangnhap'] : '';
    $matkhau = isset($_POST['matkhau']) ? md5($_POST['matkhau']) : '';
    
    $nd = new nguoidung();
    $nguoidung = $nd->DangNhap($tendangnhap,$matkhau);
    if(empty($nguoidung)==false){
        $_SESSION['idnguoidung'] = $nguoidung['nguoi_dung_id'];
        $_SESSION['tenguoidung'] = $nguoidung['nguoi_dung_ten'];
        $_SESSION['tendangnhap'] = $nguoidung['nguoi_dung_ten_dang_nhap'];
        $_SESSION['matkhau'] = $nguoidung['nguoi_dung_mat_khau'];
        $_SESSION['quyenhan'] = $nguoidung['nguoi_dung_quyen_han'];
        
        $thongbao = [
            'status'=>200,
            'content'=>'success',
            'idnguoidung'=>$nguoidung['nguoi_dung_id'],
            'tenguoidung'=>$nguoidung['nguoi_dung_ten'],
            'tendangnhap'=>$nguoidung['nguoi_dung_ten_dang_nhap'],
            'matkhau'=>$nguoidung['nguoi_dung_mat_khau'],
            'quyenhan'=>$nguoidung['nguoi_dung_quyen_han'],
        ];
    }else{
        $thongbao = [
            'status'=>404,
            'content'=>'failure',
        ];
    }
    echo json_encode($thongbao);
?>