<?php
define('DT_REWRITE', true);
require 'config.inc.php';
require '../common.inc.php';
echo DT_ROOT.'/module/'.$module.'/show.inc.php';
require DT_ROOT.'/module/'.$module.'/show.inc.php';

?>