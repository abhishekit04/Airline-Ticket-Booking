

CREATE TABLE `address_book` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `comapny_name` varchar(256) DEFAULT NULL,
  `address` text,
  `login_acc` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO address_book VALUES("1","sachin","7204745662","sachin@gmail.com","AIIt software solutions","plot no 217/10 adarsh nagar 6th cross  vadgaon belagum","1");
INSERT INTO address_book VALUES("2","praveen","7894526982","praveen@gmail.com","abc","bgm1","1");





CREATE TABLE `attendence` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `staff_id` int(255) DEFAULT NULL,
  `attendance` varchar(20) DEFAULT NULL,
  `remark` varchar(256) DEFAULT NULL,
  `login_acc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO attendence VALUES("1","2019-07-24","1","Half","aaa","1");
INSERT INTO attendence VALUES("2","2019-07-24","2","Present","","1");
INSERT INTO attendence VALUES("3","2019-07-24","3","Present","","1");
INSERT INTO attendence VALUES("4","2019-07-25","1","Present","","1");
INSERT INTO attendence VALUES("5","2019-07-25","2","Absent","marrage","1");
INSERT INTO attendence VALUES("6","2019-08-07","1","Present","","1");
INSERT INTO attendence VALUES("7","2019-08-16","1","Present","","1");
INSERT INTO attendence VALUES("8","2019-09-04","1","Half","","1");
INSERT INTO attendence VALUES("9","2019-09-16","1","Present","","1");
INSERT INTO attendence VALUES("10","2019-09-25","1","Present","","1");
INSERT INTO attendence VALUES("11","2019-09-25","2","Present","","1");
INSERT INTO attendence VALUES("12","2019-09-27","1","Present","","1");
INSERT INTO attendence VALUES("13","2019-11-04","1","Present","","1");





CREATE TABLE `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `branch` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `acc_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ifsc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO bank VALUES("1","","","","","1");
INSERT INTO bank VALUES("2","sbi","vadagaon","12345678","ifs123","1");





CREATE TABLE `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `invoice` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `b_invoice` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `product_name` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `hsn` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `unit` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rate` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `disc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gst_mode` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gst` int(10) DEFAULT NULL,
  `sgst` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cgst` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `igst` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `taxable_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tax_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `payment_mode` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `voucher_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `customer_id` int(255) DEFAULT NULL,
  `destination` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `e_way` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

INSERT INTO billing VALUES("4","1","2019-07-15","4","","15mm","1","10","KG","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","2","","");
INSERT INTO billing VALUES("5","1","2019-08-13","5","","15mm","12","10","KG","110","0 %","CGST/SGST ","18","99","99","0","1100.00","198.00","1298","Cash","","1","bgm","");
INSERT INTO billing VALUES("6","1","2019-08-13","6","","paint","12","10","Ltr","120","0 %","CGST/SGST ","18","108","108","0","1200.00","216.00","1416","Cheque","1234","4","","");
INSERT INTO billing VALUES("7","1","2019-08-13","7","","cement","121","10","KG","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","1","","");
INSERT INTO billing VALUES("8","1","2019-08-14","8","","15mm","123","10","KG","120","0 %","CGST/SGST ","18","108","108","0","1200.00","216.00","1416","Cash","","1","","");
INSERT INTO billing VALUES("18","1","2019-08-16","9","","paint","1","6","Ltr","100","0 %","CGST/SGST ","18","54","54","0","600.00","108.00","708","Cash","","2","","");
INSERT INTO billing VALUES("28","1","2019-07-14","1","","15mm","12","3","KG","120","0 %","CGST/SGST ","18","32.4","32.4","0","360.00","64.80","424.8","Cash","","1","","");
INSERT INTO billing VALUES("30","1","2019-08-18","10","","mobile","123456","1","Pcs","3000","0 %","CGST/SGST ","18","270","270","0","3000.00","540.00","3540","Cash","","4","","");
INSERT INTO billing VALUES("31","1","2019-08-19","11","","mobile","123456","1","Pcs","3000","0 %","CGST/SGST ","18","270","270","0","3000.00","540.00","3540","Cash","","1","bgm","");
INSERT INTO billing VALUES("35","1","2019-08-23","12","","cement","1345678","10","KG","150","0 %","CGST/SGST ","12","90","90","0","1500.00","180.00","1680","Cash","","1","","");
INSERT INTO billing VALUES("37","1","2019-08-23","13","","mobile","123456","1","Pcs","3000","0 %","CGST/SGST ","18","270","270","0","3000.00","540.00","3540","Cash","","1","","");
INSERT INTO billing VALUES("38","1","2019-08-25","14","","cement","1345678","1","KG","150","0 %","CGST/SGST ","12","9","9","0","150.00","18.00","168","Cash","","2","","");
INSERT INTO billing VALUES("39","1","2019-08-25","15","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","11.7","11.7","0","130.00","23.40","153.4","Cheque","12345","1","","");
INSERT INTO billing VALUES("40","1","2019-08-28","16","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.9","0.9","0","10.00","1.80","11.8","Cash","","1","","");
INSERT INTO billing VALUES("41","1","2019-09-01","17","","cement","1345678","10","KG","160","0 %","CGST/SGST ","12","96","96","0","1600.00","192.00","1792","Cash","","2","","");
INSERT INTO billing VALUES("42","1","2019-09-04","18","","mobile","123456","10","Pcs","3000","0 %","CGST/SGST ","18","2700","2700","0","30000.00","5400.00","35400","Cash","","4","","");
INSERT INTO billing VALUES("43","1","2019-09-16","19","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","1","","");
INSERT INTO billing VALUES("44","1","2019-09-16","20","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","2","","");
INSERT INTO billing VALUES("45","1","2019-09-30","21","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","4.5","4.5","0","50.00","9.00","59","Cash","","1","","");
INSERT INTO billing VALUES("46","1","2019-09-30","22","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","5","","");
INSERT INTO billing VALUES("47","1","2019-10-02","23","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.9","0.9","0","10.00","1.80","11.8","Cash","","1","","");
INSERT INTO billing VALUES("50","1","2019-10-05","24","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Online","","1","","");
INSERT INTO billing VALUES("64","1","2019-10-21","25","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Cash","","1","","");
INSERT INTO billing VALUES("65","1","2019-10-21","26","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Cash","","1","","");
INSERT INTO billing VALUES("67","1","2019-11-04","27","","cement","1345678","2","KG","160","0 %","CGST/SGST ","12","17.145","17.145","0","285.71","34.29","320","Cash","","1","","");
INSERT INTO billing VALUES("68","1","2019-11-04","27","","cement","1345678","1","KG","160","50  ","CGST/SGST ","12","5.895","5.895","0","98.21","11.79","110","Cash","","1","","");
INSERT INTO billing VALUES("70","1","2019-11-09","28","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Cash","","1","","");
INSERT INTO billing VALUES("71","1","2019-11-11","29","","abc","1232","1","KG","100","0 %","CGST/SGST ","0","0","0","0","100.00","0.00","100","Cash","","1","","");
INSERT INTO billing VALUES("73","1","2019-11-18","30","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","9.915","9.915","0","110.17","19.83","130","Cash","","1","","");
INSERT INTO billing VALUES("74","1","2019-07-14","3","","15mm","12","9","KG","200","0 %","CGST/SGST ","18","137.29","137.29","0","1525.42","274.58","1800","Cash","","1","","");
INSERT INTO billing VALUES("75","1","2019-11-21","31","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","1","","");
INSERT INTO billing VALUES("76","1","2019-11-23","32","","15mm","12345","12","KG","10","0 %","CGST/SGST ","18","9.155","9.155","0","101.69","18.31","120","Cash","","1","","");
INSERT INTO billing VALUES("77","1","2019-11-23","32","","cement","1345678","10","KG","160","0 %","CGST/SGST ","12","85.715","85.715","0","1428.57","171.43","1600","Cash","","1","","");
INSERT INTO billing VALUES("78","1","2019-11-29","33","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO billing VALUES("79","1","2019-11-29","34","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO billing VALUES("80","1","2019-11-29","35","","15mm","12345","2","KG","100","0 %","CGST/SGST ","18","15.255","15.255","0","169.49","30.51","200","Cash","","1","","");
INSERT INTO billing VALUES("82","1","2019-12-02","36","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","1","","");
INSERT INTO billing VALUES("83","1","2019-12-03","37","","15mm","12345","10","KG","120","0 %","CGST/SGST ","18","91.525","91.525","0","1016.95","183.05","1200","Cash","","1","","");
INSERT INTO billing VALUES("84","1","2019-12-03","38","","pen 2","123","30","Pcs","120","0 %","CGST/SGST ","18","274.575","274.575","0","3050.85","549.15","3600","Cash","","1","","");
INSERT INTO billing VALUES("85","1","2019-12-03","39","","pen 2","123","50","Pcs","20","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","1","","");
INSERT INTO billing VALUES("86","1","2019-12-27","40","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO billing VALUES("87","1","2019-12-27","41","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","9.915","9.915","0","110.17","19.83","130","Cash","","1","","");
INSERT INTO billing VALUES("88","1","2019-12-27","42","","cement","1345678","1","KG","160","0 %","CGST/SGST ","12","8.57","8.57","0","142.86","17.14","160","Cash","","1","","");
INSERT INTO billing VALUES("89","1","2019-12-27","43","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO billing VALUES("90","1","2019-12-27","44","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","9.915","9.915","0","110.17","19.83","130","Cash","","1","","");
INSERT INTO billing VALUES("91","1","2019-12-27","45","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("92","1","2019-12-29","46","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("93","1","2019-12-29","47","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO billing VALUES("94","1","2019-12-29","48","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("95","1","2019-12-29","49","","15mm","12345","12","KG","100","0 %","CGST/SGST ","18","91.525","91.525","0","1016.95","183.05","1200","Cash","","1","","");
INSERT INTO billing VALUES("96","1","2019-12-29","49","","cement","1345678","1","KG","160","0 %","CGST/SGST ","12","8.57","8.57","0","142.86","17.14","160","Cash","","1","","");
INSERT INTO billing VALUES("97","1","2019-12-29","50","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("98","1","2019-12-29","51","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("99","1","2019-12-29","52","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO billing VALUES("100","1","2019-12-29","53","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("101","1","2019-12-29","54","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","9.915","9.915","0","110.17","19.83","130","Cash","","2","","");
INSERT INTO billing VALUES("102","1","2019-12-31","55","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("103","1","2019-12-31","55","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","9.915","9.915","0","110.17","19.83","130","Cash","","1","","");
INSERT INTO billing VALUES("104","1","2019-12-31","56","","paint","123","12","Ltr","130","0 %","CGST/SGST ","18","118.985","118.985","0","1322.03","237.97","1560","Cash","","2","","");
INSERT INTO billing VALUES("105","1","2019-12-31","57","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("106","1","2019-12-31","58","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","9.915","9.915","0","110.17","19.83","130","Cash","","2","","");
INSERT INTO billing VALUES("107","1","2019-12-31","59","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("108","1","2019-12-31","60","","15mm","12345","1","KG","12","0 %","CGST/SGST ","18","0.915","0.915","0","10.17","1.83","12","Cash","","1","","");
INSERT INTO billing VALUES("109","1","2019-12-31","61","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("110","1","2019-12-31","62","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("111","1","2019-12-31","62","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","9.915","9.915","0","110.17","19.83","130","Cash","","1","","");
INSERT INTO billing VALUES("112","1","2019-12-31","63","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("113","1","2019-12-31","64","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("114","1","2019-12-31","64","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","9.915","9.915","0","110.17","19.83","130","Cash","","1","","");
INSERT INTO billing VALUES("115","1","2019-12-31","64","","cement","1345678","10","KG","160","0 %","CGST/SGST ","12","85.715","85.715","0","1428.57","171.43","1600","Cash","","1","","");
INSERT INTO billing VALUES("116","1","2019-12-31","64","","Pen","123","1","Pcs","100","0 %","CGST/SGST ","0","0","0","0","100.00","0.00","100","Cash","","1","","");
INSERT INTO billing VALUES("117","1","2019-12-31","65","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","9.915","9.915","0","110.17","19.83","130","Cash","","1","","");
INSERT INTO billing VALUES("118","1","2019-12-31","65","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO billing VALUES("119","1","2019-12-31","65","","cement","1345678","1","KG","160","0 %","CGST/SGST ","12","8.57","8.57","0","142.86","17.14","160","Cash","","1","","");
INSERT INTO billing VALUES("120","1","2019-12-31","65","","mobile","123456","1","Pcs","3000","0 %","CGST/SGST ","18","228.815","228.815","0","2542.37","457.63","3000","Cash","","1","","");
INSERT INTO billing VALUES("121","1","2019-12-31","65","","books","12345","1","Pcs","20","0 %","CGST/SGST ","5","0.475","0.475","0","19.05","0.95","20","Cash","","1","","");
INSERT INTO billing VALUES("122","1","2019-12-31","65","","computer","135","1","Pcs","15000","0 %","CGST/SGST ","18","1144.07","1144.07","0","12711.86","2288.14","15000","Cash","","1","","");
INSERT INTO billing VALUES("123","1","2019-12-31","65","","5x5 Tiles","123","1","Sq.Foot","150","0 %","CGST/SGST ","18","11.44","11.44","0","127.12","22.88","150","Cash","","1","","");
INSERT INTO billing VALUES("124","1","2019-12-31","65","","HP Bag","12345","1","Bags","100","0 %","CGST/SGST ","12","5.355","5.355","0","89.29","10.71","100","Cash","","1","","");
INSERT INTO billing VALUES("125","1","2019-12-31","65","","birla shakit","25232930","1","Bags","100","0 %","CGST/SGST ","28","10.94","10.94","0","78.13","21.88","100.01","Cash","","1","","");
INSERT INTO billing VALUES("126","1","2019-12-31","65","","Smart TV","123","1","Pcs","10000","0 %","CGST/SGST ","18","762.71","762.71","0","8474.58","1525.42","10000","Cash","","1","","");
INSERT INTO billing VALUES("127","1","2019-12-31","65","","pen 2","123","1","Pcs","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO billing VALUES("128","1","2019-12-31","66","","15mm","12345","12","KG","100","0 %","CGST/SGST ","18","91.525","91.525","0","1016.95","183.05","1200","Cash","","1","","");
INSERT INTO billing VALUES("129","1","2020-01-04","67","","abc 2x5","123","30","Sq.Foot","87","0 %","CGST/SGST ","18","234.9","234.9","0","2610.00","469.80","3079.8","Cash","","1","","");
INSERT INTO billing VALUES("130","1","2020-01-04","68","","kdp 2x6","12","26","Sq.Foot","20","0 %","CGST/SGST ","0","0","0","0","520.00","0.00","520","Cash","","2","","");
INSERT INTO billing VALUES("131","1","2020-01-04","69","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Cash","","1","","");
INSERT INTO billing VALUES("132","1","2020-01-05","70","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Cash","","1","","123455678");
INSERT INTO billing VALUES("133","1","2020-01-06","71","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","11.7","11.7","0","130.00","23.40","153.4","Cash","","1","","");
INSERT INTO billing VALUES("135","1","2020-01-07","72","","paint","123","1","Ltr","130","0 %","CGST/SGST ","18","11.7","11.7","0","130.00","23.40","153.4","Cash","","1","","");
INSERT INTO billing VALUES("136","1","2020-01-08","73","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Cash","","1","","");
INSERT INTO billing VALUES("137","1","2020-01-08","74","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Cash","","1","","");
INSERT INTO billing VALUES("138","1","2020-01-08","75","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Cash","","1","","");
INSERT INTO billing VALUES("139","1","2020-01-08","75","","Insurance Charge","","","","","","CGST/SGST ","0","0","0","0","100.00","0.00","100","Cash","","1","","");





CREATE TABLE `billing_cr_dr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `original_date` date DEFAULT NULL,
  `original_invoice` varchar(256) DEFAULT NULL,
  `cr_no` varchar(256) DEFAULT NULL,
  `dr_no` varchar(256) DEFAULT NULL,
  `product_name` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `hsn` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `qty` int(255) DEFAULT NULL,
  `unit` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rate` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gst_mode` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gst` int(10) DEFAULT NULL,
  `sgst` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cgst` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `igst` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `taxable_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tax_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `payment_mode` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `voucher_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `vendor_id` varchar(256) DEFAULT NULL,
  `destination` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO billing_cr_dr VALUES("1","1","2019-11-26","2019-11-02","1","","1","15mm","12345","1","KG","100","CGST/SGST ","18","7.625","7.625","0","100.00","15.25","115","Cash","","","1","");
