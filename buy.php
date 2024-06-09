<?php
$link = mysqli_connect("localhost","root","","contact");
if($link == false){
    die("ERROR: Couuld not connect...".mysqli_connect_error());
}
else{
    mysqli_query($link,"drop table Bill");
    mysqli_query($link,"create table Bill( id int not null auto_increment primary key,Products varchar(30) not null,Quantity bigint not null,Cost int not null)");
    if (isset($_POST["skin1"])){
        $a=$_POST["quantity1"]*200;
        $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[skin1]',$_POST[quantity1],$a)";
        mysqli_query($link,$sql);
    }
    if (isset($_POST["skin2"])){
        $b=$_POST["quantity2"]*250;
        $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[skin2]',$_POST[quantity2],$b)";
        mysqli_query($link,$sql);
    }
    if (isset($_POST["hair"])){
        $c=$_POST["quantity3"]*300;
        $sql = "INSERT INTO Bill(Products,Quantity, Cost) VALUES ('$_POST[hair]',$_POST[quantity3],$c)";
        mysqli_query($link,$sql);
    }
}
echo "Order placed Successfully!!";
?>
<br>
<button ><a href="project1.html">click to get back to the home page </button>

