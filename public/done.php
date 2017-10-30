<title>updated</title>
</head>
<body>
<?php
require("../includes/constants.php");
    require("../includes/functions.php");
    
if($_SERVER["REQUEST_METHOD"] == "POST"){
$persons=$_POST['persons'];
$dat=$_POST['dat'];
$name=htmlspecialchars($_POST['name']);
$start=$_POST['start'];
$end=$_POST['end'];
$ide=$_POST['id'];
$card_number=htmlspecialchars($_POST['card_number']);
$key=htmlspecialchars($_POST['secerety_key']);
$add=query("update `reserved` SET name=? ,table_type=? , start_time=? , end_time=? , date=? where re_id=?",$name,$persons,$start,$end,$dat,$ide);
if(!$add){
$val=query("update `payment_value` SET  card_number=? ,security_key=? where app_id=? ",$card_number,$key,$ide);
if(!$val){
cong("thank you for use our services");
}
else{
apologize("sorry an error ocure ");
}
}
else{
   apologize("sorry an error ocure ");
}
}
?>