INSERT INTO billing_cr_dr VALUES("2","1","2019-11-26","2019-11-01","1","1","","15mm","12345","1","KG","100","CGST/SGST ","18","7.625","7.625","0","100.00","15.25","115","Cash","","","1","");
INSERT INTO billing_cr_dr VALUES("3","1","2019-11-26","2019-11-01","1","","2","15mm","12345","1","KG","100","CGST/SGST ","18","7.625","7.625","0","100.00","15.25","115","Cash","","1","","");
INSERT INTO billing_cr_dr VALUES("4","1","2019-11-26","2019-11-01","1","2","","15mm","12345","1","KG","100","CGST/SGST ","18","7.625","7.625","0","100.00","15.25","115","Cash","","1","","");
INSERT INTO billing_cr_dr VALUES("5","1","2019-11-26","2019-11-07","1","","3","15mm","12345","10","KG","100","CGST/SGST ","18","76.27","76.27","0","1000.00","152.54","1164","Cash","","1","","");
INSERT INTO billing_cr_dr VALUES("6","1","2019-11-26","2019-11-07","1","","3","cement","1345678","1","KG","10","CGST/SGST ","12","0.535","0.535","0","10.00","1.07","1164","Cash","","1","","");
INSERT INTO billing_cr_dr VALUES("7","1","2019-11-29","2019-11-23","A123","","4","15mm","12345","1","KG","100","CGST/SGST ","18","7.625","7.625","0","100.00","15.25","115","Cash","","","1","");
INSERT INTO billing_cr_dr VALUES("8","1","2019-12-03","2019-12-03","1232","","5","15mm","12345","12","KG","1","CGST/SGST ","18","0.915","0.915","0","12.00","1.83","14","Cash","","","1","");
INSERT INTO billing_cr_dr VALUES("9","1","2019-12-03","2019-11-27","1","","6","15mm","12345","1","KG","10","CGST/SGST ","18","0.765","0.765","0","10.00","1.53","12","Cash","","","1","");
INSERT INTO billing_cr_dr VALUES("10","1","2019-12-03","2019-12-04","1","3","","15mm","12345","1","KG","100","CGST/SGST ","18","7.625","7.625","0","100.00","15.25","115","Cash","","","1","");
INSERT INTO billing_cr_dr VALUES("11","1","2019-12-03","2019-12-04","1","","7","15mm","12345","1","KG","100","CGST/SGST ","18","7.625","7.625","0","100.00","15.25","115","Cash","","","1","");
INSERT INTO billing_cr_dr VALUES("12","1","2019-12-03","2019-11-30","12","","8","paint","123","1","Ltr","12","CGST/SGST ","18","0.915","0.915","0","12.00","1.83","14","Cash","","","1","");
INSERT INTO billing_cr_dr VALUES("13","1","2019-12-03","2019-11-29","1","4","","15mm","12345","1","KG","100","CGST/SGST ","18","7.625","7.625","0","100.00","15.25","115","Cash","","1","","");





