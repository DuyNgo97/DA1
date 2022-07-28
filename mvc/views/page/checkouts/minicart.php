<?php
if (isset($data["arr"])) {
    $arr = json_decode($data["arr"]);
    // var_dump($arr);
}

?>
<div>
   
    <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0"><?= $arr[0][1] ?></h6>
                <small class="text-muted"><?= $arr[0][7] ?></small>
            </div>
            <span class="text-muted"><?= $arr[0][2] ?> VND</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0"><?= $arr[1][1] ?></h6>
                <small class="text-muted"><?= $arr[1][7] ?></small>
            </div>
            <span class="text-muted"><?= $arr[1][2] ?> VND</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">5000 VND</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
                <h6 class="my-0">Voucher</h6>
                <small>Giảm giá</small>
            </div>
            <span class="text-success">-5000 VND</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
            <span>Tổng tiền (VND)</span>
            <strong>20000 vnd</strong>
        </li>
    </ul>
 
</div>

