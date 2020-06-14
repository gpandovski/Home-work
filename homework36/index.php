<?php

include "gpandovski/Select/ASelect.php";
include "gpandovski/Select/HtmlSelect.php";
include "gpandovski/Select/BootstrapSelect.php";

use gpandovski\Select\ASelect;
use gpandovski\Select\HtmlSelect;
use gpandovski\Select\BootstrapSelect;

$browsers = ['none', 'firefox', 'chrome', 'internet explorer', 'safari', 'edge', 'opera', 'other'];

$htmlSelect = new HtmlSelect();
$htmlSelect->setName('browser');
$htmlSelect->setValue($browsers);
$htmlSelect->makeSelect();