<h1>Cảm ơn khách hàng!</h1>

<?php
// if(isset($_POST['total'])){
//     echo 'Tổng tiền: '.$_POST['total'].'<br>';
//     echo 'ID user: '.$_SESSION['idUS'].'<br>';
//     echo 'Name user: '.$_SESSION['nameUS'].'<br>';        
//     echo 'SDT: '.$_POST['sdt'].'<br>';        
//     echo 'Email user: '.$_POST['email'].'<br>';        
//     echo 'Địa chỉ user: '.$_POST['diachi'].'<br>';        
//     echo 'Thanh toán: '.$_POST['thanhtoan'].'<br>';  
//     echo 'Note: '.$_POST['note'].'<br>';      
//     $today = date('Y-m-d');
// $a = date('d-m-Y',strtotime($today));
// echo $today;  
// }
if ($data['check']) {
    // echo "<h1>Đặt hàng thành công!</h1>";
    echo '
        <script>
			alert("Đặt hàng thành công! Chúng tôi sẽ gửi mail sớm cho bạn! ");
			window.location = "http://localhost/da1bk/home";
        </script>t>
        ';
}
?>