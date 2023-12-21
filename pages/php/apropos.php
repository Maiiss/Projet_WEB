<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('pages/yaml/apropos.yaml');
//print_array($data);

echo "<p>".$data["accroche"]."</p>";
echo "<p>".$data["presentation"]."</p>";

echo '<a href="/pages/extentions/dva/dva.php">';
echo '<img height="250" width="250" src="asset/images/'.$data["photo"].'">';
echo '</a>';

?>