-- tbl_register
CREATE TABLE register (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
regis_title_name VARCHAR(30) NOT NULL,
regis_academic_position VARCHAR(30) NULL,
regis_manage_position VARCHAR(30) NULL,
regis_eng_name VARCHAR(50) NOT NULL,
regis_eng_lastname VARCHAR(50) NOT NULL,
regis_th_name VARCHAR(100) NOT NULL,
regis_th_lastname VARCHAR(100) NOT NULL,
regis_gender INT(1) NOT NULL,
regis_age INT(2) NOT NULL,
regis_nationality VARCHAR(100) NOT NULL,
regis_mail VARCHAR(100) NOT NULL,
regis_tel VARCHAR(50) NOT NULL,
regis_affiliation VARCHAR(255) NOT NULL,
regis_workpace VARCHAR(255) NULL,
regis_food INT(1) NOT NULL,
regis_group INT(2) NULL,
regis_payment_rate INT(1) NOT NULL,
regis_payment_date DATE,
regis_payment_status INT(1) NOT NULL,
regis_date TIMESTAMP
)

-- eng tbl_register