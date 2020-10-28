<?php
$primer="152*(((())5+2)))()";
echo $primer;
$kol_simvolov=strlen($primer);
echo "<br />";
$i=0;
$schet=0;

while($i < $kol_simvolov) {
	if ($primer[$i] == '(') {
		$schet++;
	}
	if ($primer[$i] == ')') {
		$schet--;
	}
	if ($schet < 0) {
		echo "Не правильяная последовательность скобок<br />";
		break;
	}
	$i++;
}

if ($schet > 0) {
	echo "Количество скобочек не совпало<br />";
} else if ($schet == 0) {
	echo "Количество скобочек совпало<br />";
}