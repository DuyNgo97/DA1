<link rel="stylesheet" href="public/css/editpq.css">

<div class="main">
<?php
            if(isset($data["arrEpq"])){
                 $arr = json_decode($data["arrEpq"]);
                   var_dump($data["arrEpq"]);
                
               
            }
            if(isset($data["arrvt"])){
                $ar = json_decode($data["arrvt"]);
                //  var_dump($ar);
               
              
           }
          if(isset($check)){
            echo'adsadad';
          }
        ?>
        <form action="admin/Updatepq/" method="post" target="_self">
                <div class="a">
                
                <h1>Sửa tài khoản</h1>
                <hr>
                
                <label for="id"><b>ID</b></label>
                <input type="text" name="us_id" value="<?= $data['id'] ?>">
                <label for="tk"><b>tên tài khoản</b></label>
                <input type="text" name="tk" value="<?= $arr[0][1] ?>">
                <label for="vt"><b>Vai trò</b></label>
               
                <select name="vt" >
                    <?php foreach($ar as $key =>$v) { ?>
                        <option value="<?= $v[0] ?>"><?= $v[1] ?></option>
                        <!-- <option>CTV</option> -->
                        <?php } ?>
                </select>
                
                <!-- <input type="text" name="vt"value="" > -->
                <div class="clearfix">
                    <button type="submit" name="submit" class="submit">Sửa</button>
                </div>
            </div>
        </form>
        <a href="admin/pq" style="text-decoration: none; color:white;" target="_self"><button type="submit" class="submit">Quay về</button></a>
</div>