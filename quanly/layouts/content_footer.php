</div>
<script>
    $('#codinh').click(function(){
        if(this.checked == true){
        $('.content').addClass("thaydoicontent")
        $('.navigation').addClass("thaydoinavigation")
        }else{
        $('.content').removeClass("thaydoicontent")
        $('.navigation').removeClass("thaydoinavigation")
        }
    });
    function DangXuat(){
        $.ajax({
            type: 'POST',
            url: '/quanly/nguoidung/nguoi_dung_dang_xuat.php',
            data: {},
            dataType: 'json',
            success: function(res){
                if(res.status = 200){
                    window.location="/index.php";
                }
            }
        })
    }
</script>