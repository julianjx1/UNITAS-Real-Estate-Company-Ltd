<?php include('connection.php'); ?>

<?php

$id = "";
$password = "";

if (isset($_GET['ok'])) {
    $id = mysqli_real_escape_string($db, $_REQUEST['id']);
    $password = mysqli_real_escape_string($db, $_REQUEST['password']);
    $opt = $_REQUEST['optradio'];
    if (isset($_REQUEST['optradio'])) {

        switch ($opt) {
            case 1:

                $sql = $db->query("SELECT * FROM user_account WHERE id='$id' AND password='$password'");
                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                $count = mysqli_num_rows($sql);

                if ($count == 1) {
                    header("location: PersonInformation.php");
                } else {
                    header("location: Front%20page.php");
                }
                break;
            case 2:
                $sql = $db->query("SELECT * FROM admin_account WHERE id='$id' AND password='$password'");
                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                $count = mysqli_num_rows($sql);

                if ($count == 1) {
                    header("location: AdminInformation.php");
                } else {
                    header("location: Front%20page.php");
                }
                break;
        }
    }
}
?>