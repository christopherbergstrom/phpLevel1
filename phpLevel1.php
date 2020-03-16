
<?php
	$arr = [2, 45, 98, 22];
	foreach ($arr as $num) {
		echo $num . ", ";
	}
	function multiply($arr2) {
		$product = $arr2[0] * $arr2[1] * $arr2[2] * $arr2[3];
		echo "<br>product: " . $product;
	}
    multiply($arr);
?>
