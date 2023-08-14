CREATE TABLE inquiry(
    inqury_id int PRIMARY KEY AUTO_INCREMENT,
    Customer_name varchar(255) NOT NULL,
    location varchar(255) NOT NULL,
    contact_person_name varchar(255) NOT NULL,
    contact_number varchar(11) NOT NULL,
    Priority_level varchar(255) NOT NULL,
    description varchar(255) NOT NULL,
    Job_Select_Company varchar(255) NOT NULL,
    Job_Getting_user varchar(255) NOT NULL,
    add_date date DEFAULT CURRENT_DATE,
    add_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE job_registartion AUTO_INCREMENT=100;


CREATE TABLE `inq_images` (
  `img_inq_id` int(11) PRIMARY KEY AUTO_INCREMENT,
  inqury_id int,
  FOREIGN KEY(inqury_id) REFERENCES inquiry(inqury_id),
  `img_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


]kj:n24sTS3