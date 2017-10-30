<?php
require("../includes/constants.php");
    require("../includes/functions.php");
?>

<?php
$str=$_GET['q'];
$result=query("SELECT pay_option.name,pay_option.type FROM `pay_option` INNER JOIN `pay_method_option` ON pay_method_option.option_id = pay_option.id WHERE pay_method_option.method_id =? ",$str);
foreach($result as $value){
?>
<font color="white" size=3><?= $value['name'];?></font><input type="<?= $value['type'];?>" name="<?= $value['name'];?>" class="form-control" required/><br/>
<?php } ?>


