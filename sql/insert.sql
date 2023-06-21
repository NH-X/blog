use Blog;

insert into admin_user (
	username ,
	`password`
) values(
	'admin',
	'123456'
);

insert into blog_data ( 
	blog_title,
	blog_date ,
	blog_type ,
	blog_weather ,
	blog_pic ,
	blog_centent 
)values(
	'Java程序设计基础教程',
	'2023-06-21',
	'教育',
	'雨',
	'Java图标',
	'HashMap使用红黑树（B-树)存储数据，一个key可对应多个value，当某个key对应的value数量达到7个及以内时，采用的数据结构时链表，当value数量达到7个以上时，采用的数据结构为红黑树（B-树）。'
)