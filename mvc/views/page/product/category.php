<div class="category-title">
    <h4 class="category-title-h4">
        Danh mục
    </h4>
</div>
<div class="category-list">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="product" target="_self">Tất cả</a>
        </li>
        <?php
        if (isset($data["arrCategory"])) {
            $arrCategory = json_decode($data["arrCategory"]);
            // Dùng để in ra các giá trị của mảng
            // var_dump($arrCategory);
        }
        ?>
        <?php foreach ($arrCategory as $key => $cate) { ?>
            <li class="nav-item">
                <a class="nav-link" href="product/<?= $cate[2] ?>" target="_self"><?= $cate[1] ?></a>
            </li>
        <?php } ?>
    </ul>
</div>