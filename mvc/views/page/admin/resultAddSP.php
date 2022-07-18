<div class="main">
    <!-- Kết quả thêm sản phẩm -->
    <?php
        $tensp = $_POST['tensp'];
        $color = $_POST['colorsp'];
        $giasp = $_POST['giasp'];
        $nsx = $_POST['company'];
        $trangthai = $_POST['trangthaisp'];
        $soluong = $_POST['soluongsp'];
        $giamgia = isset($_POST['giamgiasp']) ? $_POST['giamgiasp'] : 0;
        $loaisp = $_POST['theloaisp'];
        $loaispct = $_POST['chitietsp'];
        $ngaytao = $_POST['dateTao'];
        echo "<br>Tên sp: ".$tensp."<br>";
        echo "Màu: ".$color."<br>";
        echo "Giá: ".$giasp."<br>";
        echo "Nhà sản xuất: ".$nsx."<br>";
        echo "Trạng thái: ".$trangthai."<br>";
        echo "Số lượng: ".$soluong."<br>";
        echo "Giảm giá: ".$giamgia."<br>";
        echo "Loại sp: ".$loaisp."<br>";
        echo "Loại sản phẩm chi tiết: ".$loaispct."<br>";
        echo "Ngày tạo: ".$ngaytao."<br>";
        // echo "Trạng thái: ".$trangthai."<br>";
        // $arrIMG = [];
        // $arrIMG = $_FILES['image'];
        // $arrIMG = array_push($arrIMG,$_FILES['image1']);
        // var_dump($_FILES['image']);
        // var_dump($_FILES['image1']);
        // var_dump($_FILES['image2']);
        // var_dump($_FILES['image3']);
        // var_dump($_FILES['image4']);
        // var_dump($arrIMG);
        // $img = json_decode($data['Img']);
        // $img1 = json_decode($data['Img1']);
        // $img2 = json_decode($data['Img2']);
        // $img3 = json_decode($data['Img3']);
        // $img4 = json_decode($data['Img4']);
        // echo "<br>".$img."<br>";
        // echo $img1."<br>";
        // echo $img2."<br>";
        // echo $img3."<br>";
        // echo $img4."<br>";
        if(isset($data['check'])){
            if(!$data['check']){
                echo '<h1>File đã tồn tại!!!</h1>';
            }else{
                echo '<h1>Thêm sản phẩm thành công</h1>';
                echo $data['check'];
            }
        }
    ?>
</div>