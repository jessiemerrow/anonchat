<?php
/**
**/

/*
	This is the log reader. Just log reader, no more functions.
*/

$logs = file_get_contents('chat.txt');

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chat Logs</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div id="page-wrap" class="page-wrap">
		<div id="chat-wrap" class="chatd">
			<div id="chat-area"><?=$logs;?></div>
		</div>
		<div class="info">
			<a href="index.php">&larr; return</a>
		</div>
    </div>
</body>
</html>
