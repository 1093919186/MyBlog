create table catelog(
 cateId  int key auto_increment,
 cateName varchar(100) not null unique,
 articleNums int not null default 0
);
insert into catelog(cateName)values('响应式');
insert into catelog(cateName)values('SEO');
insert into catelog(cateName)values('python');
insert into catelog(cateName)values('TensorFlow');

create table admin(
 id int unsigned  key auto_increment,
 userName varchar(100) unique,
 passWord varchar(100),
 imgPath varchar(100),
 indexSign varchar(100),
 email varchar(100) default '未填写',
 sex varchar(32) not null default '未填写',
 wechat varchar(32) not null default '未填写',
 school varchar(50) default '未填写'
);
insert into admin(userName,passWord,imgPath,indexSign)
values
('1093919186','mxq741852963','public/picture/indexIcon/myIcon.jpg','本博客博主用来学习前端、SEO以及机器学习');


create table resume(
 id int unsigned  key auto_increment,
 signature varchar(100) default '未填写',
 saying varchar(200) default '未填写',
 writer varchar(50) default '未填写',
 imgPath varchar(100),
 imgDescribe varchar(100) default '未填写'
);
insert into resume(signature,saying,writer,imgPath,imgDescribe)
values
('年少无识本无错，勇于实践出真知','Do you spend time with your family? Good. Because a man that doesn''t spend time with his family can never be a real man.','The Godfather','public/picture/resumeImg/headerBJ.jpg','2018年5月来自中南大学资生院');

create table diary(
 diaryId int unsigned  key auto_increment,
 title varchar(30),
 content text,
 dateandtime timestamp default current_timestamp
);
insert into diary(title,content)
values
('2018年5月17日','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑');
insert into diary(title,content)
values
('2018年5月16日','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑');


create table articles(
 articleId int key auto_increment,
 title varchar(100),
 writer varchar(30) default '马西骑',
 header text,
 imgPath varchar(100),
 content text,
 cateId  int,
 type tinyint(1) not null,
 origin varchar(30) default '马西骑',
 link varchar(100),
 dateandtime timestamp default current_timestamp,
 hints int default 0,
 foreign key (cateId) references catelog(cateId)
);
insert into articles(title,writer,header,imgPath,content,cateId,type,origin,link)
values
('5 年的时间、300 万美元的营收，这是我们创建 Ghost 的过程中学到的一切','李双','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑'
,'public/picture/noteImg/headerBJ.jpg','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑','3','1','极客学院','https://www.jikexueyuan.com/');

/*
insert into articles(title,writer,header,imgPath,content,cateId,type,origin,link)
values
('这是一个点击量排列测试','李双','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑'
,'public/picture/artImg/headerBJ.jpg','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑','3','1','极客学院','https://www.jikexueyuan.com/');

insert into articles(title,header,imgPath,content,cateId,type)
values
('5 年的时间、300 万美元的营收，这是我们创建 Ghost 的过程中学到的一切','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑'
,'public/picture/artImg/headerBJ.jpg','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑','3','0');
insert into articles(title,header,imgPath,content,cateId,type)
values
('这是一个点击量排列测试','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑'
,'public/picture/artImg/headerBJ.jpg','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑','2','0');
*/


/*
create table reprint(
 articleId int key auto_increment,
 title varchar(100),
 writer varchar(30) default '马西骑',
 header text,
 imgPath varchar(100),
 content text,
 origin varchar(30) default '马西骑',
 dateandtime timestamp default current_timestamp,
 hints int default 0
);
insert into reprint(title,writer,header,imgPath,content,origin)
values
('5 年的时间、300 万美元的营收，这是我们创建 Ghost 的过程中学到的一切','李双','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑'
,'public/picture/artImg/headerBJ.jpg','尚未译完，改天再译 原作者：JOHN O''NOLAN, HANNAH WOLFE 上周是 Ghost 从 Kickstarter 上推广算起的五周年纪念日。 利用这些里程碑来标记重要时刻并反思迄今为止的旅程总是显得很有趣。在上一个四周年纪念日里，我谈到了营收里程碑','极客学院');
*/

