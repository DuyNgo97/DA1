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
        <li class="nav-item">
            <a class="nav-link" href="product/<?= $arrCategory[0][2] ?>" target="_self" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $arrCategory[0][1] ?> <i class="bi bi-plus"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="product/<?= $arrCategory[0][2] ?>" target="_self">Tất cả loại xe</a></li>
                <?php
                if (isset($data["arrCategoryXe"])) {
                    $arrCategoryXe = json_decode($data["arrCategoryXe"]);
                    // Dùng để in ra các giá trị của mảng
                    // var_dump($arrCategoryXe);
                }
                ?>
                <?php
                foreach ($arrCategoryXe as $key => $x) {
                ?>
                    <li><a class="dropdown-item" href="product/<?= $x[2] ?>" target="_self"><?= $x[1] ?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="product/<?= $arrCategory[1][2] ?>" target="_self" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $arrCategory[1][1] ?> <i class="bi bi-plus"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="product/<?= $arrCategory[1][2] ?>" target="_self">Tất cả phụ kiện</a></li>
                <?php
                if (isset($data["arrCategoryPk"])) {
                    $arrCategoryPk = json_decode($data["arrCategoryPk"]);
                    // Dùng để in ra các giá trị của mảng
                    // var_dump($arrCategoryPk);
                }
                ?>
                <?php
                foreach ($arrCategoryPk as $key => $pk) {
                ?>
                    <li><a class="dropdown-item" href="product/<?= $pk[2] ?>" target="_self"><?= $pk[1] ?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
    </ul>
</div>