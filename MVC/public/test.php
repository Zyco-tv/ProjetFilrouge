<?php include_once 'dump.php'; 

$a = ['art', true, 1, array(opendir('.'), false, 10.44), ];

$dump = new Dump;

//to display html content

echo $dump->displayHTML($a);

