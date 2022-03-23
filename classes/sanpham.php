<?php
    class sanpham{
        public function getDSData($timkiem, $Start=null, $Limit=null){
            $sql = "SELECT
                dt.dien_thoai_id,
                dt.dien_thoai_ten,
                dt.dien_thoai_gia_hien_tai,
                dt.dien_thoai_gia_cu,
                dt.dien_thoai_hinh_anh,
                hsx.hang_san_xuat_ten 
            FROM
                dien_thoai dt
            LEFT JOIN hang_san_xuat hsx ON dt.hang_san_xuat_id = hsx.hang_san_xuat_id 
            WHERE dt.dien_thoai_ten LIKE '%$timkiem%' OR hsx.hang_san_xuat_ten LIKE '%$timkiem%'";
                $sql .= " LIMIT " . $Start . ", " . $Limit;
            $service = new dataservice();
            return $service->ExecuteQuery($sql);
        }

        public function countTotal($timkiem){
            $sql = "SELECT
                    count(dt.dien_thoai_id) tongsodong
                FROM
                    dien_thoai dt
                LEFT JOIN hang_san_xuat hsx ON dt.hang_san_xuat_id = hsx.hang_san_xuat_id 
                WHERE dt.dien_thoai_ten LIKE '%$timkiem%' OR hsx.hang_san_xuat_ten LIKE '%$timkiem%'";
                $service = new dataservice();
                $rs = $service->ExecuteQuery($sql);
                return isset($rs) ? $rs[0]['tongsodong'] : 0;
        }

        public function XemChiTiet($id){
            $sql = "SELECT
                dt.dien_thoai_id,
                dt.dien_thoai_ten,
                dt.dien_thoai_gia_ban,
                dt.dien_thoai_hinh_anh,
                hsx.hang_san_xuat_ten,
                dt.dien_thoai_cpu,
                dt.dien_thoai_ram,
                dt.dien_thoai_man_hinh,
                dt.dien_thoai_pin,
                dt.dien_thoai_tinh_trang 
            FROM
                dien_thoai dt
            LEFT JOIN hang_san_xuat hsx ON dt.hang_san_xuat_id = hsx.hang_san_xuat_id 
            WHERE dt.dien_thoai_id=$id";
            $service = new dataservice();
            $rs = $service->ExecuteQuery($sql);
            return isset($rs) ? $rs[0] : '';
        }
    }
?>