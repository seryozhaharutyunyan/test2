<?php
require 'vendor/autoload.php';
const ROOT_DIR=__DIR__;
const DS=DIRECTORY_SEPARATOR;

use Classes\TimeToWordConverter;

$cloc=new TimeToWordConverter();
echo $cloc->convert(12,56);
