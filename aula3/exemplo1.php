<?php

$link = fopen("listaNomes.txt","r");

while(!feof($link)){
	$linha = fgets($link,4096);	
	echo $linha."<br>";
}

fclose($link);