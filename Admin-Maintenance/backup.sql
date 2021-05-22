DROP TABLE tb_daily_attendance;

CREATE TABLE `tb_daily_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `staff` varchar(255) NOT NULL,
  `typeOfTransaction` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_daily_attendance VALUES("17","07:15 pm","May 22, 2021","Jan Christan Evangelista","Received Product","Hanabishi","Electric Pressure Cooker","50");
INSERT INTO tb_daily_attendance VALUES("18","07:18 pm","May 22, 2021","Jan Christan Evangelista","Received Product","Panasonic","Dry Iron","50");
INSERT INTO tb_daily_attendance VALUES("19","07:23 pm","May 22, 2021","Jan Christan Evangelista","Delivered Product","Samsung","Refrigerator","5");
INSERT INTO tb_daily_attendance VALUES("20","07:24 pm","May 22, 2021","Jan Christan Evangelista","Delivered Product","Samsung","Refrigerator","5");



DROP TABLE tbl_audit_trail;

CREATE TABLE `tbl_audit_trail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `timein` varchar(255) NOT NULL,
  `timeout` varchar(255) DEFAULT NULL,
  `activity` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=262 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_audit_trail VALUES("222","admin","Ordep","Badeo","Labrador","06:31 pm","06:48 pm","Logged In","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("223","admin","Ordep","Badeo","Labrador","06:37 pm","06:48 pm","Registered user to the system","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("224","admin","Ordep","Badeo","Labrador","06:39 pm","06:48 pm","Registered user to the system","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("225","admin","Ordep","Badeo","Labrador","06:41 pm","06:48 pm","Registered user to the system","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("226","admin","Ordep","Badeo","Labrador","06:46 pm","06:48 pm","Registered user to the system","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("227","admin","Ordep","Badeo","Labrador","06:48 pm","06:48 pm","Registered user to the system","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("228","16001669900","Jan Christan","Evangelista","Espiritu","06:51 pm","06:53 pm","Logged In","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("229","admin","Ordep","Badeo","Labrador","06:53 pm","","Logged In","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("230","admin","Ordep","Badeo","Labrador","07:03 pm","","Registered Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("231","admin","Ordep","Badeo","Labrador","07:04 pm","","Registered Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("232","admin","Ordep","Badeo","Labrador","07:05 pm","","Registered Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("233","admin","Ordep","Badeo","Labrador","07:07 pm","","Registered Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("234","admin","Ordep","Badeo","Labrador","07:08 pm","","Registered Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("235","admin","Ordep","Badeo","Labrador","07:08 pm","","Uploaded image in gallery","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("236","admin","Ordep","Badeo","Labrador","07:09 pm","","Uploaded image in gallery","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("237","admin","Ordep","Badeo","Labrador","07:09 pm","","Uploaded image in gallery","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("238","admin","Ordep","Badeo","Labrador","07:10 pm","","Search Product to the inventory","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("239","admin","Ordep","Badeo","Labrador","07:10 pm","","Search Product to the inventory","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("240","admin","Ordep","Badeo","Labrador","07:10 pm","","Search Product to the inventory","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("241","admin","Ordep","Badeo","Labrador","07:10 pm","","Search Product to the inventory","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("242","admin","Ordep","Badeo","Labrador","07:10 pm","","Searched in Sales and Purchase","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("243","admin","Ordep","Badeo","Labrador","07:10 pm","","Searched user or product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("244","admin","Ordep","Badeo","Labrador","07:10 pm","","Searched user or product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("245","admin","Ordep","Badeo","Labrador","07:13 pm","","Input New Incoming Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("246","admin","Ordep","Badeo","Labrador","07:13 pm","","Input New Incoming Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("247","16001669900","Jan Christan","Evangelista","Espiritu","07:14 pm","07:24 pm","Logged In","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("248","16001669900","Jan Christan","Evangelista","Espiritu","07:15 pm","07:24 pm","Received Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("249","admin","Ordep","Badeo","Labrador","07:16 pm","","Registered Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("250","16001669900","Jan Christan","Evangelista","Espiritu","07:18 pm","07:24 pm","Received Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("251","admin","Ordep","Badeo","Labrador","07:22 pm","","Searched user or product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("252","admin","Ordep","Badeo","Labrador","07:22 pm","","Searched user or product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("253","admin","Ordep","Badeo","Labrador","07:22 pm","","Input New Outgoing Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("254","admin","Ordep","Badeo","Labrador","07:22 pm","","Searched user or product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("255","admin","Ordep","Badeo","Labrador","07:23 pm","","Input New Outgoing Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("256","16001669900","Jan Christan","Evangelista","Espiritu","07:23 pm","07:24 pm","Delivered Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("257","16001669900","Jan Christan","Evangelista","Espiritu","07:24 pm","07:24 pm","Delivered Product","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("258","16001669901","Kim Adrian","Jasme","Lauderiz","07:24 pm","","Logged In","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("259","admin","Ordep","Badeo","Labrador","07:26 pm","","Searched in daily attendance","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("260","admin","Ordep","Badeo","Labrador","07:33 pm","","Update price","May 22, 2021");
INSERT INTO tbl_audit_trail VALUES("261","admin","Ordep","Badeo","Labrador","07:34 pm","","Backup Database","May 22, 2021");



DROP TABLE tbl_billing;

CREATE TABLE `tbl_billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;




DROP TABLE tbl_billing_report;

CREATE TABLE `tbl_billing_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `store` varchar(255) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;




DROP TABLE tbl_gallery;

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_gallery VALUES("1","07LeRLO9rbj6luakpZvMVvg-1.1602529741.fit_lpad.size_625x365.jpg");
INSERT INTO tbl_gallery VALUES("2","blender.jpeg");
INSERT INTO tbl_gallery VALUES("3","download.jpg");



DROP TABLE tbl_incoming_product;

CREATE TABLE `tbl_incoming_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productID` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `quantity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;




DROP TABLE tbl_incoming_product_branch;

CREATE TABLE `tbl_incoming_product_branch` (
  `id` int(50) NOT NULL,
  `productID` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `store` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_incoming_product_branch VALUES("38506149","073682015945","May 22, 2021","Samsung","Refrigerator","RT46K600JS8","150000","5","Quezon City");
INSERT INTO tbl_incoming_product_branch VALUES("71964230","057410938621","May 22, 2021","Samsung","Refrigerator","RS68A8820S9","125000","5","Antipolo City");



DROP TABLE tbl_outgoing_product;

CREATE TABLE `tbl_outgoing_product` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `store` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE tbl_product;

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` varchar(50) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_product VALUES("5","057410938621","Samsung","Refrigerator","RS68A8820S9","Gray","45","30000.00");
INSERT INTO tbl_product VALUES("6","073682015945","Samsung","Refrigerator","RT46K600JS8","Black","45","30000.00");
INSERT INTO tbl_product VALUES("7","012580937461","Hanabishi","Juice Blender","HJB327","White","30","5000.00");
INSERT INTO tbl_product VALUES("8","001746298355","Panasonic","Vacuum Cleaner","MC-CJ917","Pink","50","7000.00");
INSERT INTO tbl_product VALUES("9","060278931543","Panasonic","Dry Iron","NI-317T","Yellow","100","500.00");
INSERT INTO tbl_product VALUES("10","024095367183","Hanabishi","Electric Pressure Cooker","HDIGPC","White","50","800.00");



DROP TABLE tbl_product_store;

CREATE TABLE `tbl_product_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` varchar(50) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `store` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;




DROP TABLE tbl_sales_and_purchase;

CREATE TABLE `tbl_sales_and_purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeOfTransaction` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `store` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_sales_and_purchase VALUES("18","Purchase","May 22, 2021","Hanabishi","Electric Pressure Cooker","50","5000.00","N/A");
INSERT INTO tbl_sales_and_purchase VALUES("19","Purchase","May 22, 2021","Panasonic","Dry Iron","50","8000.00","N/A");



DROP TABLE tbl_user;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `birthdate` date NOT NULL,
  `contactnumber` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `loa` varchar(20) NOT NULL,
  `store` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_user VALUES("1","admin","admin","Ordep","Badeo","Labrador","Antipolo City","1996-03-05","09565290841","jhaycee122098@gmail.com","Administrator","N/A");
INSERT INTO tbl_user VALUES("7","16001669900","Wg05%$","Jan Christan","Evangelista","Espiritu","28 Sta. Maria Compd. Santolan Pasig City","1998-12-20","09565290842","qwerty_334@yahoo.com","Employee","");
INSERT INTO tbl_user VALUES("8","16001669901","ch03$*","Kim Adrian","Jasme","Lauderiz","30 Sta. Maria Compd. Santolan, Pasig City","2000-01-06","09565290843","kim@gmail.com","Branch","Antipolo City");
INSERT INTO tbl_user VALUES("10","16001669902","ct27&(","John Mark","Robles","Lauderiz","30 Sta. Maria Compd. Santolan, Pasig City","1994-02-07","09265944316","janjanrob@gmail.com","Employee","");
INSERT INTO tbl_user VALUES("11","16001669903","aj56%)","Dayle","Sacopanio","Reyes","33 Sta. Maria Compd. Santolan, Pasig City","1990-04-06","09265944315","daylesacopanio@gmail.com","Branch","Quezon City");



