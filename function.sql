create function calNumberofRegistered()
    returns int
    as
    begin
    declare @NumberofRegistered int
    select @NumberofRegistered = count(*) from user
    return @NumberofRegistered
    end;