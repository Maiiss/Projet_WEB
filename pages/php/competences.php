<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('pages/yaml/competences.yaml');
//print_array($data);

echo "<p>".$data["domaines"]."</p>";
echo "<p>".$data["items"]."</p>";
echo "<p>".$data["niv"]."</p>";

?>
