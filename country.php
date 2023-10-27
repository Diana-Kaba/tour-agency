<?php
include "header.php";
?>

<div class="row">
    <div class="col-sm-4 text-center" style="margin: 0 auto;">
        <h3>Your order:</h3>
        <h2><i><?=$_GET["country"]?></i></h2>
        <?php
?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Price</th>
        <th>Stars</th>
        <th>Transport</th>

        </thead>
    <tbody>
        <td><?=$_GET["price"]?></td>
        <td><?=$_GET["stars"]?></td>
        <td><?=$_GET["transport"]?></td>
      </tr>
    </tbody>
  </table>
</div>
</div>

<?php
include "footer.php";
?>