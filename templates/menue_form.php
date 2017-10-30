<table  class="table table-striped" >
<tr>
<th>NAME</th>
<th>DISCRIPTION</th>
<th>Price</th>
</tr>
<?php if (isset($result)): $i=0; $color="BurlyWood "; $al="black"?>
<?php foreach($result as $value):?>
<tr>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><?=$value['name']?></td>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><?=$value['description']?></td>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><?=$value['price']?></td>

</tr>
<?= $i++ ?>
<?php endforeach  ?>
<?php endif ?>
</table>
