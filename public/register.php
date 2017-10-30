<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
    if($_SESSION['id']==1){
        // else render form
        render("register_form.php", ["title" => "Register","control"=>"/control.php"]);
        }
        else{
 apologize("you can not do that");
}
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
       if($_POST['username']== ''){
   echo "<script>alert('you must type your username')</script>";
     header("refresh:0;");
}
  else{ if($_POST['password']==''){
   echo "<script>alert('you must type your password')</script>";
     header("refresh: 0;");
}
    
else {if($_POST['confirmation']!=$_POST['password']){
echo "<script>alert('you must type your confirm password must b identical')</script>";
    header("refresh: 0;");
}
else{
$result=query("INSERT INTO users (username, hash) VALUES(?, ?)", $_POST["username"], crypt($_POST["password"]));
if($result===false){

echo"<script>alert('an error ocure please try again in another tine')</script>";
    header("refresh: 0;");

}
else{
 echo"<script>alert('user have been ADDED');</script>";
 redirect("/control.php");
}
}
}
}


   }

?>

