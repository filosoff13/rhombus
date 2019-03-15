<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 15.03.19
 * Time: 16:23
 */

?>

<html>
	<head>
		<title>Task</title>
		<style type="text/css">
			pre.output{
				border: 1px solid silver;
				background-color: #f5f5f5;
				padding: 10px;
				color: gray;
			}
		</style>
	</head>

	<body>

		<form action="" method="get">
			<fieldset>
				<legend>enter params</legend>
                <label for="height">height:</label>
				<input type="text" id="height" name="height" value="<?=$height?>">
				<input type="submit" value="generate">
			</fieldset>
		</form>

		<pre class="output">
            <?php //сюда подставиться значение для вывода ?>
        </pre>
	</body>
</html>