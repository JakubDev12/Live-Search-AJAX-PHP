
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` text NOT NULL,
  `userAge` int(11) NOT NULL,
  `userLoc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`userID`, `userName`, `userAge`, `userLoc`) VALUES
(1, 'Jacob', 21, 'Poland'),
(2, 'Simon', 20, 'United Kingdom'),
(3, 'Carol', 27, 'United Kingdom'),
(4, 'Peter', 18, 'Germany'),
(5, 'Igor', 20, 'France'),
(6, 'James', 30, 'United States'),
(7, 'Philip', 24, 'United Kingdom'),
(8, 'Ivan', 32, 'Ukraine');

ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);


ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;