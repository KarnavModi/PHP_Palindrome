<?php 
function Palindrome($number){
   $temp = $number;
   $new = 0;
   while (floor($temp)) {
     $d = $temp % 10;
     $new = $new * 10 + $d;
     $temp = $temp/10;
}
if($new == $number) { 
     return 1;
}
else{
     return 0;
   }
}
$Num=2334;
?>
<html>
    <head>
        <title>
            Palindrome...
        </title>
    </head>
    <body>
        The Number is <?php if(Palindrome($Num)){
                            echo "Palindrome.";
                            }
                            else{
                            echo "Not a Palindrome.";
                            } ?>
    </body>
</html>