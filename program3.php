<html>
<head>
<title>Palindrome</title>
</head>
<body>
<form method="post">
Enter a number:<input type="text" name="numb" />
<br>
<button type="submit">Check</button>
</form>

<?php
          if($_POST)
              {
	$numb=$_POST['numb'];
	$reverse=strrev($numb);

	if($numb==$reverse)
	     {
	               echo "The number $numb is Palindrome";
	      }
	else
	     {
	                echo "The number $numb is not a Palindrome";
		echo "<br>";
	      }
                }
?>
<?php
if($_POST)
{
   $numb=$_POST['numb'];
   $sum=0;
   $rem=0;
   for($i=0;$i<=strlen($numb);$i++)
     {
            $rem=$numb%10;
            $sum=$sum+$rem;
            $numb=$numb/10;
      }
   echo "<br>";
  echo "The sum of digit is $sum";
}
?>
</body>
</html> 