<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer-master/src/PHPMailer.php"; 
require "PHPMailer-master/src/SMTP.php"; 
require "PHPMailer-master/src/Exception.php";

class checkoutDB extends db
{
    public function insertDonHang($idUS,$total,$trangthai,$thanhtoan,$a,$sdt,$note){
        $sql = "INSERT INTO `donhang`(`us_id`, `total`, `trangthai`, `hinhthucTT`, `ngaytao_donhang`, `SDT`, `note`)
         VALUES ($idUS,'$total',$trangthai,$thanhtoan,'$a','$sdt','$note')";
        $result = mysqli_query($this -> conn, $sql);
        $id = mysqli_insert_id($this->conn);
        return $id;
    }
    
    public function insertDHCT($arrSP,$idUS,$total,$trangthai,$thanhtoan,$a,$sdt,$note,$nameUS,$email){
        $check = false;
        $idDH = $this -> insertDonHang($idUS,$total,$trangthai,$thanhtoan,$a,$sdt,$note);
        foreach ($arrSP as $key => $sp) {
            $sql = "INSERT INTO `donhangchitiet`(`id_donhang`, `id_sp`, `soluong_sp`) VALUES ($idDH,$sp[id],$sp[quantity])";
            if(mysqli_query($this -> conn,$sql)){
               $check = true; 
            }
        }
        if($check){
            $sql2 = "SELECT b.ten_sp, a.soluong_sp, b.gia_sp
            FROM `donhangchitiet` a
            INNER JOIN sanpham b
            ON a.id_sp = b.id_sp
            -- INNER JOIN donhang c
            -- ON c.id_donhang = a.id_donhang
            WHERE a.id_donhang = '$idDH'";
            $rs = mysqli_query($this -> conn, $sql2);
            $dh = mysqli_fetch_all($rs);
            $tong = 0;
            $noidung = '<head>
            <style>
            h1 {
                font-size: 30px;
                color: black;
                text-transform: uppercase;
                font-weight: 600;
                text-align: center;
                margin-bottom: 15px;
            }
        
            table {
                width: 100%;
                /* position: absolute; */
                /* overflow-x: auto; */
                /* table-layout: fixed;  */
            }
        
            th {
                height: 50px;
                width: 100px;
                padding: 20px 15px;
                text-align: left;
                font-weight: 500;
                font-size: 18px;
                color: black;
                /* text-transform: uppercase; */
                text-align: center;
            }
        
            td {
                padding: 15px;
                text-align: center;
                vertical-align: middle;
                font-weight: 300;
                font-size: 16px;
                color: black;
                border-bottom: solid 1px #25c481;
        
            }
        
            td img {
                height: 100px;
                width: 200px;
            }
        
        
            /* demo styles */
        
            @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
        
            thead {
                background: -webkit-linear-gradient(left, #25c481, #25b7c4);
                background: linear-gradient(to right, #25c481, #25b7c4);
                font-family: "Roboto", sans-serif;
            }
        
            section {
                margin: 50px;
                overflow: auto;
            }
        
        
        
        
            /* for custom scrollbar for webkit browser*/
            </style>
            </head>';
            $noidung .= "
            <p>Dear Mr/Ms ".$nameUS.",</p>
            <p>Cảm ơn quý khách đã đặt hàng. Mã đơn hàng là: ".$idDH."</p>
            <p>Đơn hàng đặt bao gồm:</p>
            <table cellpadding='0' cellspacing='0' border='0'>
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá tiền</th>
                    </tr>
                </thead>
                <tbody>
                    
            ";
            foreach ($dh as $key => $dh) {
                $tong = $tong + ($dh[2] * $dh[1]);
                $dh[2] = number_format($dh[2]);
                $noidung .= "
                <tr>
                    <th>$dh[0]</th>
                    <th>$dh[1]</th>
                    <th>$dh[2] VND</th>
                </tr>
                ";
            }
            $noidung .= "
                        </tbody>
                        </table>
                        ";
            $noidung .= "Tổng tiền: ". number_format($total)." VND.";
            $this -> sendMail($email,$nameUS,$noidung);
        }
        unset($_SESSION['cart']);
        return $check;
    }

    public function sendMail($email,$nameUS,$noidung){
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
            $mail->setFrom('vuthemanh18895hp@gmail.com','Va Chạm Shop'); 
            $mail->addAddress($email,$nameUS);                       //mail và tên người nhận  

            //Content
            $mail->isHTML(true);                                     // Set email format to HTML
            $mail->Subject = 'Đơn hàng VCshop';
            $mail->Body = $noidung;
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