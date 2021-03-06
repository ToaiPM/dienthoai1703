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

    if(isset($_SESSION['idnguoidung'])){
        unset($_SESSION['idnguoidung']);
        unset($_SESSION['tenguoidung']);
        unset($_SESSION['tendangnhap']);
        unset($_SESSION['matkhau']);
        unset($_SESSION['quyenhan']);
        
        $thongbao = [
            'status'=>200,
            'content'=>'success',
        ];
    }else{
        $thongbao = [
            'status'=>404,
            'content'=>'failure',
        ];
    }
    echo json_encode($thongbao);
?>