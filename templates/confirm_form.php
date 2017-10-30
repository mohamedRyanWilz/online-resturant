<script>
function showCustomer(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","confirm.php?q="+str,true);
xmlhttp.send();
}
</script>
<form action="save.php" method="post">
<select name="done" class="form-control" id="sel"  onchange="showCustomer(this.value)">
<option> </option>
<?php $result=query("select * from `payment_method`");
foreach($result as $value){
?>
<option value="<?=$value['id'];?>"><?=$value['name'];?></option>

<?php } ?>
</select>
<div id="txtHint"> </div>
<input type="hidden" value="<?=$persons?>" name="persons">
<input type="hidden" value="<?=$start?>" name="start">
<input type="hidden" value="<?=$end?>" name="end">
<input type="hidden" value="<?=$dat?>" name="dat">
<input type="hidden" value="<?=$name?>" name="name">
<input type="submit" value="confirm" class="btn btn-default">
</form>
