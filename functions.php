<?php

// deze functies verkom je dat mensen geen afbeeldingen in de formulier plaatsen.
function sanitize ($raw_data)
{
    global $conn;
    $data = mysqli_real_escape_string($conn, $raw_data);
    $data = htmlspecialchars($data);
    return $data;
}
?>