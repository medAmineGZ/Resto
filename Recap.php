<?php
           $name=$_POST['user_name'];
           $lname=$_POST['user_Last'];
           $Telephone=$_POST['user_Telephone'];
           $Adress=$_POST['user_Adress'];
           $QUNT=$_POST['Quantity'];
           $sep=$_POST['menu'];
           $ops=$_POST['op'];

           echo "<br>";
           echo $name;
           echo "<br>";
           echo $lname;
           echo "<br>";
           echo $Telephone;
           echo "<br>";
           echo $Adress;
           echo "<br>";
           echo $QUNT;
           echo "<br>";
           echo $sep;
           echo "<br>";
           echo $ops;

           $tot=$QUNT*4;
           if ($QUNT >= 10) {
            echo "you have a 10% discount !";
            $des=(4*10/100);
            echo "<br>";
            echo "<br>";
            $newp=$tot-$des;

            echo $newp ;
        } 

           else{
           $tot=$QUNT*4;
           echo "<br>";
           echo $tot;
        }

             
           

?>
