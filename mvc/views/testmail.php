<?php 
    if(isset($data['send'])){
        $arrQMK = json_decode($data['send']); 
        var_dump($data['send']);
    }
?>

<?php 
    echo ("<script>alert('Gửi Mail thành công!!!')</script>");
?>
