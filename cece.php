<html>
<meta http-equiv="Content-type" content="text/html;charset=utf-8">
<?php 
	echo date("Y年m月d日 h:i:s",strtotime("-1day"));
	
	echo '<br/>';
	
	//sort()和asort()都是对值进行排序区别在于sort()排序后会去掉键，而asort()会保留键
	
	$a=array('a'=>'c','b'=>'b','c'=>'d','d'=>'a');
	asort($a);//排完序，排完保留键
	var_dump($a);
	$b=array('a'=>'c','b'=>'b','c'=>'d','d'=>'a');
	sort($b);//值的排序，排完序后会去掉键
	var_dump($b);
	$c=array('a'=>'c','b'=>'b','c'=>'d','d'=>'a');
	ksort($c);//按键值排序
	var_dump($c);
?>

</html>

