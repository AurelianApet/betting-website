TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `insertPayRecord` AFTER INSERT ON `payrecord` FOR EACH ROW begin 
sql_modes=1342177280
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='gbk_chinese_ci'