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
        }
        
    }
?>