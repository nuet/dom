<?php 
require 'config.inc.php';
require '../common.inc.php';

require DT_ROOT.'/module/'.$module.'/agreement.inc.php';

include template('agreement', 'member');
?>