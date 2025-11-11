<?php
function createProfile($name, $role = "student", $status = "active") {
    echo "Name: $name<br>";
    echo "Role: $role<br>";
    echo "Status: $status<br><br>";
}


createProfile("kishor");
createProfile("Ram", "teacher");
createProfile("Diluc", "admin", "inactive");
?>