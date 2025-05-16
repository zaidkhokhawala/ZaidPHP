
1. Add this table to your MySQL database called 'store':

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `booking_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
);

