<?php
$result=query("select * from `reserved` where reserved.re_id=?",$id);
?>
<form action="update.php" method="post">
<fieldset>
<div class="form-group">
            <input autofocus class="form-control" name="name" placeholder="your name" type="text"  value="<?=$result[0]['name'];?>" required/>
      </div>
        <div class="form-group" id="f1" >
           Persons: <input  class="form-control" name="persons" type="number"  value="<?=$result[0]['table_type'];?>" min="1" max="10" required/>
      </div>
        <div class="form-group" id="f2">
            Date: <input  class="form-control" name="date" type="date"   value="<?=$result[0]['date'];?>"required/>
        </div>
        <div class="form-group"  id="f3">
            Start time:<input  class="form-control" name="s_time" type="time" min="1"  value="<?=$result[0]['start_time'];?>" required/>
        </div>
        <div class="form-group" id="f4">
           End time: <input  class="form-control" name="e_time" type="time"  value="<?=$result[0]['end_time'];?>" required/>
         </div>
         <input type="hidden" value="<?=$id;?>" name="id" \/>
        <div class="form-group">
            <button type="submit" class="btn btn-default" id="f5">search table</button>
 </div>
</form>
