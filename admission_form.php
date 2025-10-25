<!DOCTYPE html>
<html>
<head>
  <title>University Admission Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>University Admission Application</h2>
  <form action="save_application.php" method="POST" enctype="multipart/form-data">
    
    <input type="text" name="full_name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="phone" placeholder="Phone Number" required>

    <label>O’Level Results (WAEC/NECO/NABTEB)</label>
    <textarea name="olevel_results" placeholder="List your subjects and grades" rows="3" required></textarea>

    <label>Gender</label>
    <input type="text" name="gender" placeholder="Enter your gender" required>

    <label>Course Choice</label>
    <input type="text" name="course_choice" placeholder="Course you are applying for" required>

    <label>Upload Birth Certificate / Declaration of Age</label>
    <input type="file" name="birth_certificate" accept="image/*,application/pdf" required>

    <label>Upload Local Government / State of Origin Certificate</label>
    <input type="file" name="lga_certificate" accept="image/*,application/pdf" required>

    <label>Passport Photograph</label>
    <input type="file" name="passport_photo" accept="image/*" required>

    <label>Payment Receipt</label>
    <input type="file" name="payment_receipt" accept="image/*,application/pdf" required>

    <input type="submit" value="Submit Application">
  </form>
</div>
</body>
</html>