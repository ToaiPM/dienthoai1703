<?php
    include_once "../helper/function.php";
    if(!isset($_SESSION)){ob_start();session_start();}
    spl_autoload_register(function ($TenLop) {
        $file = '../classes/' . $TenLop. '.php';
        if (is_readable($file))
        {
            require_once($file);
        }
        else
            trigger_error("The class '" . $TenLop . "' or the file '" . $TenLop . "' failed to spl_autoload ");
    });
    $timKiem = isset($_POST['TimKiem']) ? $_POST['TimKiem'] : '';
    $hangsanxuat = isset($_POST['hangsanxuat']) ? $_POST['hangsanxuat'] : '';
    $tranghientai = isset($_POST['tranghientai']) ? $_POST['tranghientai'] : '';
    $search = '';
    if($timKiem!=''){
        $search = $timKiem;
    }else if($hangsanxuat!=''){
        $search = $hangsanxuat;
    }else{
        $search = '';
    }
    $home = new sanpham();
    $tongsodong = $home->countTotal($search);

?>
<?php if($tongsodong > 0){ ?>
<div class="row">
    <p class="soluongdt_home">Sản phẩm nổi bật (<?php echo $tongsodong; ?>)</p>
</div>
<div class="row">
<?php
    $Page =$_POST["tranghientai"];
    $Limit = 12;
    $Start = $Limit * ($Page - 1);
    $NumPage = 4;
    $danhsach = $home->getDSData($search, $Start, $Limit);
    for($i=0;$i<count($danhsach);$i++){
        $tendienthoai = $danhsach[$i]['dien_thoai_ten'];
        $hinhanh = $danhsach[$i]['dien_thoai_hinh_anh'];
        $giacu = $danhsach[$i]['dien_thoai_gia_cu'];
        $giahientai = $danhsach[$i]['dien_thoai_gia_hien_tai'];
    ?>
    <div class="col l-3 m-6 c-12 mtop">
        <div class="content">
            <img class="hinhanh" src="/public/img/products/<?php echo $hinhanh; ?>" alt="" width="100%">
            <div class="name"><?php echo $tendienthoai; ?></div>
            <div class="price">
                <span class="price_old"><?php echo number_format($giacu); ?> đ</span>
                <span class="price_curent"><?php echo number_format($giahientai); ?> đ</span>
            </div>
            <div class="hanhdong">
                <a href="#" class="mua">Mua</a>
                <a href="#" class="xem">Xem</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<div  style="margin:25px">
    <?php
        if($tongsodong>0)
            PhanTrang($Page, $tongsodong, $Limit, $NumPage);
    ?>
</div>
<?php }else{ ?>
<div class="dulieurong">
    <span class="icon_thongbao"><i class="fa-solid fa-circle-exclamation"></i></span>
    <span class="thongbao">Không có dữ liệu</span>
</div>
<?php } ?>
<script>
    $('.ClickPage').click(function(){
        var page = $(this).attr("val"); 
        $("#TrangHienTai").val(page); 
        DanhSach();
    })
</script>