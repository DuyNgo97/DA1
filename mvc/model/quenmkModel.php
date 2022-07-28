<?php
class quenmkModel extends db{
    public function content(){
        if(isset($_POST['btn-qmk'])){
            $email = $_POST['email'];
            $sql = "SELECT a.* , b.email
                    FROM `userss` a
                    INNER JOIN `infor` b
                    ON a.id_info = b.id_info
                    WHERE b.email = '$email' ";
            $result = mysqli_query($this -> conn, $sql);
            if($result){
                $user = mysqli_fetch_assoc($result);
                $nameUS = $user['us_taikhoan'];
                $idUS = $user['us_id'];
                $newpass = substr(md5(rand(0,999999)),0,8); 
                $sendMail = GuiMail($email, $nameUS, $newpass);
                $change = $this -> updatePass($newpass, $idUS);
                
                echo "<script>alert('Gửi Email thành công, kiểm tra email và đăng nhập lại!!!');window.location='http://localhost/da1/login'; </script>";
            }
            // else{
            //     echo "<script>alert('Email không tồn tại!');window.location='http://localhost/da1/forgotpass'; </script>";
            // }
        }
    }
// cập nhật mật khẩu mới vào database 
    function updatePass($newpass, $idUS){
        $check= false;
        $sql = "UPDATE `userss`
                SET us_password = '$newpass'
                WHERE us_id = '$idUS'
                ";
        $result = mysqli_query($this->conn,$sql);
        if($result){
            $check = true;
        }
        return $check;
    }
// random 1 chuỗi bất kì
//     function rand_string($length){
//         $chars = "abcdefghijklmnopqrstuvxyzABCDEFGHIJKLMNOPQRSTUVXYZ0123456789";
//         $size = strlen($chars);
//         $str = '';
//         for($i = 0; $i < $length; $i++){
//             $str .= $chars[rand(0, $size = 1)];
//         }
//         return $str;
//     }
}
?>

<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require "PHPMailer-master/src/Exception.php";

    function GuiMail($email, $nameUS, $newpass){ 
        

        $mail = new PHPMailer(true);//true:enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                    // Enable verbose debug output
            $mail->isSMTP();                                         // Set mailer to use SMTP
            $mail->CharSet = "utf-8";
            $mail->Host = 'smtp.gmail.com';                          // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                  // Enable SMTP authentication
            $mail->Username = 'vuthemanh18895hp@gmail.com';                 // SMTP username
            $mail->Password = 'iphonaecdzieqdwz';                           // SMTP password
            $mail->SMTPSecure = 'tls';                               // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                       // TCP port to connect to

            //Recipients
            $mail->setFrom('vuthemanh18895hp@gmail.com','FORGOT PASSWORD'); 
            $mail->addAddress($email,$nameUS);                       //mail và tên người nhận  

            //Content
            $mail->isHTML(true);                                     // Set email format to HTML
            $mail->Subject = 'Quên mật khẩu?';
            $mail->Body = "<p>Bạn đang yêu cầu lấy lại mật khẩu của tài khoản {$nameUS}</p> <br>
                           <p>Chúng tôi gửi bạn lại mật khẩu mới: {$newpass}</p> <br>
                           <p>Truy cập lại tài khoản để thay đổi mật khẩu của bạn</p> <br>
                           <p>Cảm ơn bạn đã ủng hộ SHOP</p>
                          ";
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true,
                )
            ));
            $mail->send();
            // echo "<script>alert('Gửi Email thành công, kiểm tra email và đăng nhập lại!!!');window.location='http://localhost/da1/login'; </script>";
        } catch (Exception $e) {
            echo "Lỗi!!!", $mail->ErrorInfo;
        }
    }
?>