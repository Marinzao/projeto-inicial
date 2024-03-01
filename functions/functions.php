<?php
function db_query($query)
{
    include 'db/connection.php';
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (mysqli_error($conn)) {
        return false;
    } else {
        return $result;
    }
}
