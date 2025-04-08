//adminid
#	
	1	adminid Primary	int(20)			
	2	name	varchar(20)	
	3	email	varchar(20)		
	4	phno	int(10)			
	5	password	varchar(10)		
// paymentsid
#	
	1	fid Primary	int(10)			
	2	fname	varchar(20)
	3	phno	int(10)			
	4	emailid	varchar(20)
	5	fees	varchar(20)	
	6	cname	varchar(20)		
	7	cardnum	varchar(10)	
	8	expmonth	varchar(20)		
	9	expyear	int(10)			
	10	cvv	int(10)			
	11	total	int(10)			
//roomno
#	
	1	roomno Primary	int(10)			
	2	floors	int(10)			
	3	date	date			
	4	occupunts	varchar(20)	
	5	status	varchar(10)		
//studentid
#	
	1	studentid Primary	int(20)			
	2	firstname	varchar(20)	
	3	lastname	varchar(20)	
	4	email	varchar(20)	
	5	phno	int(10)			
	6	gender	varchar(10)	
	7	address	varchar(20)	
	8	DOB	date			
	9	city	varchar(20)		
	10	pincode	int(10)			
	11	state	varchar(20)	
//usertable
#		
	1	userid Primary	int(20)			
	2	username	varchar(30)
	3	password	varchar(20)
