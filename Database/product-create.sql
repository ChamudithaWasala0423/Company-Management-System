CREATE TABLE product(
    product_id int PRIMARY KEY AUTO_INCREMENT,
    product_name varchar(255) NOT NULL,
    add_date date DEFAULT CURRENT_DATE,
    add_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

-----------------------------------------------------------------------------------------

Create TABLE Metirial_light(
    metirial_light_id int PRIMARY KEY AUTO_INCREMENT,
    light_name varchar(255) NOT NULL,
    Light_type varchar(255) NOT NULL,
    uom varchar(10) NOT NULL,
    price float NOT NULL,
    add_date date DEFAULT CURRENT_DATE,
    add_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

-----------------------------------------------------------------------------------------

CREATE TABLE Meterial_Structure(
    Metirial_structure_id int PRIMARY KEY AUTO_INCREMENT,
    Structure_name varchar(255) NOT NULL,
    Structure_type varchar(255) NOT NULL,
    uom varchar(10) NOT NULL,
    price float NOT NULL,
    add_date date DEFAULT CURRENT_DATE,
    add_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)

-----------------------------------------------------------------------------------------

CREATE TABLE Metirial_Print(
    Metirial_print_id int PRIMARY KEY AUTO_INCREMENT,
    Print_Metirial_name varchar(255) NOT NULL,
    uom varchar(10) NOT NULL,
    price float NOT NULL,
    add_date date DEFAULT CURRENT_DATE,
    add_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)


--------------------------------------------------------------------------------------------


CREATE TABLE Metirial_Cut(
    Metirial_cut_id int PRIMARY KEY AUTO_INCREMENT,
    Cut_name varchar(255) NOT NULL,
    uom varchar(10) NOT NULL,
    price float NOT NULL,
    add_date date DEFAULT CURRENT_DATE,
    add_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)


--------------------------------------------------------------------------------------------


CREATE TABLE Metirial_Fixing(
    metirial_Fixing_id int PRIMARY KEY AUTO_INCREMENT,
    Fixing_name varchar(255) NOT NULL,
     uom varchar(10) NOT NULL,
    price float NOT NULL,
    add_date date DEFAULT CURRENT_DATE,
    add_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)