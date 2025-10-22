SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


 

CREATE TABLE `applicants` (
  `id` int NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `olevel_results` text,
  `jamb_score` int DEFAULT NULL,
  `course_choice` varchar(100) DEFAULT NULL,
  `birth_certificate` varchar(255) DEFAULT NULL,
  `lga_certificate` varchar(255) DEFAULT NULL,
  `passport_photo` varchar(255) DEFAULT NULL,
  `payment_receipt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





INSERT INTO `applicants` (`id`, `full_name`, `email`, `phone`, `olevel_results`, `jamb_score`, `course_choice`, `birth_certificate`, `lga_certificate`, `passport_photo`, `payment_receipt`) VALUES
(1, 'john frank', 'davidih@gmail.com', '07016097244', 'igbo -A1', 300, 'Fishery ', 'demo1.JPG', 'demo7.JPG', 'demo8.JPG', 'women3.JPG');






ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `applicants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;




