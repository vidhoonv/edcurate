<?php

session_start();
if ($_FILES["file1"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file1"]["error"] . "<br />";

	}
else
{



	echo "Upload: " . $_FILES["file1"]["name"] . "<br />";
    echo "Type: " . $_FILES["file1"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file1"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file1"]["tmp_name"] . "<br />";
echo $_FILES["file1"]["tmp_name"]."///".$_FILES["file1"]["name"];
move_uploaded_file($_FILES["file1"]["tmp_name"],"vids/".$_FILES["file1"]["name"]);

}
?>	
<HTML>
<HEAD>
<TITLE>
	Success
</TITLE>
</HEAD>
<BODY>
	done
</BODY>
</HTML>		
