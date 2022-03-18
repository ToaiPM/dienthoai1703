<?php
    class nguoidung{
        public function DangNhap($tendangnhap, $matkhau){
            $sql = "SELECT * 
            FROM nguoi_dung 
            WHERE nguoi_dung_ten_dang_nhap='$tendangnhap' AND nguoi_dung_mat_khau='$matkhau'";
            $service = new dataservice();
            $res = $service->ExecuteQuery($sql);
            return ($res==true) ? $res[0] : 0;
        }
    }
?>