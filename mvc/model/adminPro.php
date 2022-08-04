<?php
    class adminPro extends db{

        //select all sản phẩm
        public function selectAllPro(){
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,b.name_color,a.soluong_sp,a.giamgia,
            c.name_trangthai,a.mota,a.ngaytao,a.ngaycapnhat,
            d.ten_company, e.ten_loaisp, f.name_chitiet,
            g.url_main, g.url1,g.url2,g.url3,g.url4
            FROM sanpham a
            INNER JOIN color b
            ON a.id_color = b.id_color
            INNER JOIN trangthai c
            ON a.id_trangthai = c.id_trangthai
            INNER JOIN company d
            ON a.id_company = d.id_company
            INNER JOIN loaisp e
            ON a.id_loaisp = e.id_loaisp
            INNER JOIN loai_sp_chi_tiet f
            ON a.id_loaispct = f.id_loaispct
            INNER JOIN hinhanh g
            ON a.id_hinhanh = g.id_hinhanh";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function selectOneSP($idsp){
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,b.name_color,a.soluong_sp,a.giamgia,
            c.name_trangthai,a.mota,a.ngaytao,a.ngaycapnhat,
            d.ten_company, e.ten_loaisp, f.name_chitiet,
            g.url_main, g.url1,g.url2,g.url3,g.url4,a.id_hinhanh
            FROM sanpham a
            INNER JOIN color b
            ON a.id_color = b.id_color
            INNER JOIN trangthai c
            ON a.id_trangthai = c.id_trangthai
            INNER JOIN company d
            ON a.id_company = d.id_company
            INNER JOIN loaisp e
            ON a.id_loaisp = e.id_loaisp
            INNER JOIN loai_sp_chi_tiet f
            ON a.id_loaispct = f.id_loaispct
            INNER JOIN hinhanh g
            ON a.id_hinhanh = g.id_hinhanh
            WHERE a.id_sp = '$idsp'";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        //lấy color
        public function selectColor(){
            $sql = "SELECT * FROM `color`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function selectTheLoai(){
            $sql = "SELECT * FROM `loaisp`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function selectloaiSPCT(){
            $sql="SELECT * FROM `loai_sp_chi_tiet`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function selectloaiComPaNy(){
            $sql="SELECT * FROM `company`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function trangThai(){
            $sql="SELECT * FROM `trangthai`";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function nameSPCT($loaispct){
            $sql = "SELECT * FROM `loai_sp_chi_tiet` WHERE `id_loaispct` = $loaispct";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($result);
            return $arr;
        }

        public function moveIMG($img,$loaispct,$ngaytao){
            $arr = $this -> nameSPCT($loaispct);
            // $path = "public/images/sanpham/".$loaispct."/".$loaispct.$ngaytao;
            $loaispct = strtolower($arr[0][1]);
            $check = true;
            $url = "sanpham/".$loaispct."/".$ngaytao."-".$img['name'];
            $src = $ngaytao."-".$img['name'];
            $file_path = "public/images/sanpham/".$loaispct."/".$src;
            $tmp = $img['tmp_name'];
            if(file_exists($file_path)){
                $check = false;
            }else{
                    move_uploaded_file($tmp,$file_path);
                    $check = $url;
                
            }
            return $check;
        }

        public function insertIMG($img,$img1,$img2,$img3,$img4,$loaispct,$ngaytao){
            $src = $this -> moveIMG($img,$loaispct,$ngaytao);
            $src1 = $this -> moveIMG($img1,$loaispct,$ngaytao);
            $src2 = $this -> moveIMG($img2,$loaispct,$ngaytao);
            $src3 = $this -> moveIMG($img3,$loaispct,$ngaytao);
            $src4 = $this -> moveIMG($img4,$loaispct,$ngaytao);
            $check = false;
            if($src === false || $src1 === false || $src2 === false || $src3 === false || $src4 === false){
                $check = false;
            }else{
                $sql = "INSERT INTO `hinhanh`(`url_main`, `url1`, `url2`, `url3`, `url4`) VALUES ('$src','$src1','$src2','$src3','$src4')";
                    if(mysqli_query($this -> conn,$sql)){
                        $idIMG = mysqli_insert_id($this -> conn);
                        $check = $idIMG;
                    }
            }
            return $check;
        }

        public function insertSanPham($img,$img1,$img2,$img3,$img4,$tensp,$color,$giasp,$nsx,$trangthai,$soluong,$giamgia,$mota,$loaisp,$loaispct,$ngaytao){
            $check = false;
            $idIMG = $this -> insertIMG($img,$img1,$img2,$img3,$img4,$loaispct,$ngaytao);
            if($idIMG === false){
                return $check;
            }else{
                $sql = "INSERT INTO `sanpham`(`ten_sp`, `gia_sp`, `id_color`, `soluong_sp`, `giamgia`, `id_trangthai`, `mota`, `ngaytao`, `id_company`, `id_loaisp`, `id_loaispct`, `id_hinhanh`) VALUES ('$tensp','$giasp',$color,$soluong,$giamgia,$trangthai,'$mota','$ngaytao',$nsx,$loaisp,$loaispct,$idIMG)";
                $result = mysqli_query($this -> conn,$sql);
                if($result){
                    $check = true;
                }
            }      
            return $check;
        }

        public function selectDanhMuc(){
            $sql = "SELECT * FROM `danhmuc`";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function insertDM($tendm){
            $check = false;
            $sql = "INSERT INTO `danhmuc`(`ten_danhmuc`) VALUES ('$tendm')";
            if(mysqli_query($this -> conn, $sql)){
                $check = true;
            }
            return json_encode($check);
        }

        public function selectVoucher(){
            $sql = "SELECT * FROM `voucher`";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function totalvoucher(){
            $sql = "SELECT * FROM `voucher`";
            $result = mysqli_query($this -> conn, $sql);
            $total = mysqli_num_rows($result);
            return $total;
        }

        public function insertVoucher($tenvc,$mavc,$giamgia,$dateTao,$dateKT){
            $check = false;
            $sql = "INSERT INTO `voucher`(`ten_voucher`, `code_voucher`, `mucgiam_voucher`, `ngayBD`, `ngayKT`) VALUES ('$tenvc','$mavc',$giamgia,'$dateTao','$dateKT')";
            $result = mysqli_query($this -> conn, $sql);
            if($result){
                $check = true;
            }
            return json_encode($check);
        }

        public function selectArr($table){
            $sql = "SELECT * FROM `$table`";
            $result = mysqli_query($this -> conn, $sql);
            if($result){
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
            return false;
        }

        public function insertType($type){
            $check = false;
            $folder = strtolower($type);
            $newfolder = "public/images/sanpham/".$folder;
            $sql = "INSERT INTO `loai_sp_chi_tiet`(`name_chitiet`) VALUES ('$type')";
            if(mysqli_query($this -> conn,$sql)){
                if(!file_exists($newfolder)){
                    mkdir($newfolder, 0777, true);
                    $check = true;
                }
                $check = true;
            }
            return json_encode($check);
        }

        public function deleteType($id,$nameType){
            $name = strtolower($nameType);
            $path = "public/images/sanpham/".$name;
            $check = false;
            $sql = "DELETE FROM `loai_sp_chi_tiet` WHERE `id_loaispct` = '$id'";
            if(mysqli_query($this -> conn, $sql)){
                rmdir($path);

                $check = true;
            }
            return json_encode($check);
        }

        public function deleteDM($id){
            $check = false;
            $sql = "DELETE FROM `danhmuc` WHERE `id_danhmuc`= '$id'";
            if(mysqli_query($this -> conn, $sql)){
                $check = true;
            }
            return json_encode($check);
        }

        public function deleteVC($id){
            $check = false;
            $sql = "DELETE FROM `voucher` WHERE `id_voucher` = '$id'";
            if(mysqli_query($this -> conn, $sql)){
                $check = true;
            }
            return json_encode($check);
        }

        // Edit san pham

        public function deleteArrIMG($abc){
            foreach ($abc as $key => $a) {
                $src = "public/images/".$a;
                unlink($src);
            }
        }

        public function updateIMGs($img,$img1,$img2,$img3,$img4,$loaispct,$ngaycapnhat,$id_hinhanh){
            $src = $this -> moveIMG($img,$loaispct,$ngaycapnhat);
            $src1 = $this -> moveIMG($img1,$loaispct,$ngaycapnhat);
            $src2 = $this -> moveIMG($img2,$loaispct,$ngaycapnhat);
            $src3 = $this -> moveIMG($img3,$loaispct,$ngaycapnhat);
            $src4 = $this -> moveIMG($img4,$loaispct,$ngaycapnhat);
            if($src === false || $src1 === false || $src2 === false || $src3 === false || $src4 === false){
                $check = false;
            }else{
                $sql = "UPDATE `hinhanh` SET `url_main`='$src',`url1`='$src1',`url2`='$src2',`url3`='$src3',`url4`='$src4' WHERE `id_hinhanh` = '$id_hinhanh'";
                    if(mysqli_query($this -> conn,$sql)){
                        $idIMG = mysqli_insert_id($this -> conn);
                        $check = $idIMG;
                    }
            }
            return $check;
        }

        public function updateSanPham($img,$img1,$img2,$img3,$img4,$tensp,$color,$giasp,$nsx,$trangthai,$soluong,$giamgia,$mota,$loaisp,$loaispct,$ngaycapnhat,$id_hinhanh,$idsp){
            $check = false;
            $this -> updateIMGs($img,$img1,$img2,$img3,$img4,$loaispct,$ngaycapnhat,$id_hinhanh);
            $sql = "UPDATE `sanpham` SET `ten_sp` = '$tensp',`soluong_sp` = $soluong,`gia_sp` = '$giasp', `giamgia` = $giamgia, `id_color` = $color, `id_trangthai` = $trangthai, `id_company` = $nsx, `id_loaisp` = $loaisp, `id_loaispct` = $loaispct , `mota` = '$mota', `ngaycapnhat` = '$ngaycapnhat' WHERE id_sp = $idsp";
                $result = mysqli_query($this -> conn,$sql);
                if($result){
                    $check = true;
                }    
            return $check;
        }

        public function selectDonHang(){
            $sql = "SELECT a.*, c.name, c.email, c.diachi 
            FROM `donhang` a
            INNER JOIN userss b
            ON a.us_id = b.us_id
            INNER JOIN infor c
            ON b.id_info = c.id_info
            Order by a.id_donhang";
            $result = mysqli_query($this -> conn, $sql);
            if($result){
                $arr = mysqli_fetch_all($result);
            }
            return json_encode($arr);
        }

        public function changeTrangThai($id_donhang,$trangthai){
            $sql = "UPDATE `donhang` SET `trangthai`= '$trangthai' WHERE `id_donhang` = '$id_donhang'";
            mysqli_query($this -> conn, $sql);
        }

        public function deleteDonHang($id_donhang){
            $sql = "DELETE FROM `donhang`  WHERE `id_donhang` = '$id_donhang'";
            mysqli_query($this -> conn, $sql);
            $sql2 = "DELETE FROM `donhangchitiet` WHERE `id_donhang` = '$id_donhang'";
            mysqli_query($this -> conn, $sql2);
        }

        public function numsAlldonhang(){
            $sql = "SELECT * FROM `donhang`";
            $result = mysqli_query($this -> conn, $sql);
            $total = mysqli_num_rows($result);
            return $total;
        }

        public function numsChuaXacNnhan(){
            $sql = "SELECT * FROM `donhang` WHERE `trangthai` = 0";
            $result = mysqli_query($this -> conn, $sql);
            $total = mysqli_num_rows($result);
            return $total;
        }

        public function numsXacNnhan(){
            $sql = "SELECT * FROM `donhang` WHERE `trangthai` = 1";
            $result = mysqli_query($this -> conn, $sql);
            $total = mysqli_num_rows($result);
            return $total;
        }

        public function Month($month){
            $sql = "SELECT SUM(a.total) as 'total' FROM donhang a WHERE month(a.ngaytao_donhang) = '$month' AND a.trangthai = '1'";
            $result = mysqli_query($this -> conn, $sql);
            return json_encode(mysqli_fetch_all($result));
        }

        public function selectXe($loaispct){
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,b.url_main
            FROM `sanpham` a
            INNER JOIN hinhanh b
            ON a.id_hinhanh = b.id_hinhanh
            WHERE a.id_loaispct = '$loaispct' 
            LIMIT 3";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function selectOneDH($id_donhang){
            $sql = "SELECT a.id_sp, a.soluong_sp, d.url_main,
            b.ten_sp,b.gia_sp,b.giamgia,
            c.name_color, e.ten_company
            FROM `donhangchitiet` a
            INNER JOIN sanpham b
            ON a.id_sp = b.id_sp
            INNER JOIN color c
            ON b.id_color = c.id_color
            INNER JOIN hinhanh d
            ON b.id_hinhanh = d.id_hinhanh
            INNER JOIN company e
            ON e.id_company = b.id_company
            WHERE id_donhang = '$id_donhang'";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function totaldonhang(){
            $sql = "SELECT * FROM `donhang` WHERE `trangthai` = 0";
            $result = mysqli_query($this -> conn, $sql);
            $total = mysqli_num_rows($result);
            return $total;
        }
    }
?>