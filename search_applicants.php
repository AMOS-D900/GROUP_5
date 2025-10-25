<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Applicants</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Search Applicants by Course</h2>

  <form method="GET" class="search-box">
      <input type="text" name="course_choice" placeholder="Enter course name">
      <input type="submit" value="Search">
  </form>

  <?php
  if (isset($_GET['course_choice']) && $_GET['course_choice'] != "") {
      $course = $_GET['course_choice'];
      $sql = "SELECT * FROM applicants WHERE course_choice LIKE '%$course%'";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          echo "<table>";
          echo "<tr><th>Full Name</th><th>Email</th><th>Phone</th><th>Course</th><th>Gender</th><th>Passport</th></tr>";
          while ($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>{$row['full_name']}</td>
                      <td>{$row['email']}</td>
                      <td>{$row['phone']}</td>
                      <td>{$row['course_choice']}</td>
                      <td>{$row['gender']}</td>
                      <td><img src='uploads/{$row['passport_photo']}' width='60'></td>
                    </tr>";
          }
          echo "</table>";
      } else {
          echo "<p>No applicants found for: <b>$course</b></p>";
      }
  }
  $conn->close();
  ?>
</div>
</body>
</html>