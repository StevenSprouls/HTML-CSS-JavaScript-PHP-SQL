<!DOCTYPE html>

<html>

    <head>

        <title> Retrieve Books </title>

    </head>

    <body>

        <h1>Book List</h1>

        <table border="1.5">
            
            <tr>
                <th> Title </th>
                <th> Author </th>
                <th> Year </th>
            </tr>

            <?php
            $conn = mysqli_connect("tund.cefns.nau.edu", "cs212_sms968", "5427043", "cs212_sms968");
            $sql = "SELECT BookTitle, BookFirstAuthor, BookYear FROM cs212_sms968.book;";
            $result =  mysqli_query($conn, $sql);
            while ($row =  mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>";
                echo $row["BookTitle"];
                echo "</td>";
                echo "<td>";
                echo $row["BookFirstAuthor"];
                echo "</td>";
                echo "<td>";
                echo $row["BookYear"];
                echo "</td>";
                echo "</tr>";
            }
            mysqli_close($conn);
            ?>
            
        </table>

    </body>

</html>