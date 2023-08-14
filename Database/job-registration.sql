CREATE TABLE job_registration(
    job_number int PRIMARY KEY AUTO_INCREMENT,
    inqury_id int,
    FOREIGN KEY(inqury_id) REFERENCES inquiry(inqury_id),
    job_type varchar(100) NOT NULL,
    job_name varchar(255) NOT NULL,
    remark varchar(255) NOT NULL,
    add_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP  
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE job_products(
    job_product_id int PRIMARY KEY AUTO_INCREMENT,
    job_number int,
    FOREIGN KEY(job_number) REFERENCES job_registration(job_number),
    product_id int,
    FOREIGN KEY(product_id) REFERENCES product(product_id),
    lit_or_not varchar(50) NOT NULL,
    metirial_light_id int,
    FOREIGN KEY(metirial_light_id) REFERENCES metirial_light(metirial_light_id),
    Metirial_structure_id int,
    FOREIGN KEY(Metirial_structure_id) REFERENCES meterial_structure(Metirial_structure_id),
    Metirial_print_id int,
    FOREIGN KEY(Metirial_print_id) REFERENCES metirial_print(Metirial_print_id),
    Metirial_cut_id int,
    FOREIGN KEY(Metirial_cut_id) REFERENCES metirial_cut(Metirial_cut_id),
    metirial_fixing int,
    FOREIGN KEY(metirial_fixing) REFERENCES metirial_fixing(metirial_fixing),
    Height float NOT NULL,
    Width float NOT NULL,
    Length float NOT NULL,
    uom varchar(10) NOT NULL,
    quntity int NOT NULL,
    add_date date DEFAULT CURRENT_DATE,
    add_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)

ALTER TABLE job_products ADD COLUMN color varchar(255) NOT NULL;