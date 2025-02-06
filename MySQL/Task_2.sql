--  Revising the Select Query I

select * from city  where POPULATION > 100000 and COUNTRYCODE = 'USA' ; 

--  Revising the Select Query II

select name from city where POPULATION > 120000 and COUNTRYCODE = 'USA';

-- Japanese Cities' Attributes

select * from city where countrycode = 'JPN';

-- Employee Names

select name from employee ORDER BY name ;

-- Employee Salaries

select name from employee where salary > 2000 and months < 10;

-- Higher Than 75 Marks

select name from students where marks > 75 ORDER BY right(name,3) , ID ASC ;

-- Unfinished Parts

SELECT part , assembly_step FROM parts_assembly where finish_date is NULL;
