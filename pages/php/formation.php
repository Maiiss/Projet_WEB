<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('pages/yaml/formation.yaml');
//print_array($data);

echo "<p>".$data["formation"]."</p>";
echo '<a href="asset/documents/'.$data["cv"].'">CV</a>';
?>
