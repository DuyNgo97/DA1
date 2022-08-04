<!-- Voucher -->
<div class="order border rounded mt-3 p-3">
    <div>
        <h2>Voucher</h2>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID voucher</th>
                    <th>Tên Voucher</th>
                    <th>Code</th>
                    <th>Mức giảm</th>
                    <th scope="col">Ngày kết thúc</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($data['voucher'])){
                        $voucher = json_decode($data['voucher']);
                        // var_dump($voucher);
                        foreach ($voucher as $key => $vc) { ?>
                <tr>
                    <th scope="row"><?= $vc[0] ?></th>
                    <td><?= $vc[1] ?></td>
                    <td><?= $vc[2] ?></td>
                    <td><?= $vc[3] ?></td>
                    <td><?= $vc[4] ?></td>
                </tr>
                <?php       }
                        }
                ?>
            </tbody>
        </table>
    </div>
</div>