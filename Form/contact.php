<?php

echo'<pre>';
print_r($_POST);
echo '<pre>';

$sent_status = mail{$_POST['email'], 'Send from test PHP application', $_POST['message']};

if ($sent_status) {
    echo 'Message was delivered.';
}
else {
    echo 'Message was not delivered.';
}

?>