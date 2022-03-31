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
    $timkiem_header = isset($_POST['timkiem_header']) ? $_POST['timkiem_header'] : '';
    $boloc_content_ma = isset($_POST['boloc_content_ma']) ? $_POST['boloc_content_ma'] : '';
    $boloc_content_ten = isset($_POST['boloc_content_ten']) ? $_POST['boloc_content_ten'] : '';
    $search = '';
    $search_ma = '';
    $search_ten = '';
    if($timkiem_header != ''){
        $search =$timkiem_header;
    }else{
        $search_ma = $boloc_content_ma;
        $search_ten = $boloc_content_ten;
    }
    $h = new hangsanxuat();
    $tongsodong = $h->countTotal($search, $search_ma, $search_ten);
    $ds = $h->DanhSach($search, $search_ma, $search_ten);
    
?>
<table>
    <tr>
        <th width="5%">STT</th>
        <th>Mã</th>
        <th>Tên</th>
        <th>Sửa</th>
        <th>Chọn</th>
    </tr>
    <tr>
        <td>1</td>
        <td>A001</td>
        <td>Samsung</td>
        <td>Sửa</td>
        <td>Chọn</td>
    </tr>
    <tr>
        <td>1</td>
        <td>A001</td>
        <td>Samsung</td>
        <td>Sửa</td>
        <td>Chọn</td>
    </tr>
    <tr>
        <td>1</td>
        <td>A001</td>
        <td>Samsung</td>
        <td>Sửa</td>
        <td>Chọn</td>
    </tr>
</table>
