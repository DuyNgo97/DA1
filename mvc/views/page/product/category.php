<?php
if (isset($data["arrCategory"])) {
    $danhmuc = json_decode($data["arrCategory"]);
    // var_dump($danhmuc);
}
?>
<div class="category-title">
    <h4 class="category-title-h4">
        Danh mục
    </h4>
</div>
<div class="category-list">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="product/all/1" target="_self">Tất cả</a>
        </li>
        <?php
        foreach ($danhmuc as $key => $dm) { ?>
        <li class="nav-item">
            <a class="nav-link" href="product/changeSP/<?= $dm[0] ?>/1" target="_self">
                <?= $dm[1] ?> <i class="bi bi-plus"></i>
            </a>
        </li>
        <?php }
        ?>
    </ul>
</div>