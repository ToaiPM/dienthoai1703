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
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $h = new hangsanxuat();
    $list = $h->ChiTiet($id);
    $mang = [];
    if($list){
        $mang = [
            'id'=> $list['hang_san_xuat_id'],
            'ma'=> $list['hang_san_xuat_ma'],
            'ten'=> $list['hang_san_xuat_ten']
        ];
    }else{
        $mang = [];
    }
    echo json_encode($mang);
?>