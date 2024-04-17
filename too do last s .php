
<?php

$host= "127.0.0.1";//رقم الهوست
$user="root";//اليوزر
$password="";//الباسورد
$database="too do last";//اسم الداتا بيز

$connect= mysqli_connect($host,$user,$password,$database);//دالة الكونكت

if(mysqli_connect_errno()){//لو لا يمكن الاتصال ارسل no connect و اسم الايرور
    die("no connect". mysqli_connect_error ());
}else{
    echo "data is connect";//فى حالة الاتصال اطبع 
}
?>




<?php
    
   echo $_GET['tr'];

   if($_GET['tr']=='dl'){
    $query="delete  FROM do where id=" .$_GET['id'] ;
    $result=mysqli_query($connect,$query);
    if( $result){
        echo "record is deleted";
        header("Location: too do last.php");
    }else{

        die ("error in query");
    }
   }else{

    $query="UPDATE `do` SET `true` ='".$_GET['tr']. "'  WHERE `do`.`id` =".$_GET['id'] ;
    $result=mysqli_query($connect,$query);
    if( $result){
        echo "record is deleted";
        header("Location: too do last.php");
    }else{

        die ("error in query");
    }
}
   ?>  


<?php
mysqli_close($connect);

?>