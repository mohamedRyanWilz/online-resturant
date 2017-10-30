<title>save</title>
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
$card_number=htmlspecialchars($_POST['card_number']);
$key=htmlspecialchars($_POST['secerety_key']);
$add=query("insert into `reserved` (table_type,start_time,end_time,date,name) values(?,?,?,?,?)",$persons,$start,$end,$dat,$name);
$rows = query("SELECT LAST_INSERT_ID() AS id");
$id = $rows[0]["id"];
if(!$add){
$val=query("insert into `payment_value` (app_id,card_number,security_key) values(?,?,?)",$id,$card_number,$key);
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
