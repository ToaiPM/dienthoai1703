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
?>
<?php if($tongsodong > 0){ ?>
<div class="action_gr">
    <p class="soluong_hangsanxuat">Có (<?php echo $tongsodong; ?>) hãng sản xuất</p>
    <div class="chucnang_gr">
        <button onclick="getThem()" class="thaotac"><span class="icon"><i class="fa-solid fa-plus"></i></span> Thêm</button>
        <button class="thaotac"><span class="icon"><i class="fa-solid fa-trash-can"></i></span> Xóa</button>
        <button class="thaotac"><span class="icon"><i class="fa-solid fa-print"></i></span> In</button>
        <button class="thaotac"><span class="icon"><i class="fa-solid fa-file-excel"></i></span> Xuất Excel</button>
    </div>
</div>
<table>
    <tr>
        <th width="5%">STT</th>
        <th>Mã</th>
        <th>Tên</th>
        <th width="7%">Sửa</th>
        <th width="10%">Chọn</th>
    </tr>
    <?php
    $Page =$_POST["tranghientai"];
    $Limit = 10;
    $Start = $Limit * ($Page - 1);
    $NumPage = 4;
    $danhsach = $h->DanhSach($search, $search_ma, $search_ten, $Start, $Limit);
    //print_r($danhsach);die;
    for($i=0;$i<count($danhsach);$i++){
        $id = $danhsach[$i]['hang_san_xuat_id'];
        $ma = $danhsach[$i]['hang_san_xuat_ma'];
        $ten = $danhsach[$i]['hang_san_xuat_ten'];
        $ghichu = $danhsach[$i]['hang_san_xuat_ghi_chu'];
    ?>
    <tr>
        <td  style="text-align:center"><?php echo $i+1; ?></td>
        <td><?php echo $ma; ?></td>
        <td><?php echo $ten; ?></td>
        <td style="text-align:center"><span class=""><i class="fa-solid fa-pencil"></i></span></td>
        <td style="text-align:center"></td>
    </tr>
    <?php } ?>
</table>
<div  style="margin:25px">
    <?php
        if($tongsodong>0)
            PhanTrang($Page, $tongsodong, $Limit, $NumPage);
    ?>
</div>
<?php }else{ ?>
<p>không có dữ liệu</p>
<?php } ?>

<script>
    $('.ClickPage').click(function(){
        var page = $(this).attr("val"); 
        $("#TrangHienTai").val(page); 
        DanhSach();
    })
</script>
