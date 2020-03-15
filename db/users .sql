-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 15, 2020 at 10:12 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silver technology`
--

-- --------------------------------------------------------

-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_uid` varchar(256) NOT NULL,
  `user_psw` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `user_uid`, `user_psw`) VALUES
(5, 'admin', '$2y$10$tdXJTu.70sx9OIpjTUasA.zsp0h445SklGEWB0YtFEQIak90.7f4.');
COMMIT;



--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_message` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_message`, `created_at`) VALUES
(41, 'Great', 'Day', 'greatday@gmail.com', 'Nam sollicitudin nisi id tincidunt viverra. Aliquam quis commodo sapien. Donec sed dolor scelerisque augue fringilla auctor.\\nMauris et massa ligula. Donec diam ex, efficitur id diam quis, ullamcorper venenatis est. Nunc sed nulla urna. Integer aliquam nunc vel magna pellentesque, ut ultrices nisl condimentum. Etiam hendrerit ipsum tempor, consequat lorem nec, consectetur metus. Nullam sed molestie massa. Vestibulum rutrum ante in fermentum luctus.', '2020-03-15 14:09:20'),
(40, 'admin', 'admin', 'admin@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus ligula lorem, in vehicula dolor ornare nec. Suspendisse semper arcu a velit fringilla, vel posuere elit sagittis. Suspendisse nec consequat velit. Aliquam sit amet felis interdum, semper leo luctus, consequat tellus. Vivamus convallis diam ac nibh ultrices tempus. Nulla erat erat, tincidunt in risus et, blandit volutpat nisi. Sed porttitor, dui a maximus fermentum, velit libero semper dolor, sed vehicula sem justo at sem.', '2020-03-15 14:08:21'),
(36, 'Samir', 'Chaouch', 'samirchaouch@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus ligula lorem, in vehicula dolor ornare nec. Suspendisse semper arcu a velit fringilla, vel posuere elit sagittis. Suspendisse nec consequat velit. Aliquam sit amet felis interdum, semper leo luctus, consequat tellus. Vivamus convallis diam ac nibh ultrices tempus. Nulla erat erat, tincidunt in risus et, blandit volutpat nisi. Sed porttitor, dui a maximus fermentum, velit libero semper dolor, sed vehicula sem justo at sem. Sed vulputate eu est scelerisque commodo.', '2020-03-15 14:04:29'),
(37, 'John', 'Doe', 'johndoe@gmail.com', 'Etiam accumsan tempor tellus, eget mollis eros pharetra ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus hendrerit, lacus a convallis convallis, urna orci posuere lectus, et scelerisque arcu est vitae tortor.\\nMaecenas rhoncus rhoncus rutrum. Nulla convallis faucibus placerat. Vestibulum at consectetur urna. Morbi eu sapien volutpat tortor mattis suscipit non nec turpis. Sed augue arcu, laoreet nec est vel, pellentesque aliquet diam. Integer vestibulum diam eget imperdiet rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2020-03-15 14:05:23'),
(38, 'qwerty', 'qwerty', 'qwerty@gmail.com', 'Maecenas blandit iaculis tellus, eget cursus leo porta non. Curabitur pulvinar metus sit amet diam sodales, at sodales sem fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dictum non odio ac aliquet. Etiam lacus mi, porta id varius a, semper eu velit. Donec commodo bibendum augue mollis dapibus. Maecenas vitae libero bibendum, mattis ligula quis, accumsan libero. Nullam aliquet ex sed augue imperdiet, et mattis tellus iaculis. Morbi blandit urna ac sem lacinia, quis ullamcorper eros vestibulum.', '2020-03-15 14:06:27'),
(39, 'azerty', 'azerty', 'azerty@gmail.com', 'Vestibulum semper scelerisque tellus vitae bibendum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer id libero non felis aliquet tincidunt sed sit amet felis. Proin a molestie ligula, ac accumsan lorem. Nam sed laoreet mi.\\nDonec ut metus sem. Morbi auctor nulla nec enim porttitor efficitur. In consequat molestie erat. Nam convallis ligula dolor, at luctus elit aliquet at. Aliquam mattis auctor rhoncus.', '2020-03-15 14:06:55'),
(42, 'Karim', 'karim', 'karim@gmail.com', 'Maecenas blandit iaculis tellus, eget cursus leo porta non. Curabitur pulvinar metus sit amet diam sodales, at sodales sem fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dictum non odio ac aliquet. Etiam lacus mi, porta id varius a, semper eu velit. Donec commodo bibendum augue mollis dapibus. Maecenas vitae libero bibendum, mattis ligula quis, accumsan libero. Nullam aliquet ex sed augue imperdiet, et mattis tellus iaculis. Morbi blandit urna ac sem lacinia, quis ullamcorper eros vestibulum.', '2020-03-15 14:10:09'),
(43, 'Lorem', 'Ipsum', 'karim@gmail.com', 'Vestibulum semper scelerisque tellus vitae bibendum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer id libero non felis aliquet tincidunt sed sit amet felis. Proin a molestie ligula, ac accumsan lorem. Nam sed laoreet mi.\\nDonec ut metus sem. Morbi auctor nulla nec enim porttitor efficitur. In consequat molestie erat. Nam convallis ligula dolor, at luctus elit aliquet at. Aliquam mattis auctor rhoncus. Nullam lacinia malesuada libero non facilisis. Proin dapibus ultrices urna, ac consequat nulla vestibulum ac.', '2020-03-15 14:11:12'),
(44, 'John', 'Doe', 'johndoe@gmail.com', 'Mauris et massa ligula. Donec diam ex, efficitur id diam quis, ullamcorper venenatis est. Nunc sed nulla urna. Integer aliquam nunc vel magna pellentesque, ut ultrices nisl condimentum. Etiam hendrerit ipsum tempor, consequat lorem nec, consectetur metus. Nullam sed molestie massa. Vestibulum rutrum ante in fermentum luctus. Cras mauris ipsum, porta et rhoncus eu, mollis vehicula tortor. Sed sed orci sit amet mauris laoreet venenatis ac nec enim. Ut ornare enim id neque congue tristique. Ut efficitur turpis ut auctor egestas. Donec eleifend mauris erat, vitae ultrices lacus cursus eget. In lorem augue, consequat eu mauris eget, tincidunt ultrices mauris.', '2020-03-15 14:12:23'),
(45, 'Yes', 'Man', 'yesman@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus ligula lorem, in vehicula dolor ornare nec. Suspendisse semper arcu a velit fringilla, vel posuere elit sagittis. Suspendisse nec consequat velit. Aliquam sit amet felis interdum, semper leo luctus, consequat tellus. Vivamus convallis diam ac nibh ultrices tempus. Nulla erat erat, tincidunt in risus et, blandit volutpat nisi. Sed porttitor, dui a maximus fermentum, velit libero semper dolor, sed vehicula sem justo at sem. Sed vulputate eu est scelerisque commodo. Etiam accumsan tempor tellus, eget mollis eros pharetra ut.', '2020-03-15 14:19:22'),
(46, 'Random', 'User', 'randomuser@gmail.com', 'Maecenas blandit iaculis tellus, eget cursus leo porta non. Curabitur pulvinar metus sit amet diam sodales, at sodales sem fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dictum non odio ac aliquet. Etiam lacus mi, porta id varius a, semper eu velit. Donec commodo bibendum augue mollis dapibus. Maecenas vitae libero bibendum, mattis ligula quis, accumsan libero.', '2020-03-15 14:21:30'),
(47, 'Maecenas', 'Maecenas', 'Maecenas@gmail.com', 'Maecenas rhoncus rhoncus rutrum. Nulla convallis faucibus placerat. Vestibulum at consectetur urna. Morbi eu sapien volutpat tortor mattis suscipit non nec turpis. Sed augue arcu, laoreet nec est vel, pellentesque aliquet diam. Integer vestibulum diam eget imperdiet rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\\nMaecenas blandit iaculis tellus, eget cursus leo porta non. Curabitur pulvinar metus sit amet diam sodales, at sodales sem fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dictum non odio ac aliquet. Etiam lacus mi, porta id varius a, semper eu velit. Donec commodo bibendum augue mollis dapibus. Maecenas vitae libero bibendum, mattis ligula quis, accumsan libero', '2020-03-15 14:29:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
