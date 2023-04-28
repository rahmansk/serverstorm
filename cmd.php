<?php
if(isset($_POST['submit'])){
    $command = $_POST['command'];
    $output = shell_exec('ping -c 4 ' . $command);
    echo "<pre>$output</pre>";
}
?>

<html>
<head>
    <title>Ping Test ;)</title>
</head>
<body>
    <h1>System Test</h1>
    <form method="post">
        <label>Enter IP address:</label>
        <input type="text" name="command" />
        <input type="submit" name="submit" value="Ping" />
    </form>
</body>
</html>
