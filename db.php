<?php
$SERVER_NAME = "localhost";
$DB_name = "cyberpunk";
$DB_user_name = "root";
$DB_user_password = "GL7jo@101";
$conn = mysqli_connect($SERVER_NAME, $DB_user_name, $DB_user_password, $DB_name);
if(!$conn){
    exit("Error".mysqli_connect_error());

}
else{
    echo "Database connected successfully.....";
}

?>


