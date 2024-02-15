<?php
require("connection.php");

if (isset($_POST["submit"])) {   
    // Retrieve user input
    $question1 = mysqli_real_escape_string($conn, $_POST["question1"]);
    $question2 = mysqli_real_escape_string($conn, $_POST["question2"]);
    $question3 = mysqli_real_escape_string($conn, $_POST["question3"]);
    $question4 = mysqli_real_escape_string($conn, $_POST["question4"]);
    $question5 = mysqli_real_escape_string($conn, $_POST["question5"]);

    // Insert user data into the database
    $sql = "INSERT INTO answer (q1, q2, q3, q4, q5) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        // Handle SQL error more gracefully (e.g., log it or display a user-friendly message)
        echo "An error occurred. Please try again later.";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "sssss", $question1, $question2, $question3, $question4, $question5);
        mysqli_stmt_execute($stmt);
        header("Location:index.php?registration=Success");
        exit();
    }
}
?>
