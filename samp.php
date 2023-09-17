<?php

$num=$_POST['n'];
$sum = 0;
$str = '';
	
for($i = 1; $i<=$num; $i++) {
    $sum = $sum + $i;
  
}
echo $str.$sum;
	
 
 
?>
 
<body>
 
<form method="post">
 
Enter number<input type="text" name="n"/><hr/>
	
<input type="submit" value="check number"/>
	
</form>
 
</body>