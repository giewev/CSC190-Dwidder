use dwidder;

drop table if exists posts;
create table posts
	(id int,
	 user varchar(256),
	 comment varchar(1024),
	 timestamp datetime,
	 img_id int);


