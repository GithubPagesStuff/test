<?php
if ($_GET["name"]) {
    $stra = "QUERY_STRINGG=";
    $str = "C:\xampp\htdocs\main.exe";
    $str = $str .= $_GET["name"];
    $stra = $stra .= $_GET["name"];

    putenv($stra);

    $output = shell_exec($str);
    $output = getenv("QUERY_STRINGG");
    echo "<pre>$output</pre>";

}
?>
