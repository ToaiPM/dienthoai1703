<?php
    class toai_bosung{
        public function CapNhatDangKyMonHoc($IDDangKyMonHoc,$MaSinhVien,$MaMonHoc,$NamHoc,$HocKy){
            $sql = "UPDATE dang_ky_mon_hoc SET quan_ly_sinh_thong_tin_vien_ma='$MaSinhVien',quan_ly_mon_hoc_ma='$MaMonHoc',dang_ky_mon_hoc_nam_hoc='$NamHoc',dang_ky_mon_hoc_hoc_ky='$HocKy' WHERE dang_ky_mon_hoc_id='$IDDangKyMonHoc'";
            $service = new dataservice();
            return $service->ExecuteNonQuery($sql);
        }
        public function DanhSachSinhVien(){
            $sql = "SELECT * FROM quan_ly_thong_tin_sinh_vien";
            $service = new dataservice();
            return $service->ExecuteQuery($sql);
        }
        public function DanhSachMonHoc(){
            $sql = "SELECT * FROM quan_ly_mon_hoc";
            $service = new dataservice();
            return $service->ExecuteQuery($sql);
        }
        public function ChiTiet($id) {
            $sql = "SELECT dk.dang_ky_mon_hoc_id,sv.quan_ly_thong_tin_sinh_vien_ma, sv.quan_ly_thong_tin_sinh_vien_ho_ten, mh.quan_ly_mon_hoc_ma, mh.quan_ly_mon_hoc_so_tin_chi, dk.dang_ky_mon_hoc_nam_hoc, dk.dang_ky_mon_hoc_hoc_ky 
            FROM dang_ky_mon_hoc dk 
            LEFT JOIN quan_ly_thong_tin_sinh_vien sv ON dk.quan_ly_sinh_thong_tin_vien_ma = sv.quan_ly_thong_tin_sinh_vien_ma 
            LEFT JOIN quan_ly_mon_hoc mh ON dk.quan_ly_mon_hoc_ma = mh.quan_ly_mon_hoc_ma 
            WHERE dang_ky_mon_hoc_id=$id";
            $service = new dataservice();
            return $service->ExecuteQuery($sql);
        }
        public function XoaDangKyMonHoc($id) {
            $sql = "DELETE FROM dang_ky_mon_hoc WHERE dang_ky_mon_hoc_id=$id";
            $service = new dataservice();
            return $service->ExecuteNonQuery($sql);
        }
        public function XoaNhieuDangKyMonHoc($chuoi_id){
            $sql = "DELETE FROM dang_ky_mon_hoc WHERE dang_ky_mon_hoc_id IN ($chuoi_id)";
            $service = new dataservice();
            //echo $sql;
            return $service->ExecuteNonQuery($sql);
        }
        public function DangNhap($TaiKhoan, $MatKhau){
            $sql = "SELECT * FROM quan_ly_nguoi_dung WHERE quan_ly_nguoi_dung_tai_khoan='$TaiKhoan' AND quan_ly_nguoi_dung_mat_khau='$MatKhau'";
            $service = new dataservice();
            return $service->ExecuteQuery($sql);
        }
        public function DanhSachDangkyMonHoc(){
            $sql = "SELECT dk.dang_ky_mon_hoc_id,sv.quan_ly_thong_tin_sinh_vien_ma, sv.quan_ly_thong_tin_sinh_vien_ho_ten, mh.quan_ly_mon_hoc_ma, mh.quan_ly_mon_hoc_so_tin_chi, dk.dang_ky_mon_hoc_nam_hoc, dk.dang_ky_mon_hoc_hoc_ky 
            FROM dang_ky_mon_hoc dk 
            LEFT JOIN quan_ly_thong_tin_sinh_vien sv ON dk.quan_ly_sinh_thong_tin_vien_ma = sv.quan_ly_thong_tin_sinh_vien_ma 
            LEFT JOIN quan_ly_mon_hoc mh ON dk.quan_ly_mon_hoc_ma = mh.quan_ly_mon_hoc_ma";
            $service = new dataservice();
            return $service->ExecuteQuery($sql);
        }
    }
?>