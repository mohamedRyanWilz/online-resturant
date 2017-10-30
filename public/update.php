<?php
require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
$id=$_GET['id'];
render("update_form.php",["title"=>"update","control"=>"/control.php","id"=>$id]);
}
else if($_SERVER["REQUEST_METHOD"] == "POST"){
$persons=$_POST['persons'];
$dat=$_POST['date'];
$name=htmlspecialchars($_POST['name']);
$start=$_POST['s_time'];
$end=$_POST['e_time'];
$id=$_POST['id'];
$result=query("select end_time from reserved where table_type=? and date=? and (? BETWEEN start_time and end_time or ? BETWEEN start_time and end_time) ",$persons,$dat,$start,$end);
$num=count($result);
$am=query("select amount from `tables` where persons=?",$persons);
if($num < $am[0]['amount']){
render("up_con_form.php",["title"=>"confirm","name"=>$name,"start"=>$start,"end"=>$end,"persons"=>$persons,"dat"=>$dat,"id"=>$id]);
}

else{
$count=9999;
foreach($result as $val){
if($count> $val['end_time']){
$count=$val['end_time'];
}
}
$count=strtotime($count);
$start=strtotime($start);
$av=round(abs($count - $start) / 60,2);
 apologize("sorry there is no empty table at this time the nearest available table in $av minutes");
}
}
?>
