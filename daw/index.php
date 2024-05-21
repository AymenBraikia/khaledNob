<?php 

$conn = mysqli_connect("localhost", "root", "", "comments");

if (!$conn) {
    die("error " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
        $comn = mysqli_real_escape_string($conn, $_POST['comn']);

        $query = "INSERT INTO commentaire (email,comn) VALUES ('$email','$comn')";

        if (mysqli_query($conn, $query)) {
             header("Location:page1.php");
            } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);

?>