CREATE TABLE `customer` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `name` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gstin` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `mobile` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `status_delete` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("1","1","customer 1 ","gst12345","7204745662","bgm","0");
INSERT INTO customer VALUES("2","1","customer 2","gst65432","7204745662","RPD cross hindiwadi belgaum","0");
INSERT INTO customer VALUES("3","1","customer 2","","","","1");
INSERT INTO customer VALUES("4","1","customer 3","gst12345","7204745662","Plot no 217/10 adarsh nagar vadagaon belgaum","0");
INSERT INTO customer VALUES("5","1","abc1","","","","1");
INSERT INTO customer VALUES("6","1","customer 4","GST123456","7019953947","Plot no 217/10 adarsh nagar vadagaon belgaum","1");





CREATE TABLE `customer_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `customer_id` int(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `original_date` varchar(256) DEFAULT NULL,
  `original_invoice` varchar(256) DEFAULT NULL,
  `bill_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `particular` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vch_type` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vch_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `credit_amount` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `debit_amount` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `balance` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `receipt_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=latin1;

INSERT INTO customer_payment VALUES("1","1","1","2019-07-14","","","1","gst-bill","","","425","","425","");
INSERT INTO customer_payment VALUES("2","1","1","2019-07-14","","","1","","Cash","","","0","425","");
INSERT INTO customer_payment VALUES("3","1","1","2019-07-14","","","2","gst-bill","","","354","","779","");
INSERT INTO customer_payment VALUES("4","1","1","2019-07-14","","","2","","Cash","","","0","779","");
INSERT INTO customer_payment VALUES("5","1","1","2019-07-14","","","3","gst-bill","","","1800","","2579","");
INSERT INTO customer_payment VALUES("6","1","1","2019-07-14","","","3","","Cash","","","1000","1579","");
INSERT INTO customer_payment VALUES("7","1","1","2019-07-14","","","","","Cash","","","100","1479","1");
INSERT INTO customer_payment VALUES("8","1","2","2019-07-15","","","4","gst-bill","","","1180","","1180","");
INSERT INTO customer_payment VALUES("9","1","2","2019-07-15","","","4","","Cash","","","2000","-820","");
INSERT INTO customer_payment VALUES("10","1","1","2019-07-15","","","","","Cash","","","6","1473","2");
INSERT INTO customer_payment VALUES("15","1","1","2019-07-15","","","","","Cash","","","6","1467","3");
INSERT INTO customer_payment VALUES("16","1","1","2019-07-15","","","","","Cash","","6","","1473","4");
INSERT INTO customer_payment VALUES("17","1","2","2019-07-15","","","","","Cash","","","10","-830","5");
INSERT INTO customer_payment VALUES("18","1","2","2019-07-15","","","","","Cash","","10","","-820","6");
INSERT INTO customer_payment VALUES("19","1","1","2019-07-16","","","","","Cash","","30","","1503","");
INSERT INTO customer_payment VALUES("20","1","1","2019-07-16","","","","","Cash","","","30","1473","7");
INSERT INTO customer_payment VALUES("21","1","1","2019-08-13","","","5","gst-bill","","","1298","","2771","");
INSERT INTO customer_payment VALUES("22","1","1","2019-08-13","","","5","","Cash","","","1416","1355","");
INSERT INTO customer_payment VALUES("23","1","1","2019-08-13","","","","","Cash","","","100","1255","8");
INSERT INTO customer_payment VALUES("24","1","4","2019-08-13","","","6","gst-bill","","","1416","","1416","");
INSERT INTO customer_payment VALUES("25","1","4","2019-08-13","","","6","sbi","Cheque","1234","","1400","16","");
INSERT INTO customer_payment VALUES("26","1","1","2019-08-13","","","7","gst-bill","","","1180","","2435","");
INSERT INTO customer_payment VALUES("27","1","1","2019-08-13","","","7","","Cash","","","1180","1255","");
INSERT INTO customer_payment VALUES("28","1","1","2019-08-14","","","8","gst-bill","","","1416","","2671","");
INSERT INTO customer_payment VALUES("29","1","1","2019-08-14","","","8","","Cash","","","0","2671","");
INSERT INTO customer_payment VALUES("30","1","4","2019-08-14","","","","","Cash","","","100","-84","9");
INSERT INTO customer_payment VALUES("31","1","2","2019-08-16","","","9","gst-bill","","","708","","-112","");
INSERT INTO customer_payment VALUES("32","1","2","2019-08-16","","","9","","Cash","","","0","-112","");
INSERT INTO customer_payment VALUES("33","1","4","2019-08-18","","","10","gst-bill","","","3540","","3456","");
INSERT INTO customer_payment VALUES("34","1","4","2019-08-18","","","10","","Cash","","","3540","-84","");
INSERT INTO customer_payment VALUES("35","1","1","2019-08-19","","","11","gst-bill","","","3540","","6211","");
INSERT INTO customer_payment VALUES("36","1","1","2019-08-19","","","11","","Cash","","","3540","2671","");
INSERT INTO customer_payment VALUES("37","1","1","2019-08-19","","","","","Cash","","","100","2571","10");
INSERT INTO customer_payment VALUES("38","1","1","2019-08-23","","","","","Cash","","","100","2471","11");
INSERT INTO customer_payment VALUES("39","1","1","2019-08-23","","","","","Cash","","","87","2384","12");
INSERT INTO customer_payment VALUES("40","1","2","2019-08-25","","","14","gst-bill","","","168","","56","");
INSERT INTO customer_payment VALUES("41","1","2","2019-08-25","","","14","","Cash","","","0","56","");
INSERT INTO customer_payment VALUES("42","1","1","2019-08-25","","","15","gst-bill","","","153","","2537","");
INSERT INTO customer_payment VALUES("43","1","1","2019-08-25","","","15","sbi","Cheque","12345","","153","2384","");
INSERT INTO customer_payment VALUES("44","1","1","2019-08-28","","","16","gst-bill","","","12","","2396","");
INSERT INTO customer_payment VALUES("45","1","1","2019-08-28","","","16","","Cash","","","0","2396","");
INSERT INTO customer_payment VALUES("46","1","1","2019-08-30","","","","","Cash","","","12","2384","13");
INSERT INTO customer_payment VALUES("47","1","2","2019-09-01","","","17","gst-bill","","","1792","","1848","");
INSERT INTO customer_payment VALUES("48","1","2","2019-09-01","","","17","","Cash","","","0","1848","");
INSERT INTO customer_payment VALUES("49","1","4","2019-09-04","","","18","gst-bill","","","35400","","35316","");
INSERT INTO customer_payment VALUES("50","1","4","2019-09-04","","","18","","Cash","","","0","35316","");
INSERT INTO customer_payment VALUES("51","1","1","2019-09-04","","","","","Cash","","","100","2284","14");
INSERT INTO customer_payment VALUES("52","1","1","2019-09-10","","","","","Cash","","","100","2184","15");
INSERT INTO customer_payment VALUES("53","1","1","2019-09-16","","","19","gst-bill","","","1180","","3364","");
INSERT INTO customer_payment VALUES("54","1","1","2019-09-16","","","19","","Cash","","","0","3364","");
INSERT INTO customer_payment VALUES("55","1","2","2019-09-16","","","20","gst-bill","","","1180","","3028","");
INSERT INTO customer_payment VALUES("56","1","2","2019-09-16","","","20","","Cash","","","0","3028","");
INSERT INTO customer_payment VALUES("57","1","1","2019-09-30","","","21","gst-bill","","","59","","3423","");
INSERT INTO customer_payment VALUES("58","1","1","2019-09-30","","","21","","Cash","","","0","3423","");
INSERT INTO customer_payment VALUES("59","1","5","2019-09-30","","","22","gst-bill","","","1000","","1000","");
INSERT INTO customer_payment VALUES("60","1","5","2019-09-30","","","22","","Cash","","","0","1000","");
INSERT INTO customer_payment VALUES("61","1","5","2019-09-30","","","","","Cash","","","1000","0","16");
INSERT INTO customer_payment VALUES("62","1","1","2019-10-02","","","23","gst-bill","","","12","","3435","");
INSERT INTO customer_payment VALUES("63","1","1","2019-10-02","","","23","","Cash","","","0","3435","");
INSERT INTO customer_payment VALUES("64","1","1","2019-10-05","","","24","gst-bill","","","118","","3553","");
INSERT INTO customer_payment VALUES("65","1","1","2019-10-05","","","24","Google Pay","Online","","","118","3435","");
INSERT INTO customer_payment VALUES("66","1","1","2019-10-05","","","","","Online","","","100","3335","17");
INSERT INTO customer_payment VALUES("67","1","1","2019-10-05","","","","Google Pay","Online","","","100","3235","18");
INSERT INTO customer_payment VALUES("68","1","1","2019-10-21","","","25","gst-bill","","","118","","3353","");
INSERT INTO customer_payment VALUES("69","1","1","2019-10-21","","","25","","Cash","","","0","3353","");
INSERT INTO customer_payment VALUES("70","1","1","2019-10-21","","","26","gst-bill","","","118","","3471","");
INSERT INTO customer_payment VALUES("71","1","1","2019-10-21","","","26","","Cash","","","0","3471","");
INSERT INTO customer_payment VALUES("72","1","1","2019-10-30","","","","","Discount","","","100","3371","");
INSERT INTO customer_payment VALUES("73","1","1","2019-11-04","","","","","Discount","","","100","3271","");
INSERT INTO customer_payment VALUES("74","1","1","2019-11-04","","","27","gst-bill","","","430","","3701","");
INSERT INTO customer_payment VALUES("75","1","1","2019-11-04","","","27","","Cash","","","0","3701","");
INSERT INTO customer_payment VALUES("76","1","1","2019-11-04","","","","","Cash","","","100","3601","19");
INSERT INTO customer_payment VALUES("77","1","1","2019-11-09","","","28","gst-bill","","","118","","3719","");
INSERT INTO customer_payment VALUES("78","1","1","2019-11-09","","","28","","Cash","","","0","3719","");
INSERT INTO customer_payment VALUES("79","1","1","2019-11-11","","","29","gst-bill","","","100","","3819","");
INSERT INTO customer_payment VALUES("80","1","1","2019-11-11","","","29","","Cash","","","0","3819","");
INSERT INTO customer_payment VALUES("81","1","1","2019-11-18","","","30","gst-bill","","","130","","3949","");
INSERT INTO customer_payment VALUES("82","1","1","2019-11-18","","","30","","Cash","","","0","3949","");
INSERT INTO customer_payment VALUES("83","1","1","2019-11-18","","","","","Cash","","","100","3849","20");
INSERT INTO customer_payment VALUES("84","1","1","2019-11-21","","","31","gst-bill","","","1000","","4849","");
INSERT INTO customer_payment VALUES("85","1","1","2019-11-21","","","31","","Cash","","","0","4849","");
INSERT INTO customer_payment VALUES("86","1","1","2019-11-23","","","32","gst-bill","","","1720","","6569","");
INSERT INTO customer_payment VALUES("87","1","1","2019-11-23","","","32","","Cash","","","0","6569","");
INSERT INTO customer_payment VALUES("88","1","1","2019-11-29","","","33","gst-bill","","","10","","6579","");
INSERT INTO customer_payment VALUES("89","1","1","2019-11-29","","","33","","Cash","","","0","6579","");
INSERT INTO customer_payment VALUES("90","1","1","2019-11-29","","","34","gst-bill","","","10","","6589","");
INSERT INTO customer_payment VALUES("91","1","1","2019-11-29","","","34","","Cash","","","0","6589","");
INSERT INTO customer_payment VALUES("92","1","1","2019-11-29","","","35","gst-bill","","","200","","6789","");
INSERT INTO customer_payment VALUES("93","1","1","2019-11-29","","","35","","Cash","","","0","6789","");
INSERT INTO customer_payment VALUES("94","1","1","2019-12-02","","","36","gst-bill","","","1000","","7789","");
INSERT INTO customer_payment VALUES("95","1","1","2019-12-02","","","36","","Cash","","","0","7789","");
INSERT INTO customer_payment VALUES("96","1","1","2019-12-03","","","37","gst-bill","","","1200","","8989","");
INSERT INTO customer_payment VALUES("97","1","1","2019-12-03","","","37","","Cash","","","0","8989","");
INSERT INTO customer_payment VALUES("98","1","1","2019-12-03","","","38","gst-bill","","","3600","","12589","");
INSERT INTO customer_payment VALUES("99","1","1","2019-12-03","","","38","","Cash","","","0","12589","");
INSERT INTO customer_payment VALUES("100","1","1","2019-12-03","","","39","gst-bill","","","1000","","13589","");
INSERT INTO customer_payment VALUES("101","1","1","2019-12-03","","","39","","Cash","","","0","13589","");
INSERT INTO customer_payment VALUES("102","1","1","2019-12-03","2019-11-29","1","4","Cr-bill","","","115","","13704","");
INSERT INTO customer_payment VALUES("103","1","1","2019-12-03","2019-11-29","1","4","","Cash","","","0","13704","");
INSERT INTO customer_payment VALUES("104","1","1","2019-12-27","","","40","gst-bill","","","10","","13714","");
INSERT INTO customer_payment VALUES("105","1","1","2019-12-27","","","40","","Cash","","","0","13714","");
INSERT INTO customer_payment VALUES("106","1","1","2019-12-27","","","41","gst-bill","","","130","","13844","");
INSERT INTO customer_payment VALUES("107","1","1","2019-12-27","","","41","","Cash","","","0","13844","");
INSERT INTO customer_payment VALUES("108","1","1","2019-12-27","","","42","gst-bill","","","160","","14004","");
INSERT INTO customer_payment VALUES("109","1","1","2019-12-27","","","42","","Cash","","","0","14004","");
INSERT INTO customer_payment VALUES("110","1","1","2019-12-27","","","43","gst-bill","","","10","","14014","");
INSERT INTO customer_payment VALUES("111","1","1","2019-12-27","","","43","","Cash","","","0","14014","");
INSERT INTO customer_payment VALUES("112","1","1","2019-12-27","","","44","gst-bill","","","130","","14144","");
INSERT INTO customer_payment VALUES("113","1","1","2019-12-27","","","44","","Cash","","","0","14144","");
INSERT INTO customer_payment VALUES("114","1","1","2019-12-27","","","45","gst-bill","","","100","","14244","");
INSERT INTO customer_payment VALUES("115","1","1","2019-12-27","","","45","","Cash","","","0","14244","");
INSERT INTO customer_payment VALUES("116","1","1","2019-12-29","","","46","gst-bill","","","100","","14344","");
INSERT INTO customer_payment VALUES("117","1","1","2019-12-29","","","46","","Cash","","","0","14344","");
INSERT INTO customer_payment VALUES("118","1","1","2019-12-29","","","47","gst-bill","","","10","","14354","");
INSERT INTO customer_payment VALUES("119","1","1","2019-12-29","","","47","","Cash","","","0","14354","");
INSERT INTO customer_payment VALUES("120","1","1","2019-12-29","","","48","gst-bill","","","100","","14454","");
INSERT INTO customer_payment VALUES("121","1","1","2019-12-29","","","48","","Cash","","","0","14454","");
INSERT INTO customer_payment VALUES("122","1","1","2019-12-29","","","49","gst-bill","","","1360","","15814","");
INSERT INTO customer_payment VALUES("123","1","1","2019-12-29","","","49","","Cash","","","0","15814","");
INSERT INTO customer_payment VALUES("124","1","1","2019-12-29","","","50","gst-bill","","","100","","15914","");
INSERT INTO customer_payment VALUES("125","1","1","2019-12-29","","","50","","Cash","","","0","15914","");
INSERT INTO customer_payment VALUES("126","1","1","2019-12-29","","","51","gst-bill","","","100","","16014","");
INSERT INTO customer_payment VALUES("127","1","1","2019-12-29","","","51","","Cash","","","0","16014","");
INSERT INTO customer_payment VALUES("128","1","1","2019-12-29","","","52","gst-bill","","","10","","16024","");
INSERT INTO customer_payment VALUES("129","1","1","2019-12-29","","","52","","Cash","","","0","16024","");
INSERT INTO customer_payment VALUES("130","1","1","2019-12-29","","","53","gst-bill","","","100","","16124","");
INSERT INTO customer_payment VALUES("131","1","1","2019-12-29","","","53","","Cash","","","0","16124","");
INSERT INTO customer_payment VALUES("132","1","2","2019-12-29","","","54","gst-bill","","","130","","3158","");
INSERT INTO customer_payment VALUES("133","1","2","2019-12-29","","","54","","Cash","","","0","3158","");
INSERT INTO customer_payment VALUES("134","1","1","2019-12-31","","","55","gst-bill","","","230","","16354","");
INSERT INTO customer_payment VALUES("135","1","1","2019-12-31","","","55","","Cash","","","0","16354","");
INSERT INTO customer_payment VALUES("136","1","2","2019-12-31","","","56","gst-bill","","","1560","","4718","");
INSERT INTO customer_payment VALUES("137","1","2","2019-12-31","","","56","","Cash","","","0","4718","");
INSERT INTO customer_payment VALUES("138","1","1","2019-12-31","","","57","gst-bill","","","100","","16454","");
INSERT INTO customer_payment VALUES("139","1","1","2019-12-31","","","57","","Cash","","","0","16454","");
INSERT INTO customer_payment VALUES("140","1","2","2019-12-31","","","58","gst-bill","","","130","","4848","");
INSERT INTO customer_payment VALUES("141","1","2","2019-12-31","","","58","","Cash","","","0","4848","");
INSERT INTO customer_payment VALUES("142","1","1","2019-12-31","","","59","gst-bill","","","100","","16554","");
INSERT INTO customer_payment VALUES("143","1","1","2019-12-31","","","59","","Cash","","","0","16554","");
INSERT INTO customer_payment VALUES("144","1","1","2019-12-31","","","60","gst-bill","","","12","","16566","");
INSERT INTO customer_payment VALUES("145","1","1","2019-12-31","","","60","","Cash","","","0","16566","");
INSERT INTO customer_payment VALUES("146","1","1","2019-12-31","","","61","gst-bill","","","100","","16666","");
INSERT INTO customer_payment VALUES("147","1","1","2019-12-31","","","61","","Cash","","","0","16666","");
INSERT INTO customer_payment VALUES("148","1","1","2019-12-31","","","62","gst-bill","","","230","","16896","");
INSERT INTO customer_payment VALUES("149","1","1","2019-12-31","","","62","","Cash","","","0","16896","");
INSERT INTO customer_payment VALUES("150","1","1","2019-12-31","","","63","gst-bill","","","100","","16996","");
INSERT INTO customer_payment VALUES("151","1","1","2019-12-31","","","63","","Cash","","","0","16996","");
INSERT INTO customer_payment VALUES("152","1","1","2019-12-31","","","64","gst-bill","","","1930","","18926","");
INSERT INTO customer_payment VALUES("153","1","1","2019-12-31","","","64","","Cash","","","0","18926","");
INSERT INTO customer_payment VALUES("154","1","1","2019-12-31","","","65","gst-bill","","","28770","","47696","");
INSERT INTO customer_payment VALUES("155","1","1","2019-12-31","","","65","","Cash","","","0","47696","");
INSERT INTO customer_payment VALUES("156","1","1","2019-12-31","","","66","gst-bill","","","1200","","48896","");
INSERT INTO customer_payment VALUES("157","1","1","2019-12-31","","","66","","Cash","","","0","48896","");
INSERT INTO customer_payment VALUES("158","1","1","2020-01-04","","","67","gst-bill","","","3080","","51976","");
INSERT INTO customer_payment VALUES("159","1","1","2020-01-04","","","67","","Cash","","","0","51976","");
INSERT INTO customer_payment VALUES("160","1","2","2020-01-04","","","68","gst-bill","","","520","","5368","");
INSERT INTO customer_payment VALUES("161","1","2","2020-01-04","","","68","","Cash","","","500","4868","");
INSERT INTO customer_payment VALUES("162","1","1","2020-01-04","","","69","gst-bill","","","118","","52094","");
INSERT INTO customer_payment VALUES("163","1","1","2020-01-04","","","69","","Cash","","","0","52094","");
INSERT INTO customer_payment VALUES("164","1","1","2020-01-05","","","70","gst-bill","","","118","","52212","");
INSERT INTO customer_payment VALUES("165","1","1","2020-01-05","","","70","","Cash","","","0","52212","");
INSERT INTO customer_payment VALUES("166","1","1","2020-01-06","","","71","gst-bill","","","153","","52365","");
INSERT INTO customer_payment VALUES("167","1","1","2020-01-06","","","71","","Cash","","","0","52365","");
INSERT INTO customer_payment VALUES("168","1","1","2020-01-07","","","72","gst-bill","","","153","","52518","");
INSERT INTO customer_payment VALUES("169","1","1","2020-01-07","","","72","","Cash","","","0","52518","");
INSERT INTO customer_payment VALUES("170","1","1","2020-01-08","","","73","gst-bill","","","218","","52736","");
INSERT INTO customer_payment VALUES("171","1","1","2020-01-08","","","73","","Cash","","","0","52736","");
INSERT INTO customer_payment VALUES("172","1","1","2020-01-08","","","74","gst-bill","","","223","","52959","");
INSERT INTO customer_payment VALUES("173","1","1","2020-01-08","","","74","","Cash","","","0","52959","");
INSERT INTO customer_payment VALUES("174","1","1","2020-01-08","","","75","gst-bill","","","218","","53177","");
INSERT INTO customer_payment VALUES("175","1","1","2020-01-08","","","75","","Cash","","","0","53177","");





CREATE TABLE `expense_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(256) NOT NULL,
  `material` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `login_acc` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO expense_form VALUES("1","2019-07-14","aiit","current","100","1");
INSERT INTO expense_form VALUES("2","2019-08-13","company ","current","1000","1");
INSERT INTO expense_form VALUES("3","2019-08-14","aiit","current","100","1");
INSERT INTO expense_form VALUES("4","2019-08-19","aiit","current","2000","1");
INSERT INTO expense_form VALUES("5","2019-08-23","aiit","current","100","1");
INSERT INTO expense_form VALUES("6","2019-08-23","aiit","current","100","1");
INSERT INTO expense_form VALUES("7","2019-11-04","room","rent","1000","1");
INSERT INTO expense_form VALUES("8","2019-11-04","company","current","2000","1");
INSERT INTO expense_form VALUES("9","2019-11-18","company","current","1000","1");





CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `company_name` varchar(256) NOT NULL,
  `company_pan` varchar(256) NOT NULL,
  `gst_no` varchar(256) NOT NULL,
  `ifsc_no` varchar(256) NOT NULL,
  `mobile1` varchar(256) NOT NULL,
  `mobile2` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `purchase_gst` varchar(10) NOT NULL,
  `billing_gst` varchar(10) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `expired_date` date NOT NULL,
  `billing_expired` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `reminder_low_stock` int(255) NOT NULL DEFAULT '5',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO login VALUES("1","Sachin Gantennavar","AIIT Software Solutions","12568","gst12345","ifsc1234","9901138321","92393383","ashraya empire tilakwadi                          Belgaum-590003 ","admin","admin","admin@gmail.com","2","2","1","2020-06-23","","20");
INSERT INTO login VALUES("2","sachin gantennavar","AIIT Software Solution","12568","gst12345","ifsc1234","901234455","92393383"," Plot No.55, Mahatma Phule Road                           Belgaum-590003 ","admin","admin1","admin@gmail.com","2","2","0","2020-05-27","","5");
INSERT INTO login VALUES("3","","","","","","","","","","123","a@gmail.com","1","1","0","2019-06-21","","5");





CREATE TABLE `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `invoice` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `b_invoice` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `product_name` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `hsn` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `unit` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rate` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `disc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gst_mode` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gst` varchar(10) DEFAULT NULL,
  `sgst` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cgst` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `igst` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `taxable_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tax_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `payment_mode` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `voucher_no` varchar(256) NOT NULL,
  `vendor_id` int(255) DEFAULT NULL,
  `vehicle_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `destination` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

INSERT INTO purchase VALUES("1","1","2019-07-14","1","","15mm","123","10","KG","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","2","","");
INSERT INTO purchase VALUES("2","1","2019-07-14","1","","15mm","1","100","KG","100","0 %","CGST/SGST ","18","900","900","0","10000.00","1800.00","11800","Cash","","3","","");
INSERT INTO purchase VALUES("3","1","2019-07-14","12","","15mm","12","100","KG","100","0 %","CGST/SGST ","18","900","900","0","10000.00","1800.00","11800","Cash","","1","","");
INSERT INTO purchase VALUES("4","1","2019-07-14","12","","15mm","1234","100","KG","110","0 %","CGST/SGST ","18","990","990","0","11000.00","1980.00","12980","Cash","","1","","");
INSERT INTO purchase VALUES("5","1","2019-07-14","12","","Loading Charge","","","","","","CGST/SGST ","0","0","0","0","100","0.00","100","Cash","","1","","");
INSERT INTO purchase VALUES("6","1","2019-07-15","1","","15mm","1","10","KG","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","1","","");
INSERT INTO purchase VALUES("7","1","2019-07-15","1","","15mm","1","100","KG","10","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","4","","");
INSERT INTO purchase VALUES("8","1","2019-08-13","1","","Loading Charge","","","","","","CGST/SGST ","0","0","0","0","100","0.00","100","Cash","","1","","");
INSERT INTO purchase VALUES("9","1","2019-08-13","1","","15mm","123","100","KG","100","0  ","CGST/SGST ","18","900","900","0","10000.00","1800.00","11800","Cash","","1","","");
INSERT INTO purchase VALUES("10","1","2019-08-13","2","","paint","123","100","Ltr","100","0 %","CGST/SGST ","18","900","900","0","10000.00","1800.00","11800","Cash","","5","","");
INSERT INTO purchase VALUES("11","1","2019-08-13","2","","cement","10","100","KG","80","0 %","CGST/SGST ","18","720","720","0","8000.00","1440.00","9440","Cash","","5","","");
INSERT INTO purchase VALUES("12","1","2019-08-14","12","","paint","123","100","Ltr","110","0 %","CGST/SGST ","18","990","990","0","11000.00","1980.00","12980","Cash","","5","","");
INSERT INTO purchase VALUES("13","1","2019-08-14","12","","Transport Charge","","","","","","CGST/SGST ","0","0","0","0","100","0.00","100","Cash","","5","","");
INSERT INTO purchase VALUES("14","1","2019-08-18","5","","mobile","123456","100","Pcs","8000","0 %","CGST/SGST ","18","72000","72000","0","800000.00","144000.00","944000","Cash","","1","","");
INSERT INTO purchase VALUES("15","1","2019-08-18","12","","books","12345","100","Pcs","15","0 %","CGST/SGST ","5","37.5","37.5","0","1500.00","75.00","1575","Cash","","3","","");
INSERT INTO purchase VALUES("16","1","2019-08-18","3","","computer","135","100","Pcs","20000","5 %","CGST/SGST ","18","171000","171000","0","1900000.00","342000.00","2242000","Cash","","5","","");
INSERT INTO purchase VALUES("17","1","2019-08-18","12","","5x5 Tiles","123","100","Sq.Foot","150","0 %","CGST/SGST ","18","1350","1350","0","15000.00","2700.00","17700","Cash","","5","","");
INSERT INTO purchase VALUES("18","1","2019-08-19","12","","books","12345","100","Pcs","12","0 %","CGST/SGST ","5","30","30","0","1200.00","60.00","1260","Cash","","1","","");
INSERT INTO purchase VALUES("19","1","2019-08-19","12","","Transport Charge","","","","","","CGST/SGST ","0","0","0","0","100","0.00","100","Cash","","1","","");
INSERT INTO purchase VALUES("20","1","2019-08-21","1","","paint","123","100","Ltr","100","0 %","CGST/SGST ","18","900","900","0","10000.00","1800.00","11800","Cash","","1","","");
INSERT INTO purchase VALUES("21","1","2019-08-21","12","","Mixing Charge","","","","","","CGST/SGST ","0","0","0","0","100","0.00","100","Cash","","1","","");
INSERT INTO purchase VALUES("22","1","2019-08-21","12","","paint","123","100","Ltr","100","0 %","CGST/SGST ","18","900","900","0","10000.00","1800.00","11800","Cash","","1","","");
INSERT INTO purchase VALUES("23","1","2019-08-23","123","","paint","123","100","Ltr","100","0 %","CGST/SGST ","18","900","900","0","10000.00","1800.00","11800","Cash","","1","","");
INSERT INTO purchase VALUES("24","1","2019-08-23","123","","Transport Charge","","","","","","CGST/SGST ","0","0","0","0","100","0.00","100","Cash","","1","","");
INSERT INTO purchase VALUES("25","1","2019-08-25","1","","paint","123","10","Ltr","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cheque","12345","1","","");
INSERT INTO purchase VALUES("26","1","2019-09-04","123","","cement","1345678","100","KG","101","0 %","CGST/SGST ","12","606","606","0","10100.00","1212.00","11312","Cash","","5","","");
INSERT INTO purchase VALUES("27","1","2019-09-04","123","","mobile","123456","100","Pcs","1000","0 %","CGST/SGST ","18","9000","9000","0","100000.00","18000.00","118000","Cash","","3","","");
INSERT INTO purchase VALUES("28","1","2019-09-06","123","","paint","123","100","Ltr","100","0 %","CGST/SGST ","18","900","900","0","10000.00","1800.00","11800","Cash","","5","","");
INSERT INTO purchase VALUES("29","1","2019-09-06","123","","Loading Charge","","","","","","CGST/SGST ","0","0","0","0","100","0.00","100","Cash","","5","","");
INSERT INTO purchase VALUES("30","1","2019-09-09","12","","paint","123","100","Ltr","100","0 %","CGST/SGST ","18","900","900","0","10000.00","1800.00","11800","Cash","","5","","");
INSERT INTO purchase VALUES("31","1","2019-09-09","12","","Loading Charge","","","","","","CGST/SGST ","0","0","0","0","100","0.00","100","Cash","","5","","");
INSERT INTO purchase VALUES("32","1","2019-09-10","123","","cement","1345678","100","KG","200","0 %","CGST/SGST ","12","1200","1200","0","20000.00","2400.00","22400","Cash","","5","","");
INSERT INTO purchase VALUES("33","1","2019-09-10","123","","Loading Charge","","","","","","CGST/SGST ","0","0","0","0","100","0.00","100","Cash","","5","","");
INSERT INTO purchase VALUES("34","1","2019-09-10","123","","cement","1345678","100","KG","200","0 %","CGST/SGST ","12","1200","1200","0","20000.00","2400.00","22400","Cash","","5","","");
INSERT INTO purchase VALUES("35","1","2019-09-10","123","","Loading Charge","","","","","","CGST/SGST ","0","0","0","0","100","0.00","100","Cash","","5","","");
INSERT INTO purchase VALUES("36","1","2019-09-15","12","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","1","","");
INSERT INTO purchase VALUES("37","1","2019-09-30","123","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","6","","");
INSERT INTO purchase VALUES("38","1","2019-10-02","23","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","1","","");
INSERT INTO purchase VALUES("39","1","2019-10-04","23","","HP Bag","12345","100","Bags","120","0 %","CGST/SGST ","12","720","720","0","12000.00","1440.00","13440","Online","","1","","");
INSERT INTO purchase VALUES("40","1","2019-10-05","100","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Online","","1","","");
INSERT INTO purchase VALUES("41","1","2019-10-19","1","","paint","123","100","Ltr","100","0 %","CGST/SGST ","18","762.71","762.71","0","8474.58","1525.42","10000","Cash","","1","","");
INSERT INTO purchase VALUES("42","1","2019-10-30","12","","paint","123","100","Ltr","120","0 %","CGST/SGST ","18","1080","1080","0","12000.00","2160.00","14160","Cash","","1","","");
INSERT INTO purchase VALUES("43","1","2019-10-31","12","","15mm","12345","100","KG","100","0 %","CGST/SGST ","18","900","900","0","10000.00","1800.00","11800","Cash","","1","","");
INSERT INTO purchase VALUES("44","1","2019-11-04","12","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Cash","","1","","");
INSERT INTO purchase VALUES("45","1","2019-11-04","12","","cement","1345678","100","KG","100","0 %","CGST/SGST ","12","600","600","0","10000.00","1200.00","11200","Cash","","1","","");
INSERT INTO purchase VALUES("46","1","2019-11-04","12","","Transport Charge","","","","","","CGST/SGST ","0","0","0","0","100.00","0.00","100","Cash","","1","","");
INSERT INTO purchase VALUES("47","1","2019-11-04","701","","Mixing Charge","","","","","","CGST/SGST ","0","0","0","0","10.00","0.00","10","Cash","","1","","");
INSERT INTO purchase VALUES("48","1","2019-11-04","701","","birla shakit","25232930","10","Bags","305","0 %","CGST/SGST ","28","333.595","333.595","0","2382.81","667.19","3050","Cash","","1","","");
INSERT INTO purchase VALUES("49","1","2019-11-09","1","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO purchase VALUES("50","1","2019-11-09","1","","cement","1345678","1","KG","10","0 %","CGST/SGST ","12","0.535","0.535","0","8.93","1.07","10","Cash","","1","","");
INSERT INTO purchase VALUES("51","1","2019-11-09","1","","paint","123","1","Ltr","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO purchase VALUES("52","1","2019-11-09","1","","books","12345","1","Pcs","100","0 %","CGST/SGST ","5","2.38","2.38","0","95.24","4.76","100","Cash","","1","","");
INSERT INTO purchase VALUES("53","1","2019-11-09","1","","5x5 Tiles","123","1","Sq.Foot","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO purchase VALUES("54","1","2019-11-09","23","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO purchase VALUES("55","1","2019-11-09","23","","cement","1345678","1","KG","10","0 %","CGST/SGST ","12","0.535","0.535","0","8.93","1.07","10","Cash","","1","","");
INSERT INTO purchase VALUES("56","1","2019-11-09","23","","paint","123","1","Ltr","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","1","","");
INSERT INTO purchase VALUES("57","1","2019-11-09","23","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO purchase VALUES("58","1","2019-11-09","23","","5x5 Tiles","123","1","Sq.Foot","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO purchase VALUES("59","1","2019-11-09","1","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.9","0.9","0","10.00","1.80","11.8","Cash","","1","","");
INSERT INTO purchase VALUES("60","1","2019-11-09","Am","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","9","9","0","100.00","18.00","118","Cash","","1","","");
INSERT INTO purchase VALUES("61","1","2019-11-09","A1","","15mm","12345","3","KG","100","0 %","CGST/SGST ","18","27","27","0","300.00","54.00","354","Cash","","1","","");
INSERT INTO purchase VALUES("62","1","2019-11-11","12","","abc","1232","100","KG","10","0 %","CGST/SGST ","0","0","0","0","1000.00","0.00","1000","Cash","","1","","");
INSERT INTO purchase VALUES("63","1","2019-11-18","123","","paint","123","10","Ltr","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","1","","");
INSERT INTO purchase VALUES("64","1","2019-11-18","123","","cement","1345678","100","KG","10","0 %","CGST/SGST ","12","53.57","53.57","0","892.86","107.14","1000","Cash","","1","","");
INSERT INTO purchase VALUES("65","1","2019-11-18","123","","Mixing Charge","","","","","","CGST/SGST ","0","0","0","0","100.00","0.00","100","Cash","","1","","");
INSERT INTO purchase VALUES("66","1","2019-11-20","123","","Pen","123","100","KG","10","0 %","CGST/SGST ","0","0","0","0","1000.00","0.00","1000","Cash","","1","","");
INSERT INTO purchase VALUES("67","1","2019-11-21","3214","","Smart TV","123","20","Pcs","20000","0 %","CGST/SGST ","18","30508.475","30508.475","0","338983.05","61016.95","400000","Cash","","7","","");
INSERT INTO purchase VALUES("68","1","2019-11-23","12","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO purchase VALUES("69","1","2019-11-23","12","","cement","1345678","10","KG","100","0 %","CGST/SGST ","12","53.57","53.57","0","892.86","107.14","1000","Cash","","1","","");
INSERT INTO purchase VALUES("70","1","2019-11-23","12","","15mm","12345","12","KG","10","0 %","CGST/SGST ","18","9.155","9.155","0","101.69","18.31","120","Cash","","1","","");
INSERT INTO purchase VALUES("71","1","2019-11-23","12","","15mm","12345","1","KG","10","0 %","CGST/SGST ","18","0.765","0.765","0","8.47","1.53","10","Cash","","3","","");
INSERT INTO purchase VALUES("72","1","2019-11-23","12","","cement","1345678","12","KG","110","0 %","CGST/SGST ","12","70.715","70.715","0","1178.57","141.43","1320","Cash","","3","","");
INSERT INTO purchase VALUES("73","1","2019-11-23","12","","15mm","12345","100","KG","10","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","1","","");
INSERT INTO purchase VALUES("74","1","2019-11-23","12","","paint","123","10","Ltr","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","1","","");
INSERT INTO purchase VALUES("75","1","2019-11-23","12","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","1","","");
INSERT INTO purchase VALUES("76","1","2019-11-23","12","","15mm","12345","1","KG","100","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO purchase VALUES("77","1","2019-11-23","12","","paint","123","10","Ltr","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","1","","");
INSERT INTO purchase VALUES("78","1","2019-11-23","123","","paint","123","12","Ltr","100","0 %","CGST/SGST ","18","91.525","91.525","0","1016.95","183.05","1200","Cash","","1","","");
INSERT INTO purchase VALUES("79","1","2019-11-23","123","","cement","1345678","10","KG","100","0 %","CGST/SGST ","12","53.57","53.57","0","892.86","107.14","1000","Cash","","1","","");
INSERT INTO purchase VALUES("80","1","2019-11-23","123","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","1","","");
INSERT INTO purchase VALUES("81","1","2019-11-23","123","","cement","1345678","10","KG","100","0 %","CGST/SGST ","12","53.57","53.57","0","892.86","107.14","1000","Cash","","1","","");
INSERT INTO purchase VALUES("82","1","2019-11-23","123","","paint","123","10","Ltr","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","3","","");
INSERT INTO purchase VALUES("83","1","2019-11-23","123","","5x5 Tiles","123","10","Sq.Foot","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","3","","");
INSERT INTO purchase VALUES("84","1","2019-11-23","23","","computer","135","1","Pcs","100000","0 %","CGST/SGST ","18","7627.12","7627.12","0","84745.76","15254.24","100000","Cash","","3","","");
INSERT INTO purchase VALUES("85","1","2019-11-23","23","","HP Bag","12345","10","Bags","1000","0 %","CGST/SGST ","12","535.715","535.715","0","8928.57","1071.43","10000","Cash","","3","","");
INSERT INTO purchase VALUES("86","1","2019-11-23","12","","paint","123","100","Ltr","100","0 %","CGST/SGST ","18","762.71","762.71","0","8474.58","1525.42","10000","Cash","","1","","");
INSERT INTO purchase VALUES("87","1","2019-11-23","12","","cement","1345678","1","KG","100","0 %","CGST/SGST ","12","5.355","5.355","0","89.29","10.71","100","Cash","","1","","");
INSERT INTO purchase VALUES("88","1","2019-11-23","12","","paint","123","10","Ltr","100","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","1","","");
INSERT INTO purchase VALUES("89","1","2019-11-23","12","","cement","1345678","10","KG","100","0 %","CGST/SGST ","12","53.57","53.57","0","892.86","107.14","1000","Cash","","1","","");
INSERT INTO purchase VALUES("90","1","2019-11-28","123","","paint","123","100","Ltr","100","0 %","CGST/SGST ","18","762.71","762.71","0","8474.58","1525.42","10000","Cash","","1","","");
INSERT INTO purchase VALUES("91","1","2019-11-28","123","","Mixing Charge","","","","","","CGST/SGST ","0","0","0","0","100.00","0.00","100","Cash","","1","","");
INSERT INTO purchase VALUES("92","1","2019-11-29","12","","15mm","12345","1","KG","10","10 %","CGST/SGST ","18","0.685","0.685","0","7.63","1.37","9","Cash","","1","","");
INSERT INTO purchase VALUES("93","1","2019-11-29","12","","cement","1345678","1","KG","100","0 %","CGST/SGST ","12","5.355","5.355","0","89.29","10.71","100","Cash","","1","","");
INSERT INTO purchase VALUES("94","1","2019-11-29","12","","15mm","12345","1","KG","10","10 %","CGST/SGST ","18","0.685","0.685","0","7.63","1.37","9","Cash","","1","","");
INSERT INTO purchase VALUES("95","1","2019-12-03","1232","","15mm","12345","20","KG","15","0 %","CGST/SGST ","18","22.88","22.88","0","254.24","45.76","300","Cash","","1","","");
INSERT INTO purchase VALUES("96","1","2019-12-02","3256","","15mm","12345","50","KG","20","0 %","CGST/SGST ","18","76.27","76.27","0","847.46","152.54","1000","Cash","","3","","");
INSERT INTO purchase VALUES("97","1","2019-12-03","1269","","pen 2","123","10","Pcs","10","0 %","CGST/SGST ","18","7.625","7.625","0","84.75","15.25","100","Cash","","1","","");
INSERT INTO purchase VALUES("98","1","2019-12-02","1235","","pen 2","123","20","Pcs","20","0 %","CGST/SGST ","18","30.51","30.51","0","338.98","61.02","400","Cash","","1","","");
INSERT INTO purchase VALUES("99","1","2019-12-01","3699","","pen 2","123","30","Pcs","100","0 %","CGST/SGST ","18","228.815","228.815","0","2542.37","457.63","3000","Cash","","1","","");
INSERT INTO purchase VALUES("100","1","2019-12-04","147","","pen 2","123","40","Pcs","40","0 %","CGST/SGST ","18","122.035","122.035","0","1355.93","244.07","1600","Cash","","1","","");
INSERT INTO purchase VALUES("101","1","2019-11-30","25896","","pen 2","123","50","Pcs","50","0 %","CGST/SGST ","18","190.68","190.68","0","2118.64","381.36","2500","Cash","","1","","");
INSERT INTO purchase VALUES("102","1","2019-12-03","12","","paint","123","100","Ltr","120","0 %","CGST/SGST ","18","915.255","915.255","0","10169.49","1830.51","12000","Cash","","9","","");
INSERT INTO purchase VALUES("103","1","2020-01-04","12345","","paint","123","10","Ltr","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","1","","");
INSERT INTO purchase VALUES("104","1","2020-01-04","12345","","Cutting Charge","","","","","","CGST/SGST ","0","0","0","0","100.00","0.00","100","Cash","","1","","");
INSERT INTO purchase VALUES("105","1","2020-01-04","132","","abc 2x5","123","10000","Sq.Foot","10","0 %","CGST/SGST ","5","2500","2500","0","100000.00","5000.00","105000","Cash","","1","","");
INSERT INTO purchase VALUES("106","1","2020-01-04","1345","","kdp 2x6","12","10000","Sq.Foot","20","0 %","CGST/SGST ","0","0","0","0","200000.00","0.00","200000","Cash","","3","","");
INSERT INTO purchase VALUES("107","1","2020-01-04","1345","","Transport Charge","","","","","","CGST/SGST ","0","0","0","0","100.00","0.00","100","Cash","","3","","");
INSERT INTO purchase VALUES("108","1","2020-01-04","1345","","Loading Charge","","","","","","CGST/SGST ","0","0","0","0","100.00","0.00","100","Cash","","3","","");
INSERT INTO purchase VALUES("109","1","2020-01-04","1345","","unloading","","","","","","CGST/SGST ","0","0","0","0","150.00","0.00","150","Cash","","3","","");
INSERT INTO purchase VALUES("110","1","2020-01-06","123","","cement","1345678","10","KG","100","0 %","CGST/SGST ","0","0","0","0","1000.00","0.00","1000","Cash","","1","","");
INSERT INTO purchase VALUES("111","1","2020-01-07","12359","","15mm","12345","10","KG","100","0 %","CGST/SGST ","18","90","90","0","1000.00","180.00","1180","Cash","","3","","");
INSERT INTO purchase VALUES("112","1","2020-01-07","12359","","Insurance Charge","","","","","","CGST/SGST ","0","0","0","0","100.00","0.00","100","Cash","","3","","");





CREATE TABLE `quotation` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `quotation_id` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `product_name` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `qty` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `rate` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gst` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gst_value` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `taxable_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tax_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `total_amt` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `customer_id` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `destination` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO quotation VALUES("1","1","2019-07-14","1","15mm","100","","100","CGST/SGST ","18","10000.00","1800.00","11800","1","bgm");
INSERT INTO quotation VALUES("2","1","2019-08-13","2","15mm","10","","10","CGST/SGST ","18","100.00","18.00","118","1","");
INSERT INTO quotation VALUES("3","1","2019-08-14","3","15mm","10","","100","CGST/SGST ","18","1000.00","180.00","1180","1","bgm");
INSERT INTO quotation VALUES("4","1","2019-08-19","4","cement","10","","200","CGST/SGST ","18","2000.00","360.00","2360","1","bgm");
INSERT INTO quotation VALUES("5","1","2019-09-30","5","paint","10","Ltr","100","CGST/SGST ","12","1000.00","120.00","1120","2","");
INSERT INTO quotation VALUES("6","1","2019-09-30","6","15mm","12","KG","115","CGST/SGST ","0","1380.00","0.00","1380","3","belgaum tilakwadi");
INSERT INTO quotation VALUES("7","1","2019-09-30","6","Couier Charge","","","","CGST/SGST ","0","100","0.00","100","3","belgaum tilakwadi");
INSERT INTO quotation VALUES("8","1","2019-09-30","6","cement","42","KG","125","CGST/SGST ","18","4449.15","800.85","5250","3","belgaum tilakwadi");





CREATE TABLE `quotation_cust` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `name` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gstin` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `mobile` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `status_delete` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO quotation_cust VALUES("1","1","sachin","gst1234","725893225","bgm","0");
INSERT INTO quotation_cust VALUES("2","1","samer","gst12","7204745662","bgm","0");
INSERT INTO quotation_cust VALUES("3","1","dipak sutar","4363646563","9901138321","belgaum ind karnaataka","0");





CREATE TABLE `reminder` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `cheque` varchar(256) DEFAULT NULL,
  `message` text,
  `login_acc` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO reminder VALUES("6","2019-09-27","amar","installment payment","1");
INSERT INTO reminder VALUES("9","2020-02-02","cheque 123456","bank","1");
INSERT INTO reminder VALUES("10","2020-02-16","sachin"," credit 2000 rs recovery","1");
INSERT INTO reminder VALUES("11","2020-02-16","sachin"," credit 2000 rs recovery","1");





CREATE TABLE `staff_deteils` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `local_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `login_acc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO staff_deteils VALUES("1","sachin gantennavar","7204745662","sachin@gmail.com","2019-07-08","plot 210/10 adarsh nagar 6th cross belgaum","plot 210/10 adarsh nagar 6th cross belgaum","1");
INSERT INTO staff_deteils VALUES("2","Praveen","7204745662","ga@gmail.com","2019-07-18","bgm","bgm","1");
INSERT INTO staff_deteils VALUES("3","james","7204745662","ga@gmail.com","2019-07-18","bgm","bgm","1");
INSERT INTO staff_deteils VALUES("4","Amar Patil","7204745662","amar@gmail.com","2019-02-10","bgm","bgm","1");





CREATE TABLE `stock` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `barcode` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `product_name` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `unit` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `hsn` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gst_type` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gst_value` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `purchase_price` varchar(256) DEFAULT NULL,
  `sale_price` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rack` varchar(256) DEFAULT NULL,
  `reminder_low_stock` int(255) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO stock VALUES("1","1","","15mm","257.5","KG","0","12345","CGST/SGST ","18","100","","A2","3");
INSERT INTO stock VALUES("2","1","","paint","1066","Ltr","0","123","CGST/SGST ","18","100","130","A1","2");
INSERT INTO stock VALUES("3","1","","cement","809","KG","0","1345678","CGST/SGST ","12","100","160","A3","2");
INSERT INTO stock VALUES("4","1","","mobile","286","Pcs","0","123456","CGST/SGST ","18","20200","3000","B1","2");
INSERT INTO stock VALUES("5","1","","books","200","Pcs","0","12345","CGST/SGST ","5","100","20","","2");
INSERT INTO stock VALUES("6","1","","computer","4","Pcs","0","135","CGST/SGST ","18","100000","15000","","10");
INSERT INTO stock VALUES("7","1","","5x5 Tiles","111","Sq.Foot","0","123","CGST/SGST ","18","100","150","","2");
INSERT INTO stock VALUES("8","1","","HP Bag","109","Bags","","12345","CGST/SGST ","12","1000","","A5","2");
INSERT INTO stock VALUES("9","1","","birla shakit","9","Bags","","25232930","CGST/SGST ","28","305","","","15");
INSERT INTO stock VALUES("32","1","","Pen","99","Pcs","","123","CGST/SGST ","0","10","","","2");
INSERT INTO stock VALUES("33","1","","Smart TV","19","Pcs","","123","CGST/SGST ","18","20000","","","2");
INSERT INTO stock VALUES("34","1","","pen 2","69","Pcs","","123","CGST/SGST ","18","50","","","2");
INSERT INTO stock VALUES("36","1","","abc 2x5","9970","Sq.Foot","","123","CGST/SGST ","18","10","","","2");
INSERT INTO stock VALUES("37","1","","kdp 2x6","9974","Sq.Foot","","12","CGST/SGST ","0","20","","","2");





CREATE TABLE `stock_price` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `invoice` varchar(256) DEFAULT NULL,
  `product_name` varchar(256) DEFAULT NULL,
  `qty` varchar(256) DEFAULT NULL,
  `price` varchar(256) DEFAULT NULL,
  `login_acc` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO stock_price VALUES("2","2019-11-29","12","cement","799","100","1");
INSERT INTO stock_price VALUES("3","2019-11-29","12","paint","957","1000","1");
INSERT INTO stock_price VALUES("4","2019-11-29","12","15mm","189.5","78","1");
INSERT INTO stock_price VALUES("5","2019-11-29","12","mobile","286","10000","1");
INSERT INTO stock_price VALUES("6","2019-11-29","12","books","200","10","1");
INSERT INTO stock_price VALUES("7","2019-11-29","12","computer","4","10000","1");
INSERT INTO stock_price VALUES("8","2019-11-29","12","5x5 Tiles","111","150","1");
INSERT INTO stock_price VALUES("9","2019-11-29","12","HP Bag","109","150","1");
INSERT INTO stock_price VALUES("10","2019-11-29","12","birla shakit","9","150","1");
INSERT INTO stock_price VALUES("11","2019-11-29","12","Pen","99","15","1");
INSERT INTO stock_price VALUES("12","2019-11-29","12","Smart TV","19","15000","1");
INSERT INTO stock_price VALUES("13","2019-12-03","1232","15mm","20","15","1");
INSERT INTO stock_price VALUES("14","2019-12-02","3256","15mm","50","20","1");
INSERT INTO stock_price VALUES("18","2019-12-04","147","pen 2","19","40","1");
INSERT INTO stock_price VALUES("19","2019-11-30","25896","pen 2","50","50","1");
INSERT INTO stock_price VALUES("20","2019-12-03","12","paint","100","120","1");
INSERT INTO stock_price VALUES("21","2020-01-04","12345","paint","10","100","1");
INSERT INTO stock_price VALUES("23","2020-01-04","132","abc 2x5","9970","10","1");
INSERT INTO stock_price VALUES("24","2020-01-04","1345","kdp 2x6","9974","20","1");
INSERT INTO stock_price VALUES("28","2020-01-06","123","cement","10","100","1");
INSERT INTO stock_price VALUES("29","2020-01-07","12359","15mm","10","100","1");





CREATE TABLE `vendor_other` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bill_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `delivery_note` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `supplier_ref` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vechical_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `delivery_date` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `despatched_thought` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `destination` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `vendor_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `original_date` varchar(256) DEFAULT NULL,
  `original_invoice` varchar(256) DEFAULT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `bill_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `particular` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vch_type` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `vch_no` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `credit_amount` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `debit_amount` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `balance` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

INSERT INTO vendor_payment VALUES("1","1","2019-07-14","","","2","1","gst-bill","","","1180","","1180","0");
INSERT INTO vendor_payment VALUES("2","1","2019-07-14","","","2","1","","Cash","","","0","1180","0");
INSERT INTO vendor_payment VALUES("3","1","2019-07-14","","","3","1","gst-bill","","","11800","","11800","0");
INSERT INTO vendor_payment VALUES("4","1","2019-07-14","","","3","1","","Cash","","","0","11800","0");
INSERT INTO vendor_payment VALUES("5","1","2019-07-14","","","1","12","gst-bill","","","11800","","11800","0");
INSERT INTO vendor_payment VALUES("6","1","2019-07-14","","","1","12","","Cash","","","0","11800","0");
INSERT INTO vendor_payment VALUES("7","1","2019-07-14","","","1","12","gst-bill","","","13080","","24880","0");
INSERT INTO vendor_payment VALUES("8","1","2019-07-14","","","1","12","","Cash","","","13000","11880","0");
INSERT INTO vendor_payment VALUES("9","1","2019-07-14","","","1","","","Cash","","","100","11780","0");
INSERT INTO vendor_payment VALUES("10","1","2019-07-15","","","1","1","gst-bill","","","1180","","12960","0");
INSERT INTO vendor_payment VALUES("11","1","2019-07-15","","","1","1","","Cash","","","2000","10960","0");
INSERT INTO vendor_payment VALUES("12","1","2019-07-15","","","4","1","gst-bill","","","1180","","1180","0");
INSERT INTO vendor_payment VALUES("13","1","2019-07-15","","","4","1","","Cash","","","2000","-820","0");
INSERT INTO vendor_payment VALUES("15","1","2019-07-15","","","4","","","Cash","","30","","-850","0");
INSERT INTO vendor_payment VALUES("16","1","2019-07-15","","","4","","","Cash","","50","","-900","0");
INSERT INTO vendor_payment VALUES("19","1","2019-07-15","","","4","","","Cash","","100","","-800","0");
INSERT INTO vendor_payment VALUES("20","1","2019-07-15","","","4","","","Cash","","200","","-1000","0");
INSERT INTO vendor_payment VALUES("23","1","2019-07-15","","","4","","","Cash","","","10","-990","0");
INSERT INTO vendor_payment VALUES("24","1","2019-07-15","","","4","","","Cash","","10","","-1000","0");
INSERT INTO vendor_payment VALUES("25","1","2019-07-15","","","4","","","Cash","","","1010","10","0");
INSERT INTO vendor_payment VALUES("26","1","2019-07-15","","","4","","","Cash","","100","","-90","0");
INSERT INTO vendor_payment VALUES("31","1","2019-07-15","","","4","","","Cash","","","10","-100","0");
INSERT INTO vendor_payment VALUES("32","1","2019-07-15","","","4","","","Cash","","10","","-110","0");
INSERT INTO vendor_payment VALUES("33","1","2019-07-15","","","4","","","Cash","","10","","-120","0");
INSERT INTO vendor_payment VALUES("34","1","2019-07-15","","","4","","","Cash","","","10","-130","0");
INSERT INTO vendor_payment VALUES("35","1","2019-07-15","","","1","","","Cash","","960","","11920","0");
INSERT INTO vendor_payment VALUES("36","1","2019-07-15","","","1","","","Cash","","20","","11900","0");
INSERT INTO vendor_payment VALUES("37","1","2019-07-15","","","4","","","Cash","","20","","-150","0");
INSERT INTO vendor_payment VALUES("38","1","2019-07-15","","","1","","","Cash","","","10","11890","0");
INSERT INTO vendor_payment VALUES("39","1","2019-07-15","","","1","","","Cash","","10","","11880","0");
INSERT INTO vendor_payment VALUES("40","1","2019-07-15","","","1","","","Cash","","","20","11900","0");
INSERT INTO vendor_payment VALUES("41","1","2019-07-15","","","4","","","Cash","","10","","-160","0");
INSERT INTO vendor_payment VALUES("42","1","2019-07-15","","","4","","","Cash","","","10","-150","0");
INSERT INTO vendor_payment VALUES("43","1","2019-07-15","","","1","","","Cash","","10","","11890","0");
INSERT INTO vendor_payment VALUES("44","1","2019-07-15","","","1","","","Cash","","","10","11900","0");
INSERT INTO vendor_payment VALUES("45","1","2019-07-15","","","1","","","Cash","","10","","11890","0");
INSERT INTO vendor_payment VALUES("46","1","2019-07-15","","","1","","","Cash","","","10","11900","0");
INSERT INTO vendor_payment VALUES("47","1","2019-07-15","","","4","","","Cash","","10","","-160","0");
INSERT INTO vendor_payment VALUES("48","1","2019-07-15","","","4","","","Cash","","","10","-150","0");
INSERT INTO vendor_payment VALUES("49","1","2019-07-15","","","1","","","Cash","","10","","11890","0");
INSERT INTO vendor_payment VALUES("50","1","2019-07-15","","","1","","","Cash","","","10","11900","0");
INSERT INTO vendor_payment VALUES("51","1","2019-07-16","","","4","","","Cash","","10","","-160","0");
INSERT INTO vendor_payment VALUES("52","1","2019-07-16","","","4","","","Cash","","","10","-150","0");
INSERT INTO vendor_payment VALUES("53","1","2019-07-17","","","1","","","Cash","","100","","11800","0");
INSERT INTO vendor_payment VALUES("54","1","2019-07-17","","","1","","","Cash","","","100","11900","0");
INSERT INTO vendor_payment VALUES("55","1","2019-08-13","","","1","1","gst-bill","","","11900","","23800","0");
INSERT INTO vendor_payment VALUES("56","1","2019-08-13","","","1","1","","Cash","","","1180","22620","0");
INSERT INTO vendor_payment VALUES("57","1","2019-08-13","","","1","","","Cash","","100","","22520","0");
INSERT INTO vendor_payment VALUES("58","1","2019-08-13","","","5","2","gst-bill","","","21240","","21240","0");
INSERT INTO vendor_payment VALUES("59","1","2019-08-13","","","5","2","","Cash","","","21000","240","0");
INSERT INTO vendor_payment VALUES("60","1","2019-08-14","","","5","12","gst-bill","","","13080","","13320","0");
INSERT INTO vendor_payment VALUES("61","1","2019-08-14","","","5","12","","Cash","","","13000","320","0");
INSERT INTO vendor_payment VALUES("62","1","2019-08-14","","","1","","","Cash","","100","","22420","0");
INSERT INTO vendor_payment VALUES("63","1","2019-08-18","","","1","5","gst-bill","","","944000","","966420","0");
INSERT INTO vendor_payment VALUES("64","1","2019-08-18","","","1","5","","Cash","","","943800","22620","0");
INSERT INTO vendor_payment VALUES("65","1","2019-08-18","","","3","12","gst-bill","","","1575","","13375","0");
INSERT INTO vendor_payment VALUES("66","1","2019-08-18","","","3","12","","Cash","","","1500","11875","0");
INSERT INTO vendor_payment VALUES("67","1","2019-08-18","","","5","3","gst-bill","","","2242000","","2242320","0");
INSERT INTO vendor_payment VALUES("68","1","2019-08-18","","","5","3","","Cash","","","2241000","1320","0");
INSERT INTO vendor_payment VALUES("69","1","2019-08-18","","","5","12","gst-bill","","","17700","","19020","0");
INSERT INTO vendor_payment VALUES("70","1","2019-08-18","","","5","12","","Cash","","","17600","1420","0");
INSERT INTO vendor_payment VALUES("71","1","2019-08-19","","","1","12","gst-bill","","","1360","","23980","0");
INSERT INTO vendor_payment VALUES("72","1","2019-08-19","","","1","12","","Cash","","","1300","22680","0");
INSERT INTO vendor_payment VALUES("73","1","2019-08-19","","","1","","","Cash","","100","","22580","0");
INSERT INTO vendor_payment VALUES("74","1","2019-08-21","","","1","1","gst-bill","","","11800","","34380","0");
INSERT INTO vendor_payment VALUES("75","1","2019-08-21","","","1","1","","Cash","","","11000","23380","0");
INSERT INTO vendor_payment VALUES("76","1","2019-08-21","","","1","12","gst-bill","","","11900","","35280","0");
INSERT INTO vendor_payment VALUES("77","1","2019-08-21","","","1","12","","Cash","","","11900","23380","0");
INSERT INTO vendor_payment VALUES("78","1","2019-08-22","","","1","1","gst-bill","","","1180","","24560","0");
INSERT INTO vendor_payment VALUES("79","1","2019-08-22","","","1","1","","Cash","","","1180","23380","0");
INSERT INTO vendor_payment VALUES("80","1","2019-08-22","","","1","18","gst-bill","","","1180","","24560","0");
INSERT INTO vendor_payment VALUES("81","1","2019-08-22","","","1","18","","Cash","","","0","24560","0");
INSERT INTO vendor_payment VALUES("82","1","2019-08-22","","","1","12","gst-bill","","","118","","24678","0");
INSERT INTO vendor_payment VALUES("83","1","2019-08-22","","","1","12","","Cash","","","0","24678","0");
INSERT INTO vendor_payment VALUES("84","1","2019-08-22","","","3","18","gst-bill","","","118","","11993","0");
INSERT INTO vendor_payment VALUES("85","1","2019-08-22","","","3","18","","Cash","","","118","11875","0");
INSERT INTO vendor_payment VALUES("86","1","2019-08-22","","","3","1","gst-bill","","","11800","","23675","0");
INSERT INTO vendor_payment VALUES("87","1","2019-08-22","","","3","1","","Cash","","","11800","11875","0");
INSERT INTO vendor_payment VALUES("88","1","2019-08-23","","","1","12","gst-bill","","","11300","","35978","0");
INSERT INTO vendor_payment VALUES("89","1","2019-08-23","","","1","12","","Cash","","","11000","24978","0");
INSERT INTO vendor_payment VALUES("90","1","2019-08-23","","","1","123","gst-bill","","","118100","","143078","0");
INSERT INTO vendor_payment VALUES("91","1","2019-08-23","","","1","123","","RTGS","","","0","143078","0");
INSERT INTO vendor_payment VALUES("92","1","2019-08-23","","","1","123","gst-bill","","","11400","","154478","0");
INSERT INTO vendor_payment VALUES("93","1","2019-08-23","","","1","123","","Cash","","","11400","143078","0");
INSERT INTO vendor_payment VALUES("94","1","2019-08-23","","","1","","","Cash","","100","","142978","0");
INSERT INTO vendor_payment VALUES("95","1","2019-08-23","","","1","","","Cash","","978","","142000","0");
INSERT INTO vendor_payment VALUES("96","1","2019-08-23","","","1","123","gst-bill","","","11900","","153900","0");
INSERT INTO vendor_payment VALUES("97","1","2019-08-23","","","1","123","","Cash","","","0","153900","0");
INSERT INTO vendor_payment VALUES("98","1","2019-08-25","","","1","","","Cash","","100","","153800","0");
INSERT INTO vendor_payment VALUES("99","1","2019-08-25","","","1","","","Cash","","100","","153700","0");
INSERT INTO vendor_payment VALUES("100","1","2019-08-25","","","1","1","gst-bill","","","1180","","154880","0");
INSERT INTO vendor_payment VALUES("101","1","2019-08-25","","","1","1","sbi","Cheque","12345","","1180","153700","0");
INSERT INTO vendor_payment VALUES("102","1","2019-09-01","","","1","","","Cash","","100","","153600","0");
INSERT INTO vendor_payment VALUES("103","1","2019-09-04","","","5","123","gst-bill","","","11312","","12732","0");
INSERT INTO vendor_payment VALUES("104","1","2019-09-04","","","5","123","","Cash","","","11312","1420","0");
INSERT INTO vendor_payment VALUES("105","1","2019-09-04","","","3","123","gst-bill","","","118000","","129875","0");
INSERT INTO vendor_payment VALUES("106","1","2019-09-04","","","3","123","","Cash","","","0","129875","0");
INSERT INTO vendor_payment VALUES("107","1","2019-09-06","","","5","123","gst-bill","","","11900","","13320","0");
INSERT INTO vendor_payment VALUES("108","1","2019-09-06","","","5","123","","Cash","","","0","13320","0");
INSERT INTO vendor_payment VALUES("109","1","2019-09-09","","","5","12","gst-bill","","","11900","","25220","0");
INSERT INTO vendor_payment VALUES("110","1","2019-09-09","","","5","12","","Cash","","","0","25220","0");
INSERT INTO vendor_payment VALUES("111","1","2019-09-09","","","1","","","Cash","","1000","","152600","0");
INSERT INTO vendor_payment VALUES("112","1","2019-09-10","","","5","123","gst-bill","","","22500","","47720","0");
INSERT INTO vendor_payment VALUES("113","1","2019-09-10","","","5","123","","Cash","","","22500","25220","0");
INSERT INTO vendor_payment VALUES("114","1","2019-09-10","","","5","123","gst-bill","","","22500","","47720","0");
INSERT INTO vendor_payment VALUES("115","1","2019-09-10","","","5","123","","Cash","","","22500","25220","0");
INSERT INTO vendor_payment VALUES("116","1","2019-09-15","","","1","12","gst-bill","","","1180","","153780","0");
INSERT INTO vendor_payment VALUES("117","1","2019-09-15","","","1","12","","Cash","","","0","153780","0");
INSERT INTO vendor_payment VALUES("118","1","2019-09-30","","","5","","","Cash","","25220","","0","0");
INSERT INTO vendor_payment VALUES("119","1","2019-09-30","","","3","","","Cash","","129875","","0","0");
INSERT INTO vendor_payment VALUES("120","1","2019-09-30","","","6","123","gst-bill","","","1000","","1000","0");
INSERT INTO vendor_payment VALUES("121","1","2019-09-30","","","6","123","","Cash","","","0","1000","0");
INSERT INTO vendor_payment VALUES("122","1","2019-09-30","","","6","","","Cash","","1000","","0","0");
INSERT INTO vendor_payment VALUES("123","1","2019-09-30","","","6","","","Cash","","","1000","1000","0");
INSERT INTO vendor_payment VALUES("124","1","2019-10-02","","","1","23","gst-bill","","","1180","","154960","0");
INSERT INTO vendor_payment VALUES("125","1","2019-10-02","","","1","23","","Cash","","","0","154960","0");
INSERT INTO vendor_payment VALUES("126","1","2019-10-04","","","1","23","gst-bill","","","13440","","168400","0");
INSERT INTO vendor_payment VALUES("127","1","2019-10-04","","","1","23","","Online","","","13440","154960","0");
INSERT INTO vendor_payment VALUES("128","1","2019-10-05","","","1","100","gst-bill","","","1180","","156140","0");
INSERT INTO vendor_payment VALUES("129","1","2019-10-05","","","1","100","Google Pay","Online","","","1180","154960","0");
INSERT INTO vendor_payment VALUES("130","1","2019-10-05","","","1","","","Online","","100","","154860","0");
INSERT INTO vendor_payment VALUES("131","1","2019-10-05","","","1","","","Online","","100","","154760","0");
INSERT INTO vendor_payment VALUES("132","1","2019-10-05","","","1","","","Online","","100","","154660","0");
INSERT INTO vendor_payment VALUES("133","1","2019-10-05","","","1","","sbi","Cheque","1234","100","","154560","0");
INSERT INTO vendor_payment VALUES("134","1","2019-10-05","","","1","","","Online","","100","","154460","0");
INSERT INTO vendor_payment VALUES("135","1","2019-10-05","","","1","","","Online","","100","","154360","0");
INSERT INTO vendor_payment VALUES("136","1","2019-10-05","","","1","","Google Pay","Online","","100","","154260","0");
INSERT INTO vendor_payment VALUES("137","1","2019-10-05","","","1","","Google Pay","Online","","100","","154160","0");
INSERT INTO vendor_payment VALUES("138","1","2019-10-05","","","1","","","Cash","","100","","154060","0");
INSERT INTO vendor_payment VALUES("139","1","2019-10-05","","","1","","Google Pay","Online","","100","","153960","0");
INSERT INTO vendor_payment VALUES("140","1","2019-10-19","","","1","1","gst-bill","","","10000","","163960","0");
INSERT INTO vendor_payment VALUES("141","1","2019-10-19","","","1","1","","Cash","","","10000","153960","0");
INSERT INTO vendor_payment VALUES("142","1","2019-10-19","","","1","","","Cash","","100","","153860","0");
INSERT INTO vendor_payment VALUES("143","1","2019-10-30","","","1","12","gst-bill","","","14160","","168020","0");
INSERT INTO vendor_payment VALUES("144","1","2019-10-30","","","1","12","","Cash","","","1000","167020","0");
INSERT INTO vendor_payment VALUES("145","1","2019-10-30","","","1","","","Discount","","100","","166920","0");
INSERT INTO vendor_payment VALUES("146","1","2019-10-31","","","1","12","gst-bill","","","11800","","178720","0");
INSERT INTO vendor_payment VALUES("147","1","2019-10-31","","","1","12","","Cash","","","0","178720","0");
INSERT INTO vendor_payment VALUES("148","1","2019-11-04","","","1","12","gst-bill","","","11418","","190138","0");
INSERT INTO vendor_payment VALUES("149","1","2019-11-04","","","1","12","","Cash","","","0","190138","0");
INSERT INTO vendor_payment VALUES("150","1","2019-11-04","","","1","","","Cash","","100","","190038","0");
INSERT INTO vendor_payment VALUES("151","1","2019-11-04","","","1","701","gst-bill","","","3060","","193098","0");
INSERT INTO vendor_payment VALUES("152","1","2019-11-04","","","1","701","","Cash","","","2000","191098","0");
INSERT INTO vendor_payment VALUES("153","1","2019-11-04","","","1","","","Cash","","100","","190998","0");
INSERT INTO vendor_payment VALUES("154","1","2019-11-09","","","1","1","gst-bill","","","230","","191228","0");
INSERT INTO vendor_payment VALUES("155","1","2019-11-09","","","1","1","","Cash","","","0","191228","0");
INSERT INTO vendor_payment VALUES("156","1","2019-11-09","","","1","23","gst-bill","","","230","","191458","0");
INSERT INTO vendor_payment VALUES("157","1","2019-11-09","","","1","23","","Cash","","","0","191458","0");
INSERT INTO vendor_payment VALUES("158","1","2019-11-09","","","1","1","gst-bill","","","12","","191470","0");
INSERT INTO vendor_payment VALUES("159","1","2019-11-09","","","1","1","","Cash","","","0","191470","0");
INSERT INTO vendor_payment VALUES("160","1","2019-11-09","","","1","Am","gst-bill","","","118","","191588","0");
INSERT INTO vendor_payment VALUES("161","1","2019-11-09","","","1","Am","","Cash","","","0","191588","0");
INSERT INTO vendor_payment VALUES("162","1","2019-11-09","","","1","A1","gst-bill","","","354","","191942","0");
INSERT INTO vendor_payment VALUES("163","1","2019-11-09","","","1","A1","","Cash","","","0","191942","0");
INSERT INTO vendor_payment VALUES("164","1","2019-11-11","","","1","12","gst-bill","","","1000","","192942","0");
INSERT INTO vendor_payment VALUES("165","1","2019-11-11","","","1","12","","Cash","","","0","192942","0");
INSERT INTO vendor_payment VALUES("166","1","2019-11-18","","","1","123","gst-bill","","","2100","","195042","0");
INSERT INTO vendor_payment VALUES("167","1","2019-11-18","","","1","123","","Cash","","","2000","193042","0");
INSERT INTO vendor_payment VALUES("168","1","2019-11-18","","","1","","","Cash","","100","","192942","0");
INSERT INTO vendor_payment VALUES("169","1","2019-11-20","","","1","123","gst-bill","","","1000","","193942","0");
INSERT INTO vendor_payment VALUES("170","1","2019-11-20","","","1","123","","Cash","","","0","193942","0");
INSERT INTO vendor_payment VALUES("171","1","2019-11-21","","","7","3214","gst-bill","","","400000","","400000","0");
INSERT INTO vendor_payment VALUES("172","1","2019-11-21","","","7","3214","","Cash","","","200000","200000","0");
INSERT INTO vendor_payment VALUES("173","1","2019-11-23","","","1","12","gst-bill","","","1100","","195042","0");
INSERT INTO vendor_payment VALUES("174","1","2019-11-23","","","1","12","","Cash","","","0","195042","0");
INSERT INTO vendor_payment VALUES("175","1","2019-11-23","","","1","12","gst-bill","","","120","","195162","0");
INSERT INTO vendor_payment VALUES("176","1","2019-11-23","","","1","12","","Cash","","","0","195162","0");
INSERT INTO vendor_payment VALUES("177","1","2019-11-23","","","3","12","gst-bill","","","1330","","1330","0");
INSERT INTO vendor_payment VALUES("178","1","2019-11-23","","","3","12","","Cash","","","0","1330","0");
INSERT INTO vendor_payment VALUES("179","1","2019-11-23","","","1","12","gst-bill","","","2000","","197162","0");
INSERT INTO vendor_payment VALUES("180","1","2019-11-23","","","1","12","","Cash","","","0","197162","0");
INSERT INTO vendor_payment VALUES("181","1","2019-11-23","","","1","12","gst-bill","","","1000","","198162","0");
INSERT INTO vendor_payment VALUES("182","1","2019-11-23","","","1","12","","Cash","","","0","198162","0");
INSERT INTO vendor_payment VALUES("183","1","2019-11-23","","","1","12","gst-bill","","","1100","","199262","0");
INSERT INTO vendor_payment VALUES("184","1","2019-11-23","","","1","12","","Cash","","","0","199262","0");
INSERT INTO vendor_payment VALUES("185","1","2019-11-23","","","1","123","gst-bill","","","2200","","201462","0");
INSERT INTO vendor_payment VALUES("186","1","2019-11-23","","","1","123","","Cash","","","0","201462","0");
INSERT INTO vendor_payment VALUES("187","1","2019-11-23","","","1","123","gst-bill","","","2000","","203462","0");
INSERT INTO vendor_payment VALUES("188","1","2019-11-23","","","1","123","","Cash","","","0","203462","0");
INSERT INTO vendor_payment VALUES("189","1","2019-11-23","","","3","123","gst-bill","","","2000","","3330","0");
INSERT INTO vendor_payment VALUES("190","1","2019-11-23","","","3","123","","Cash","","","0","3330","0");
INSERT INTO vendor_payment VALUES("191","1","2019-11-23","","","3","23","gst-bill","","","110000","","113330","0");
INSERT INTO vendor_payment VALUES("192","1","2019-11-23","","","3","23","","Cash","","","0","113330","0");
INSERT INTO vendor_payment VALUES("193","1","2019-11-23","","","1","12","gst-bill","","","10100","","213562","0");
INSERT INTO vendor_payment VALUES("194","1","2019-11-23","","","1","12","","Cash","","","0","213562","0");
INSERT INTO vendor_payment VALUES("195","1","2019-11-23","","","1","12","gst-bill","","","2000","","215562","0");
INSERT INTO vendor_payment VALUES("196","1","2019-11-23","","","1","12","","Cash","","","0","215562","0");
INSERT INTO vendor_payment VALUES("197","1","2019-11-26","","","8","","","Cash","","100","","-100","0");
INSERT INTO vendor_payment VALUES("198","1","2019-11-28","","","1","123","gst-bill","","","10100","","225662","0");
INSERT INTO vendor_payment VALUES("199","1","2019-11-28","","","1","123","","Cash","","","10000","215662","0");
INSERT INTO vendor_payment VALUES("200","1","2019-11-29","","","1","12","gst-bill","","","118","","215780","0");
INSERT INTO vendor_payment VALUES("201","1","2019-11-29","","","1","12","","Cash","","","0","215780","0");
INSERT INTO vendor_payment VALUES("202","1","2019-12-03","","","1","1232","gst-bill","","","300","","216080","0");
INSERT INTO vendor_payment VALUES("203","1","2019-12-03","","","1","1232","","Cash","","","0","216080","0");
INSERT INTO vendor_payment VALUES("204","1","2019-12-02","","","3","3256","gst-bill","","","1000","","114330","0");
INSERT INTO vendor_payment VALUES("205","1","2019-12-02","","","3","3256","","Cash","","","0","114330","0");
INSERT INTO vendor_payment VALUES("206","1","2019-12-03","","","1","1269","gst-bill","","","100","","216180","0");
INSERT INTO vendor_payment VALUES("207","1","2019-12-03","","","1","1269","","Cash","","","0","216180","0");
INSERT INTO vendor_payment VALUES("208","1","2019-12-02","","","1","1235","gst-bill","","","400","","216580","0");
INSERT INTO vendor_payment VALUES("209","1","2019-12-02","","","1","1235","","Cash","","","0","216580","0");
INSERT INTO vendor_payment VALUES("210","1","2019-12-01","","","1","3699","gst-bill","","","3000","","219580","0");
INSERT INTO vendor_payment VALUES("211","1","2019-12-01","","","1","3699","","Cash","","","0","219580","0");
INSERT INTO vendor_payment VALUES("212","1","2019-12-04","","","1","147","gst-bill","","","1600","","221180","0");
INSERT INTO vendor_payment VALUES("213","1","2019-12-04","","","1","147","","Cash","","","0","221180","0");
INSERT INTO vendor_payment VALUES("214","1","2019-11-30","","","1","25896","gst-bill","","","2500","","223680","0");
INSERT INTO vendor_payment VALUES("215","1","2019-11-30","","","1","25896","","Cash","","","0","223680","0");
INSERT INTO vendor_payment VALUES("216","1","2019-12-03","2019-12-03","1232","1","5","Dr-bill","","","","14","223666","0");
INSERT INTO vendor_payment VALUES("217","1","2019-12-03","2019-12-03","1232","1","5","","Cash","","0","","223666","0");
INSERT INTO vendor_payment VALUES("218","1","2019-12-03","","","9","12","gst-bill","","","12000","","12000","0");
INSERT INTO vendor_payment VALUES("219","1","2019-12-03","","","9","12","","Cash","","","0","12000","0");
INSERT INTO vendor_payment VALUES("220","1","2019-12-03","2019-11-27","1","1","6","Dr-bill","","","","12","223654","0");
INSERT INTO vendor_payment VALUES("221","1","2019-12-03","2019-11-27","1","1","6","","Cash","","0","","223654","0");
INSERT INTO vendor_payment VALUES("222","1","2019-12-03","2019-12-04","1","1","3","Cr-bill","","","115","","223769","0");
INSERT INTO vendor_payment VALUES("223","1","2019-12-03","2019-12-04","1","1","3","","Cash","","","0","223769","0");
INSERT INTO vendor_payment VALUES("224","1","2019-12-03","2019-12-04","1","1","7","Dr-bill","","","","115","223654","0");
INSERT INTO vendor_payment VALUES("225","1","2019-12-03","2019-12-04","1","1","7","","Cash","","0","","223654","0");
INSERT INTO vendor_payment VALUES("226","1","2019-12-03","2019-11-30","12","1","8","Dr-bill","","","","14","223640","0");
INSERT INTO vendor_payment VALUES("227","1","2019-12-03","2019-11-30","12","1","8","","Cash","","0","","223640","0");
INSERT INTO vendor_payment VALUES("228","1","2019-12-03","","","1","9","Dr-bill","","","","","223640","0");
INSERT INTO vendor_payment VALUES("229","1","2019-12-03","","","1","9","","Cash","","","","223640","0");
INSERT INTO vendor_payment VALUES("230","1","2020-01-04","","","1","12345","gst-bill","","","1280","","224920","0");
INSERT INTO vendor_payment VALUES("231","1","2020-01-04","","","1","12345","","Cash","","","1000","223920","0");
INSERT INTO vendor_payment VALUES("232","1","2020-01-04","","","1","132","gst-bill","","","105000","","328920","0");
INSERT INTO vendor_payment VALUES("233","1","2020-01-04","","","1","132","","Cash","","","0","328920","0");
INSERT INTO vendor_payment VALUES("234","1","2020-01-04","","","3","1345","gst-bill","","","200350","","314680","0");
INSERT INTO vendor_payment VALUES("235","1","2020-01-04","","","3","1345","","Cash","","","200000","114680","0");
INSERT INTO vendor_payment VALUES("236","1","2020-01-04","","","7","","","Cash","","100","","199900","0");
INSERT INTO vendor_payment VALUES("237","1","2020-01-06","","","1","123","gst-bill","","","1000","","329920","0");
INSERT INTO vendor_payment VALUES("238","1","2020-01-06","","","1","123","","Cash","","","100","329820","0");
INSERT INTO vendor_payment VALUES("239","1","2020-01-07","","","3","12359","gst-bill","","","1280","","115960","0");
INSERT INTO vendor_payment VALUES("240","1","2020-01-07","","","3","12359","","Cash","","","0","115960","0");





CREATE TABLE `vendors` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `login_acc` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `name` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gstin` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `mobile` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `state` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `address` text,
  `status_delete` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO vendors VALUES("1","1","sachin ","gst12345","7204745662","karnataka","bgm","0");
INSERT INTO vendors VALUES("2","1","sachin66","","","","","1");
INSERT INTO vendors VALUES("3","1","samer","123","720474562","kar","","0");
INSERT INTO vendors VALUES("4","1","amar","","","","","1");
INSERT INTO vendors VALUES("5","1","vendor 1","gst123456","7204745662","karnataka","","0");
INSERT INTO vendors VALUES("6","1","abc","","","","","1");
INSERT INTO vendors VALUES("7","1","vendor 2","gst123456","7204745662","karnataka","","0");
INSERT INTO vendors VALUES("8","1","vendor 3","GST123456","7204745662","Karanataka","","0");
INSERT INTO vendors VALUES("9","1","sachin 3","gst12345","7204745662","karnataka","bgm","0");
INSERT INTO vendors VALUES("10","1","vendor 4","gst123456","720474562","karanataka","bgm12","0");



