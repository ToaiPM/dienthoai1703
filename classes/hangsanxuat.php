<?php
    class hangsanxuat
    {
        public function countTotal($search, $search_ma, $search_ten){
            $sql = '';
            if($search != ''){
                $sql = "SELECT
                        count(h.hang_san_xuat_id) tongsodong
                    FROM
                    hang_san_xuat h 
                    WHERE h.hang_san_xuat_ma LIKE '%$search%' OR h.hang_san_xuat_ten LIKE '%$search%'";
                    $service = new dataservice();
                    $rs = $service->ExecuteQuery($sql);
                    return isset($rs) ? $rs[0]['tongsodong'] : 0;
            }else{
                $sql = "SELECT
                        count(h.hang_san_xuat_id) tongsodong
                    FROM
                    hang_san_xuat h 
                    WHERE h.hang_san_xuat_ma LIKE '%$search_ma%' AND h.hang_san_xuat_ten LIKE '%$search_ten%'";
                    $service = new dataservice();
                    $rs = $service->ExecuteQuery($sql);
                    return isset($rs) ? $rs[0]['tongsodong'] : 0;
            }
        }

        public function DanhSach($search, $search_ma, $search_ten, $Start=null, $Limit=null){
            $sql = '';
            if($search != ''){
                $sql = "SELECT h.hang_san_xuat_id, h.hang_san_xuat_ma, h.hang_san_xuat_ten, h.hang_san_xuat_ghi_chu 
                FROM hang_san_xuat h 
                WHERE h.hang_san_xuat_ma LIKE '%$search%' OR h.hang_san_xuat_ten LIKE '%$search%' ";
                $sql .= " LIMIT " . $Start . ", " . $Limit;
                $service = new dataservice();
                return $service->ExecuteQuery($sql);
            }else{
                $sql = "SELECT h.hang_san_xuat_id, h.hang_san_xuat_ma, h.hang_san_xuat_ten, h.hang_san_xuat_ghi_chu 
                FROM hang_san_xuat h 
                WHERE h.hang_san_xuat_ma LIKE '%$search_ma%' AND h.hang_san_xuat_ten LIKE '%$search_ten%' ";
                $sql .= " LIMIT " . $Start . ", " . $Limit;
                $service = new dataservice();
                return $service->ExecuteQuery($sql);
            }
        }
        
        public function Them($ma, $ten){
            $sql = "INSERT INTO hang_san_xuat (hang_san_xuat_ma, hang_san_xuat_ten) VALUES('$ma','$ten')";
            $service = new dataservice();
            return $service->ExecuteNonQuery($sql);
        }

        public function ChiTiet($id){
            $sql = "SELECT h.hang_san_xuat_id, h.hang_san_xuat_ma, h.hang_san_xuat_ten 
            FROM hang_san_xuat h 
            WHERE h.hang_san_xuat_id=$id";
            $service = new dataservice();
            $rs = $service->ExecuteQuery($sql);
            return isset($rs) ? $rs[0] : '';
        }

        public function CapNhat($id, $ma, $ten){
            $sql = "UPDATE hang_san_xuat 
            SET hang_san_xuat_ma ='$ma', hang_san_xuat_ten ='$ten' 
            WHERE hang_san_xuat_id =$id";
            $service = new dataservice();
            return $service->ExecuteNonQuery($sql);
        }
        
        public function Xoa($chuoiID){
            $sql = "DELETE FROM hang_san_xuat WHERE hang_san_xuat_id IN ($chuoiID)";
            $service = new dataservice();
            return $service->ExecuteNonQuery($sql);
        }
    }
?>