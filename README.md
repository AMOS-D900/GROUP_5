University Admission Application (PHP Project)

This project is a simple PHP application for handling university admission form submissions.  
It demonstrates knowledge of PHP basics, form handling with POST and GET methods, file upload, and MySQL database integration.

---

## 🗂 Folder Structure

```
university_admission/
│
├── admission_form.php        # Main HTML form for applicants
├── save_application.php      # Handles form submission and saves data to MySQL
├── search_applicants.php     # Allows search for applicants by course
├── db_connect.php            # Database connection file
├── style.css                 # Styling for the pages
└── uploads/                  # Folder for uploaded images and documents
```

---

## ⚙️ How It Works

### 1. **admission_form.php**
- Displays an HTML form for applicants to fill out.
- Collects details such as:
  - Full Name
  - Email
  - Phone Number
  - O’Level Results (WAEC/NECO/NABTEB)
  - JAMB Score
  - Course Choice
  - Uploads for Birth Certificate, LGA Certificate, Passport Photo, and Payment Receipt.
- Uses `POST` method to send data to `save_application.php`.

### 2. **save_application.php**
- Receives the form data using the `$_POST` superglobal.
- Handles uploaded files using `$_FILES`.
- Moves files to the `uploads/` folder.
- Inserts applicant data into the `applicants` table in the database.
- Displays a confirmation message if the operation is successful.

### 3. **search_applicants.php**
- Allows searching applicants by course choice using a `GET` form.
- Displays a table of applicants who applied for the entered course.
- Shows details like Full Name, Email, Phone, JAMB Score, and Passport Photo.

### 4. **db_connect.php**
- Creates a connection to the MySQL database using `mysqli`.
- Configuration (for MAMP users):
  ```php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "university_db";
  ```
- Make sure you create the database and table before running the app.

### 5. **style.css**
- Styles the form, tables, and layout for a clean, modern look.

---

## 🧠 Database Setup

1. Open **phpMyAdmin**: [http://localhost:8888/phpmyadmin](http://localhost:8888/phpmyadmin)
2. Create a new database:
   ```sql
   CREATE DATABASE university_db;
   ```
3. Select the database, then run this SQL:
   ```sql
   CREATE TABLE applicants (
     id INT AUTO_INCREMENT PRIMARY KEY,
     full_name VARCHAR(100),
     email VARCHAR(100),
     phone VARCHAR(20),
     olevel_results TEXT,
     jamb_score INT,
     course_choice VARCHAR(100),
     birth_certificate VARCHAR(255),
     lga_certificate VARCHAR(255),
     passport_photo VARCHAR(255),
     payment_receipt VARCHAR(255)
   );
   ```

---

## 💻 How to Run the Project

1. Move the `university_admission` folder to:
   ```
   /Applications/MAMP/htdocs/
   ```
2. Start MAMP and make sure **Apache** and **MySQL** are running.
3. Open this link in your browser:
   ```
   http://localhost:8888/university_admission/admission_form.php
   ```
4. Fill out the form and submit.
5. Visit:
   ```
   http://localhost:8888/university_admission/search_applicants.php
   ```
   to search and view saved applicants.

---

## 🧾 Notes for Defense

- `POST` is used for secure form submission (sending data).
- `GET` is used for search queries.
- Files are uploaded into the `uploads/` folder using `move_uploaded_file()`.
- Database interaction is handled by SQL `INSERT` and `SELECT` queries.
- The form and display are styled using **CSS**.

---

## 👨‍💻 Authors
Name/Matric              |Description
|----------------------- |-----------------------------------------------------
| AMOS-D900              | Assigns tasks to members.               
|  Davidiheanacho44      | Handled PHP logic/database connection.  
|joshualala              | Created MySQL tables and managed database structure.               
| Ebiweni-10             | Designed HTML/CSS layout for forms and tables.       
|  Desmond0101           | Implemented input validation and tested all modules.
| Alem David             | Wrote README.md and prepared presentation summary.
| Daisyemmanuella        |  Built dashboard.
| Destinyatigbi          |  Builds university admission features.
