<?php
$conn = mysqli_connect("tund.cefns.nau.edu", "cs212_sms968", "5427043", "cs212_sms968");
if (!$conn) {
    exit;
}
$sql = "INSERT INTO (BookTitle, BookFirstAuthor, BookYear) VALUES (";
$sql = $sql . "'" . $_POST["Title"] . "' ,";
$sql = $sql . "'" . $_POST["FirstAuthor"] . "' ,";
$sql = $sql . "'" . $_POST["Year"] . "'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "The book was saved.<br>";
} else {
    echo "Error while attempting to insert the saved book.<br>";
}
mysqli_close($conn);