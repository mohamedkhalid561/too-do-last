<?php

$host= "127.0.0.1";//رقم الهوست
$user="root";//اليوزر
$password="";//الباسورد
$database="too do last";//اسم الداتا بيز

$connect= mysqli_connect($host,$user,$password,$database);//دالة الكونكت

if(mysqli_connect_errno()){//لو لا يمكن الاتصال ارسل no connect و اسم الايرور
    die("no connect". mysqli_connect_error ());
}else{

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
   <?php
    
    $query="SELECT * FROM do";
    $result=mysqli_query($connect,$query);
    if(! $result){
        die ("error in query");
    }
   ?>  
   <ul>
    <?php


    
        $query="SELECT * FROM do";
        $result=mysqli_query($connect,$query);
        if(! $result){
            die ("error in query");
        }
        ?>  
        <ul>
        <?php
        while($row=mysqli_fetch_assoc($result)){

           if($row['true']=='yas') {
            echo "<div class='card'><div class='info1'>".$row['do']. " "."<p> تم <p>
            <a class='x1' href='too do last s .php?id=".$row["id"]."&"."tr=yas'>  don</a>
            <a class='x2' href='too do last s .php?id=".$row["id"]."&"."tr=dl'> delete </a>
           <a class='x3'href='too do last s .php?id=".$row["id"]."&"."tr=no'>Cancel</a>
            </div></div>";
           }else{
            echo  "<div class='card'><div class='info'>".$row['do']. " "."<p> لم تتم بعد <p>
            <a class='x1' href='too do last s .php?id=".$row["id"]."&"."tr=yas'>  don</a>
            <a class='x2' href='too do last s .php?id=".$row["id"]."&"."tr=dl'> delete </a>
           <a class='x3' href='too do last s .php?id=".$row["id"]."&"."tr=no'>Cancel</a>
            </div></div>";
           }
          

        }
      
        // foreach($qs as $qx) {
        //     };
        //     $qx++;
        //     print_r($qs);
        //     // echo $qs[0];
        //     $df4=0;
        //     for($df3=1;$qs[$df4]==$df3;){
               
        //         if($qs[$df4]!=$df3){
        //             echo $df3 ."ss". $df4;
        //         }
        //         $df4++;  
        //         $df3++;
        //     }

           

            if(isset($_POST['submit'])){
                $do=$_POST['do'];
                        if($do!=null){
                            $query="SET @num:=0";  
                            $result=mysqli_query($connect,$query);
                            $query="update do SET id = @num := (@num+1)";  
                            $result=mysqli_query($connect,$query);
                            $query="ALTER TABLE do AUTO_INCREMENT =1";  
                            $result=mysqli_query($connect,$query);

                        $query="INSERT INTO `do` (`do`, `true`) VALUES ( '".$do."', 'no')";
                        $result=mysqli_query($connect,$query);
                        if( $result){
                               echo "</br>data is inerted";
                               header("Location: too do last.php");
                        }else{
                               echo "data not inerted";
                        }
                    }else{
                        echo"<div class='xg'><p>ادخل اي شياء <p></div>";
                    }


             }
         
          
   ?>  
   
   <div class='card1'>

<form  method='POST'>

<input type='text' name='do'>
</br>
<input type='submit' name='submit' value='inerted'>

</form>
</div>

<?php
mysqli_close($connect);

?>


