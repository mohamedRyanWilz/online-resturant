<?php
require("../includes/constants.php");
require("../includes/functions.php");
?>
<table  class="table table-striped" >
<tr>
<th>NAME</th>
<th>Start time</th>
<th>End time</th>
<th>date</th>
<th>persons</th>
<th>card_number</th>
<th>delete</th>
<th>update</th>
</tr>
<?php $name=$_GET['id'];
$val= query("SELECT * FROM  `reserved` INNER JOIN  `payment_value` ON reserved.re_id = payment_value.app_id WHERE reserved.name LIKE  '%$name%'");
?>
<?php if (is_array($val)): $i=0; $color="BurlyWood "; $al="black"?>
<?php foreach($val as $value):?>
<tr>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><?=$value['name']?></td>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><?=$value['start_time']?></td>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><?=$value['end_time']?></td>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><?=$value['date']?></td>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><?=$value['table_type']?></td>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><?=$value['card_number']?></td>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><a href="delete.php?id=<?=$value['re_id']?>">delete</a></td>
<td style="text-align:left;font-size:20px;color:<?=($i%2==0)?$color:$al?>;"><a href="update.php?id=<?=$value['re_id']?>">update</a></td>
</tr>
<?= $i++ ?>
<?php endforeach  ?>
<?php endif ?>
</table>
