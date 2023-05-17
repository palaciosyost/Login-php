<?php

if (isset($_POST['user']) && isset($_POST['pass'])) {

    if (empty($_POST['user']) or empty($_POST['pass'])) {
?>
        <p class="alert err">No puedes dejar espacios en blanco</p>
<?php
    } else {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $selectedUser = new logeo();
        $selectedUser->get_user($user, $pass);
    }
}
