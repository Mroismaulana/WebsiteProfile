<?php
if (isset($_POST['uname']) && isset($_POST['password'])) {

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    }

    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);

   if (empty($uname)) {
        header("Location: index.php?error= User Name is required");
        exit();
   }
    else if (empty($pass)) {
        header("Location: index.php?error= password is required");
        exit();
    }else{
        echo "valid input";
    }
    } else{
    header("Location: index.php");
    exit();
}
