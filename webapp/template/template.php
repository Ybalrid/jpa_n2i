<?php
    function doctype()
    {
        echo "<!DOCTYPE html>";
        echo "\n";
    }

    function startHTML()
    {
        doctype();
        echo "<html>";
        echo "\n";
    }     

    function endHTML()
    {
        echo "</html>";
        echo "\n\n";
    }

    function loadJS()
    {
        echo "";
    }

    function addHeader($title, $css)
    {
        echo "<head>";
        echo "<meta charset=\"UTF-8\">";
        if($css != "")
            echo '<link rel="stylesheet" href="style/'.$css.'">';
        echo "<title>".$title."</title>";
        echo "</head>";

        echo "\n";
        
    }

    function getTxtInFile($filename)
    {
        return "\n" . file_get_contents("content/".$filename) . "\n";
    }

    function insertBody($text)
    {
        echo "<body>".$text."</body>";
    }
?>
