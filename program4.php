<html>
<head>
<title>Armstrong</title>
</head>
<body>
<form method="post">
Enter a number:<input type="text" name="number" />
<br>
<button type="submit">Check</button>
</form>
</body>
</html>
<?php
 if($_POST)
{
        $number=$_POST['number'];
        $a=$number;
         $sum=0;
        while($a!=0)
         {
	$rem=$a%10;
	$sum=$sum+($rem*$rem*$rem);
	$a=$a/10;
           }
          if($number==$sum)
          {
	echo "$number an Armstrong Number";
          }
         else
         {
	echo "$number is not an aArmstrong Number";
        }
}
?>  