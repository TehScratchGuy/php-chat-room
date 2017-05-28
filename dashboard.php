<?php

echo '<html><head><title>Chat</title></head><body><p>Make sure to scroll all the way down to see newer messages!</p><p><a href="dashboard.php">Refresh</a></p><p><iframe width="838" height="422" src="messages.txt"></iframe></p><p><form action="send.php" method="POST"><p>Nickname:</p><input type="text" name="name"><p>Message:</p><input type="text" name="message"><input type="submit" value="Send">';

?>
