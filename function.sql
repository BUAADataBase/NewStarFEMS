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