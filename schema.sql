DROP DATABASE IF EXISTS dolphin_crm;
CREATE DATABASE dolphin_crm;
USE dolphin_crm;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
    `id` int(11) NOT NULL auto_increment PRIMARY KEY,
    `firstname` varchar(255) NOT NULL,
    `lastname` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `role` varchar(255) NOT NULL,
    `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`firstname`,`email`, `password`, `role`,`created_at`)
VALUES ('Admin','admin@project2.com', MD5('password123'),'Admin','2022-11-13 11:00:00.000000');

INSERT INTO `users` (`id`,`firstname`,`lastname`,`password`, `email`, `role`, `created_at`) VALUES 
(NULL,'Jan','Levinson','','jan.levinson@paper.co','Member','2022-11-13 11:00:00.000000'),
(NULL,'David','Wallace','','david.wallace@paper.co','Admin','2022-11-10 19:00:00.000000'),
(NULL,'Andy','Bernard','','andy.bernardn@paper.co','Member','2022-11-10 11:00:00.000000'),
(NULL,'Darryl','Philbin','','darryl.philbin@paper.co','Member','2022-11-09 23:00:00.000000'),
(NULL,'Erin','Hannon','','erin.hannon@paper.co','Member','2022-11-08 13:30:00..000000'),
(NULL,'Michael','Scott','','michael.scott@paper.co','Admin','2022-11-08 13:00:00.000000'),
(NULL,'Dwight','Shrute','','dwight.schrute@paper.co','Member','2022-11-07 10:30:00.000000'),
(NULL,'Kelly','Kapoor','','kelly.kapoor@vance.co','Member','2022-11-07 11:40:00.000000'),
(NULL,'Angela','Martin','','angela.martin@vance.co','Member','2022-11-06 09:30:00.000000'),
(NULL,'Pam','Beesley','','pam.beesley@dunder.co','Member','2022-11-06 09:30:00.000000');


DROP TABLE IF EXISTS `contacts`;
CREATE TABLE contacts (
    `id` int(11) NOT NULL auto_increment PRIMARY KEY,
    `title` varchar(255) NOT NULL,
    `firstname` varchar(255) NOT NULL,
    `lastname` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `telephone` varchar(255) NOT NULL,
    `company` varchar(255) NOT NULL,
    `type` varchar(255) NOT NULL,
    `assigned_to` int(11) NOT NULL,
    `created_by` int(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `contacts` (`id`,`title`,`firstname`,`lastname`, `email`, `telephone`, `company`, `type`, `assigned_to`, `created_by`, `created_at`, `updated_at`)
VALUES (NULL,'Mrs.','Jan','Levinson','jan.levinson@paper.co','123-456-7890','The Paper Company','Sales Lead','2','6','2022-11-13 11:00:00','2022-11-13 11:01:00'),
(NULL,'Mr.','David','Wallace','david.wallace@paper.co','876-999-9999','The Paper Company','Sales Lead','1','6','2022-11-10 19:00:00', '2022-11-11 20:00:00'),
(NULL,'Mr.','Andy','Bernard','andy.bernardn@paper.co','123-456-7890','The Paper Company','Support','7','2','2022-11-10 11:00:00','2022-11-10 11:05:00'),
(NULL,'Mr.','Darryl','Philbin','darryl.philbin@paper.co','876-999-9999','The Paper Company','Support','8','2','2022-11-09 23:00:00','2022-11-09 23:15:00'),
(NULL,'Ms.','Erin','Hannon','erin.hannon@paper.co','876-999-9999','The Paper Company','Support','3','6','2022-11-08 13:30:00','2022-11-09 12:30:00'),
(NULL,'Mr.','Michael','Scott','michael.scott@paper.co','123-456-7890','The Paper Company','Sales Lead','4','2','2022-11-08 13:00:00','2022-11-10 11:00:00'),
(NULL,'Mr.','Dwight','Shrute','dwight.schrute@paper.co','123-456-7890','The Paper Company','Sales Lead','5','6','2022-11-07 10:30:00','2022-11-08 14:30:00'),
(NULL,'Mrs.','Kelly','Kapoor','kelly.kapoor@vance.co','876-999-9999','Vance Company','Sales Lead','9','6','2022-11-07 11:40:00','2022-11-08 14:30:00'),
(NULL,'Ms.','Angela','Martin','angela.martin@vance.co','123-456-7890', 'Vance Company','Support','8','2','2022-11-06 09:30:00','2022-11-08 09:00:00'),
(NULL,'Mrs.','Pam','Beesley','pam.beesley@dunder.co','876-999-9999','Dunder Company','Sales Lead','10','2','2022-11-06 09:30:00','2022-11-13 08:30:00');


DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
    `id` int(11) NOT NULL auto_increment PRIMARY KEY,
    `contact_id` int(11) NOT NULL,
    `comment` text NOT NULL,
    `created_by` int(11) NOT NULL,
    `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `notes` (`id`,`contact_id`, `comment`, `created_by`, `created_at`)
VALUES (NULL,'1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec laoreet nisl. 
        Mauris in mi efficitur, lobortis nibh ut, lobortis nisl. Curabitur volutpat nisi diam, 
        eget tincidunt nibh accumsan ut. Nullam euismod ornare quam ut consectetur. Integer 
        luctus purus metus, aliquam cursus erat elementum non. In et dui in diam porttitor vestibulum. 
        Vivamus in laoreet justo, nec commodo elit.','2','2022-11-13 11:00:00'),
(NULL,'2','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec laoreet nisl. 
        Mauris in mi efficitur, lobortis nibh ut, lobortis nisl. Curabitur volutpat nisi diam, 
        eget tincidunt nibh accumsan ut. Nullam euismod ornare quam ut consectetur. Integer 
        luctus purus metus, aliquam cursus erat elementum non. In et dui in diam porttitor vestibulum. 
        Vivamus in laoreet justo, nec commodo elit.','1','2022-11-10 19:00:00'),
(NULL,'3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec laoreet nisl. 
        Mauris in mi efficitur, lobortis nibh ut, lobortis nisl. Curabitur volutpat nisi diam, 
        eget tincidunt nibh accumsan ut. Nullam euismod ornare quam ut consectetur. Integer 
        luctus purus metus, aliquam cursus erat elementum non. In et dui in diam porttitor vestibulum. 
        Vivamus in laoreet justo, nec commodo elit.','4','2022-11-10 11:00:00'),
(NULL,'4','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec laoreet nisl. 
        Mauris in mi efficitur, lobortis nibh ut, lobortis nisl. Curabitur volutpat nisi diam, 
        eget tincidunt nibh accumsan ut. Nullam euismod ornare quam ut consectetur. Integer 
        luctus purus metus, aliquam cursus erat elementum non. In et dui in diam porttitor vestibulum. 
        Vivamus in laoreet justo, nec commodo elit.','3','2022-11-09 23:00:00'),
(NULL,'5','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec laoreet nisl. 
        Mauris in mi efficitur, lobortis nibh ut, lobortis nisl. Curabitur volutpat nisi diam, 
        eget tincidunt nibh accumsan ut. Nullam euismod ornare quam ut consectetur. Integer 
        luctus purus metus, aliquam cursus erat elementum non. In et dui in diam porttitor vestibulum. 
        Vivamus in laoreet justo, nec commodo elit.','1','2022-11-08 13:30:00');


