<!-- <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $experience = $_POST['experience'];
    $specialization = $_POST['specialization'];
    $philosophy = $_POST['philosophy'];

    // Save to database (example only)
    $conn = new mysqli("localhost", "root", "", "ocean_fc");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO coach_applications (fullname, experience, specialization, philosophy)
            VALUES ('$fullname', '$experience', '$specialization', '$philosophy')";

    if ($conn->query($sql) === TRUE) {
        echo "Application Submitted Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?> -->
