<!-- đơn hàng -->
<div class="order border rounded mt-3 p-3">
    <div>
        <h2>Lịch sử đơn hàng</h2>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID đơn hàng</th>
                    <th>Total</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($donhang)){
                        foreach ($donhang as $key => $dh) { ?>
                <tr>
                    <th scope="row"><?= $dh[0] ?></th>

                    <td><?= number_format($dh[3], 0, '', ',') ?> VND</td>
                    <td><?= date("d/m/Y",strtotime($dh[2])) ?></td>
                    <td>
                        <a href="account/xemchitiet/<?= $dh[0] ?>" target="_self"> Xem chi tiết</a>
                    </td>
                </tr>
                <?php       }
                        }
                ?>
            </tbody>
        </table>
    </div>
</div>