
-- 计算注册总人数
drop function if exists calNumberofRegistered;
DELIMITER //
create function calNumberofRegistered()
    returns int
    begin
    declare NumberofRegistered int;
    select count(*) into NumberofRegistered from user;
    return NumberofRegistered;
    end;
//
DELIMITER ;

select calNumberofRegistered();


-- 计算学生总人数
drop function if exists calNumberofStudent;
DELIMITER //
create function calNumberofStudent()
    returns int
    begin
    declare NumberofStudent int;
    select count(*) into NumberofStudent from user where identify = 0;
    return NumberofStudent;
    end;
//
DELIMITER ;

select calNumberofStudent();


-- 计算老师总人数
drop function if exists calNumberofTeacher;
DELIMITER //
create function calNumberofTeacher()
    returns int
    begin
    declare NumberofTeacher int;
    select count(*) into NumberofTeacher from user where identify = 1;
    return NumberofTeacher;
    end;
//
DELIMITER ;

select calNumberofTeacher();


-- 计算学生总选课个数
drop function if exists sumofStudentchooseCourse;
DELIMITER //
create function sumofStudentchooseCourse(studentid int)
    returns int
    begin
    declare sum int;
    select count(*) into sum from selectcourse where uid_student = studentid;
    return sum;
    end;
//
DELIMITER ;

select sumofStudentchooseCourse(1);


-- 计算老师总代课个数
drop function if exists sumofTeacherteachCourse;
DELIMITER //
create function sumofTeacherteachCourse(teacherid int)
    returns int
    begin
    declare sum int;
    select count(*) into sum from selectcourse where uid_teacher = teacherid;
    return sum;
    end;
//
DELIMITER ;

select sumofTeacherteachCourse(1);


-- 计算学生平均每人选课个数
drop function if exists avgofStudentchooseCourse;
DELIMITER //
create function avgofStudentchooseCourse()
    returns double precision
    begin
    declare sumselect int;
    declare sumstudent int;
    declare avg double precision;
    select count(*) into sumselect from selectcourse;
    select calNumberofStudent() into sumstudent;
    return sumselect/sumstudent;
    end;
//
DELIMITER ;

select avgofStudentchooseCourse();


-- 计算老师平均每人代课个数
drop function if exists avgofTeacherteachCourse;
DELIMITER //
create function avgofTeacherteachCourse()
    returns double precision
    begin
    declare sumteach int;
    declare sumteacher int;
    declare avg double precision;
    select count(*) into sumteach from selectcourse;
    select calNumberofTeacher() into sumteacher;
    return sumteach/sumteacher;
    end;
//
DELIMITER ;

select avgofTeacherteachCourse();


-- 计算选过课的学生占总学生数量的百分比
drop function if exists studentSelectCoursePercent;
DELIMITER //
create function studentSelectCoursePercent()
    returns double precision
    begin
    declare selectcoursestudentnum int;
    declare allstudentnum int;
    declare percent double precision;
    select count(uid_student) into selectcoursestudentnum from selectcourse;
    select calNumberofStudent() into allstudentnum;
    return selectcoursestudentnum/allstudentnum;
    end;
//
DELIMITER ;

select studentSelectCoursePercent();


-- 计算代过课的老师占总老师数量的百分比
drop function if exists teacherTeachCoursePercent;
DELIMITER //
create function teacherTeachCoursePercent()
    returns double precision
    begin
    declare teachcourseteachernum int;
    declare allteachernum int;
    declare percent double precision;
    select count(uid_teacher) into teachcourseteachernum from selectcourse;
    select calNumberofTeacher() into allteachernum;
    return teachcourseteachernum/allteachernum;
    end;
//
DELIMITER ;

select teacherTeachCoursePercent();