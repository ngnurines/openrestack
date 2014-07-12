<?php
require('system/keystone.php');

$keystone = new Keystone('10.125.3.19');
echo $keystone->get_api();