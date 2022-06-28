<?php
$hostname = gethostname();
$ip = gethostbyname($hostname);

echo "<h1>Hello World</h1>";
echo "<p>This is a sample page.</p>";
echo "<p>Server name is '{$hostname}' with ip {$ip}</p>";