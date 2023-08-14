CREATE TABLE Quotation(
    qout_number int PRIMARY KEY AUTO_INCREMENT,
    job_number int,
    FOREIGN KEY(job_number) REFERENCES job_registration(job_number),
    job_product_id int,
    FOREIGN KEY(job_product_id) REFERENCES job_products(job_product_id),
    job_product_price

)