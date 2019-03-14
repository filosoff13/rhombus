<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 14.03.19
 * Time: 13:58
 */

// высота по умолчанию
//public const HEIGHT = 4;
$height = 4;

// определяем высоту
$height = (
	isset( $_GET['height'] ) // если высота передана по гет
	? (int)$_GET['height']   // используем ее как числовое значение
	: $height        // иначе используем значение по умолчанию
);


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
                <label for="height">height(only even value):</label>
				<input type="text" id="height" name="height" value="<?=$height?>">
				<input type="submit" value="generate">
			</fieldset>
		</form>

		<pre class="output">
            <?php
            $r1 = 0;
            $center = round($height/2);//3
            for($y=1; $y <= $height; $y++){
                if ($y <= $center){//1      |2      |3
                    $l = $height-$y - $center;//6-1=5| 6-2=4 | 6-3=3
                    $r = $y*2-1;//1*2-1=1|2*2-1=3|3*2-1=5
                    echo str_repeat('-', $l ).str_repeat('*', $r ).str_repeat('-', $l )."\n";
                    $r1 = $r;
                } else {            //4     |5      |6
                    $l = $y - $center;//6-4-1=1|6-5-1=0| $y - $center
                    $r1 = $r1-2;//4*2-1=7| $y - $center
                    echo str_repeat('-', $l ).str_repeat('*', $r1 ).str_repeat('-', $l )."\n";
                }
            }

            ?>
        </pre>
	</body>
</html>

