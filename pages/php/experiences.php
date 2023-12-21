<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('pages/yaml/experiences.yaml');
//print_array($data);

echo "<p>".$data["exp"]."</p>";
echo '<a href="asset/documents/'.$data["cv"].'">CV</a>';

?>
