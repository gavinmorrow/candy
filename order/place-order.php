<?php
	$candy = $_POST["candy"];
	$quantity = $_POST["quantity"];
	
	$date = date("ymd"); # The date in format YYMMDD. e.g. for February 1st, 2021, it would be 210201
	$dir_file_name = "dir-$date.txt";
	$dir_path = "../orders/";
	$dir = fopen("$dir_path$dir_file_name", "a+");
	$dir_contents = file_get_contents("$dir_path$dir_file_name");

	$order_number = substr(strval(date("U")), 0, -6);
?>
<?= $order_number ?>, <?= $dir_path ?><?= $dir_file_name ?>
<br>
<?php
	if (strpos($dir_contents, "$order_number") === false) {
		echo "Yay!";
		echo fwrite("$dir", "$order\n");
	} else {
		echo ":(";
	}
?>, "<?= $dir_contents ?>"