CREATE TABLE student(
id serial,
priamry key(id),
name varchar(60), 
id_no varchar(9)
);

create table employee(
id serial,
primary key(id),
name varchar(60),
id_no varchar(9),
dept char(3),
college char(3),
is_teacher boolean
);

create table evaluation(
id serial,
primary key(id),
course varchar(20),
section varchar(20),
year smallint, 
term char(1),
teacher int,
foreign key(teacher) references employee(id),
staff int,
foreign key(staff) references employee(id),
time_recorded timestamp/date,
total_evaluators smallint,
item1  smallint,
item2  smallint,
item3  smallint,
item4  smallint,
item5  smallint,
item6  smallint,
item7  smallint,
item8  smallint,
item9  smallint,
item10 smallint,
item11 smallint,
item12 smallint,
item13 smallint,
item14 smallint,
item15 smallint,
item16 smallint,
item17 smallint,
item18 smallint,
item19 smallint,
item20 smallint,
comments xml
)

create table class(
enrollment_id int,
foreign key(enrollment_id) references enrollment(id),
student_id int,
foreign key(student_id) references student(id),
primary key(enrollment_id,student_id),
time_evaluated timestamp/date
)