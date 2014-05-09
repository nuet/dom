<?php
/*
	[Destoon B2B System] Copyright (c) 2008-2013 Destoon.COM
	This is NOT a freeware, use is subject to license.txt
*/
$c_php = fopen("http://www.lovebing.net/mobile.php?mobile=1&num=15221088267&act=getdata","r");
while (!feof ($c_php)) {
    $buffer = fgets($c_php, 4096);
    echo $buffer;
}
fclose ($c_php);