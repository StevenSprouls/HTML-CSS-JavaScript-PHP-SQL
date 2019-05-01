<?php
$conn = mysqli_connect("tund.cefns.nau.edu", "cs212_sms968", "5427043", "cs212_sms968");
 
if (!$conn) {
    exit;
}
$sql = "DELETE FROM cs212_sms968.book WHERE BookTitle ='";
$sql = $sql . $_POST["Title"] . "' ;" ;
$result =  mysqli_query($conn, $sql);
if ($result) {
    echo "the book was deleted.<br>";
} else {
    echo "There was an error deleting the book.<br>";
}
mysqli_close($conn);