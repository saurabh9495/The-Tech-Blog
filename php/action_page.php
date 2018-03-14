<html>
<body>
<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['email'])) {
    $data = $_POST['name'] . '-' . $_POST['email'] . '-' . $_POST['email'] . "\n";
    $ret = file_put_contents('/tmp/response.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file and your response has been received ,thanks for giving your feeback";
    }
}
else {
   die('no post data to process');
}
?>
</body>
</html> 
