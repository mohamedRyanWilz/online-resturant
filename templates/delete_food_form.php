<form action="delete_food.php" method="post" >
<select name="selected" class="form-control">
<?php $result=query("select * from `foods` where id");
foreach($result as $symbol){
?>
<option value="<?=$symbol['id']?>" ><?=$symbol['name']?>
<?php } ?>
</select>
<br>
<br>
<input type="submit" value="DELETE"  class="btn btn-default">
</form>
