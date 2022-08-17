<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require "PHPMailer-master/src/Exception.php";

class quenmkModel extends db{

    //Check email

    public function checkMail($email){
        $check = false;
        $sql = "SELECT b.* 
        FROM `userss` a
        INNER JOIN infor b
        ON a.id_info = b.id_info
        WHERE b.email = '$email'";
        $result = mysqli_query($this -> conn, $sql);
        if(mysqli_num_rows($result) != 0){
            $arr = mysqli_fetch_all($result);
            $check = $arr[0][0];
        }
        return $check;
    }

    //Update code vào userss
    
    public function addCode($idInFo,$code){
        $sql = "UPDATE `userss` 
        SET `code`='$code'
        WHERE `id_info` = '$idInFo'";
        mysqli_query($this -> conn, $sql);
    }

    //Tiến hành gửi mail và tạo code

    public function content($email){
        $checkMail = $this -> checkMail($email);
        if($checkMail !== false){
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
                $code = substr(md5(rand(0,999999)),0,8);
                $this -> addCode($checkMail,$code); 
                $sendMail = $this -> GuiMail($email, $nameUS, $code);
                // $change = $this -> updatePass($newpass, $idUS);
                
                echo "<script>alert('Gửi Email thành công, kiểm tra email và tiến hành xác thực!!!<$checkMail>');window.location='http://localhost/da1/forgotpass/code'; </script>";
            }
        }else{
                echo "<script>alert('Email không tồn tại!');window.location='http://localhost/da1/forgotpass'; </script>";
            }
    }
//  Check code

    public function checkCode($code){
        $check = false;
        $sql = "SELECT * FROM `userss` WHERE `code` = '$code'";
        $result = mysqli_query($this -> conn, $sql);
        if(mysqli_num_rows($result) != 0){
            $check = true;
        }
        return $check;
    }
    
// cập nhật mật khẩu mới vào database 
    public function updatePass($pass, $code){
        $check= false;
        $sql = "UPDATE `userss` SET `us_password`='$pass' WHERE `code` = '$code'";
        $result = mysqli_query($this->conn,$sql);
        if($result){
            $sql2 = "UPDATE `userss` SET `code`='0' WHERE `code` = '$code'";
            $result2 = mysqli_query($this->conn,$sql2);
            echo "<script>alert('Tạo mới thành công!!!');window.location='http://localhost/da1/login'; </script>";
        }else{
            echo "<script>alert('Fail!!!');window.location='http://localhost/da1/forgotpass/changePass; </script>";
        }
        
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
    function GuiMail($email, $nameUS, $code){ 
            

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
            $mail->Body = "<p>Bạn đang yêu cầu lấy lại mật khẩu của tài khoản {$nameUS}.</p> <br>
                        <p>Chúng tôi gửi bạn đoạn code xác nhận: {$code}.</p> <br>
                        <p>Vui lòng xác thực mã code và tiền hành đổi lại password.</p> <br>
                        <p>Cảm ơn bạn đã ủng hộ SHOP.</p>
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
}
