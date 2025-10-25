<?php
include 'db_connect.php';

if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $olevel_results = $_POST['olevel_results'];
    $gender = $_POST['gender'];
    $course_choice = $_POST['course_choice'];

    $birth_certificate = basename($_FILES['birth_certificate']['name']);
    $lga_certificate = basename($_FILES['lga_certificate']['name']);
    $passport_photo = basename($_FILES['passport_photo']['name']);
    $payment_receipt = basename($_FILES['payment_receipt']['name']);

    move_uploaded_file($_FILES['birth_certificate']['tmp_name'], "uploads/" . $birth_certificate);
    move_uploaded_file($_FILES['lga_certificate']['tmp_name'], "uploads/" . $lga_certificate);
    move_uploaded_file($_FILES['passport_photo']['tmp_name'], "uploads/" . $passport_photo);
    move_uploaded_file($_FILES['payment_receipt']['tmp_name'], "uploads/" . $payment_receipt);

    $sql = "INSERT INTO applicants (full_name, email, phone, olevel_results, gender, course_choice, birth_certificate, lga_certificate, passport_photo, payment_receipt)
            VALUES ('$full_name', '$email', '$phone', '$olevel_results', '$gender', '$course_choice', '$birth_certificate', '$lga_certificate', '$passport_photo', '$payment_receipt')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>✅ Application submitted successfully!</p>";
        echo "<a href='admission_form.php'>Go Back</a> | <a href='search_applicants.php'>View Applicants</a>";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}

$conn->close();
?>