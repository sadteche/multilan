<?php 
if (!defined('e107_INIT')) { exit; }


$text = "<table style='width:100%'>
<tr><td>(blank)</td><td>Table missing</td></tr>
<tr><td>&nbsp; -</td><td>Not-Copied</td></tr>";
$text .= "<tr><td>".ADMIN_TRUE_ICON."</td><td>Translated</td></tr>";
$text .= "<tr><td>".ADMIN_FALSE_ICON."</td><td>Not Translated</td></tr>";

$text .= "</table>";

$text .= "<div style='margin-top:5px'>Mouseover each icon to check the title of the item</div>";

$ns->tablerender("Copy Help",$text); 


?>