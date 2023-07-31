TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `insertPayRecord` AFTER INSERT ON `payrecord` FOR EACH ROW begin \n	insert into ssc_member_recharge(uid,rechargeid,username,amount,rechargeAmount,coin,fcoin,actionUid,mBankID,actionIP,actionTime,rechargeTime,state,isDelete,info)\n                values(NEW.payUser,NEW.payUser,(select username from ssc_members where uid=NEW.payUser limit 0,1),NEW.payMoney,NEW.payMoney,NEW.oldMoney,0,0,0,\'1903794074\',UNIX_TIMESTAMP(NEW.paytime),0,9,0,\'用户充值\');\n               update ssc_member_recharge set state=9,rechargeTime=UNIX_TIMESTAMP(),mBankId=127 where rechargeid=NEW.payUser;\n               update ssc_member_recharge set isDelete=1 where username=(select username from ssc_members where uid=NEW.payUser limit 0,1) and rechargeTime=0;		\nend'
sql_modes=1342177280
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='gbk_chinese_ci'
