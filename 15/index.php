<?php
spl_autoload_register();

echo '<pre>';

//$db = new \Models\Product();
//$data = $db->getOne( 1);
//print_r($data);

$db = new \Models\Review();

$data = [
    'name' => "5345345",
    'phone' => "48-56-22",
    'text' => 'Работаем круглосуточное'
    ];
$db->create($data);

$data = $db->getAll();
print_r($data);
