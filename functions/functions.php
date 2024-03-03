<?php
function db_query($query)
{
    include 'db/connection.php';
    $result = mysqli_query($conn, $query);
    if (mysqli_error($conn)) {
        return false;
    } else {
        return $result;
    }
}
