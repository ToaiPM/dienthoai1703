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
    $ma = isset($_POST['ma']) ? $_POST['ma'] : '';
    $ten = isset($_POST['ten']) ? $_POST['ten'] : '';
    $h = new hangsanxuat();
    $kq = $h->CapNhat($id, $ma, $ten);
    if($kq){
        $mang = [
            'status'=>200,
            'content'=>'success'
        ];
    }else{
        $mang = [
            'status'=>403,
            'content'=>'failure'
        ];
    }
    echo json_encode($mang);
?>