<?php
if (isset($_POST['count'])) {
    echo $_POST['count'];
    for ($i = 0; $i <= 100; $i++) {
        echo $_POST['ep_chkbox' . $i];
    }
}
?>