<form action="update_food.php" method="post">
    <fieldset>
    <select name="selected" class="form-control">
<?php $result=query("select * from `foods` where id");
foreach($result as $symbol){
?>
<option value="<?=$symbol['id']?>" ><?=$symbol['name']?>
<?php } ?>
</select>
<br>
<br>
        <div class="form-group">
            <input autofocus class="form-control" name="price" type="number" step=.01 min="1"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Update</button>
        </div>
    </fieldset>
</form>
