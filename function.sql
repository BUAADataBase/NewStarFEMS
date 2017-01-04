
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
    select count(uid_student) into selectcoursestudentnum from (select distinct uid_student from selectcourse, user where uid_student = user.uid and user.identify = 0) temp;
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
    select count(uid_teacher) into teachcourseteachernum from (select distinct uid_teacher from selectcourse, user where uid_teacher = user.uid and user.identify = 1) temp;
    select calNumberofTeacher() into allteachernum;
    return teachcourseteachernum/allteachernum;
    end;
//
DELIMITER ;

select teacherTeachCoursePercent();


-- 计算一个学生上课的消费总额
drop function if exists calTotalCost;
DELIMITER //
create function calTotalCost(studentid int)
    returns double precision
    begin
    declare singleperiod int;
    declare singleprice double precision;
    declare sum double precision;
    declare temp int;
    declare done int default 0;
    declare rs cursor for select period, price from selectcourse where uid_student = studentid;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done=1;
    select count(*) into temp from selectcourse where uid_student = studentid;
    if temp <= 0 then
        set sum = 0;
    else
        open rs;
        set sum = 0;
        fetch rs into singleperiod, singleprice;
        repeat
            set sum = sum + singleprice * singleperiod;
            fetch rs into singleperiod, singleprice;
        until done end repeat;
        close rs;
    end if;
    return sum;
    end;
//
DELIMITER ;

select calTotalCost(1);



-- 一个老师上课的收入总额
drop function if exists calTotalIncome;
DELIMITER //
create function calTotalIncome(teacherid int)
    returns double precision
    begin
    declare singleperiod int;
    declare singleprice double precision;
    declare sum double precision;
    declare temp int;
    declare done int default 0;
    declare rs cursor for select period, price from selectcourse where uid_teacher = teacherid;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done=1;
    select count(*) into temp from selectcourse where uid_teacher = teacherid;
    if temp <= 0 then
        set sum = 0;
    else
        open rs;
        set sum = 0;
        fetch rs into singleperiod, singleprice;
        repeat
            set sum = sum + singleprice * singleperiod;
            fetch rs into singleperiod, singleprice;
        until done end repeat;
        close rs;
    end if;
    return sum;
    end;
//
DELIMITER ;

select calTotalIncome(1);


-- 删除一个用户及其相关所有信息
drop procedure if exists deleteUser;
DELIMITER //
create procedure deleteUser(in userid int)
    begin
        delete from profile where uid = userid;
        delete from selectcourse where uid_student = userid or uid_teacher = userid;
        delete from teachcourse where uid = userid;
        delete from userblog where uid = userid;
        delete from user where uid = userid;
    end
//
DELIMITER ;

call deleteUser(5);


-- 计算学生选num个科目学习的人数
drop function if exists getStudentNum;
DELIMITER //
create function getStudentNum(num int)
    returns int
    begin
    declare result int default 0;
    call getstudentNum(num, result);
    return result;
    end;
//
DELIMITER ;

select getStudentNum(1);



-- 计算学生选num个科目学习的人数
drop procedure if exists getstudentNum;
DELIMITER //
create procedure getstudentNum(in num int, out result int)
    begin
        declare userid int;
        declare tempnum int;
        declare done int default 0;
        declare delta int default 0;
        declare rs cursor for select uid from user where identify = 0;
        DECLARE CONTINUE HANDLER FOR NOT FOUND SET done=1;
        open rs;
        set result = 0;
        fetch rs into userid;
        repeat
            select count(*) into tempnum from (select distinct uid_student, cid from selectcourse where uid_student = userid) temp;
            if tempnum = num then
                set result = result + 1;
            end if;
            fetch rs into userid;
        until done end repeat;
        close rs;
    end
//
DELIMITER ;


-- 计算老师教num个科目的人数
drop function if exists getTeacherNum;
DELIMITER //
create function getTeacherNum(num int)
    returns int
    begin
    declare result int default 0;
    call getteacherNum(num, result);
    return result;
    end;
//
DELIMITER ;

select getTeacherNum(1);


-- 计算老师教num个科目的人数
drop procedure if exists getteacherNum;
DELIMITER //
create procedure getteacherNum(in num int, out result int)
    begin
        declare userid int;
        declare tempnum int;
        declare done int default 0;
        declare rs cursor for select uid from user where identify = 1;
        DECLARE CONTINUE HANDLER FOR NOT FOUND SET done=1;
        open rs;
        set result = 0;
        fetch rs into userid;
        repeat
            select count(*) into tempnum from (select distinct uid_teacher, cid from selectcourse where uid_teacher = userid) temp;
            if tempnum = num then
                set result = result + 1;
            end if;
            fetch rs into userid;
        until done end repeat;
        close rs;
    end
//
DELIMITER ;














