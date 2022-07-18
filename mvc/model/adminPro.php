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

        public function moveIMG($img){
            $check = true;
            $src = $img['name'];
            $file_path = "public/images/".$src;
            $tmp = $img['tmp_name'];
            if(file_exists($file_path)){
                $check = false;
            }else{
                move_uploaded_file($tmp,$file_path);
                $check = $src;
            }
            return $check;
        }

        // public function checkErr($img,$img1,$img2,$img3,$img4){
        //     $src = $this -> moveIMG($img);
        //     $src1 = $this -> moveIMG($img1);
        //     $src2 = $this -> moveIMG($img2);
        //     $src3 = $this -> moveIMG($img3);
        //     $src4 = $this -> moveIMG($img4);
        //     $arr[] = '';
        //     $err[] = '';
        //     if(!$src || !$src1 || !$src2 || !$src3 || !$src4){
        //         $check = true;
        //         return $check;
        //     }else{
        //         array_push($arr,$src,$src1,$src2,$src3,$src4);
        //         foreach ($arr as $key => $a) {
        //             if(!$a){
        //                 // $b = "File '".$a."' đã tồn tại";
        //                 array_push($err,$a);
        //             }
        //         }
        //         return json_encode($err);
        //     }
        // }

        public function insertIMG($img,$img1,$img2,$img3,$img4){
            $src = $this -> moveIMG($img);
            $src1 = $this -> moveIMG($img1);
            $src2 = $this -> moveIMG($img2);
            $src3 = $this -> moveIMG($img3);
            $src4 = $this -> moveIMG($img4);
            $check = false;
            if(!$src || !$src1 || !$src2 || !$src3 || !$src4){
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
            $idIMG = $this -> insertIMG($img,$img1,$img2,$img3,$img4);
            if(!$idIMG){
                return $check;
            }
            $sql = "INSERT INTO `sanpham`(`ten_sp`, `gia_sp`, `id_color`, `soluong_sp`, `giamgia`, `id_trangthai`, `mota`, `ngaytao`, `id_company`, `id_loaisp`, `id_loaispct`, `id_hinhanh`) VALUES ('$tensp','$giasp',$color,$soluong,$giamgia,$trangthai,'$mota','$ngaytao',$nsx,$loaisp,$loaispct,$idIMG)";
            $result = mysqli_query($this -> conn,$sql);
            if($result){
                $check = true;
            }
            return $check;
        }
    }
?>