-- Type of Triangle

select CASE when A + B <= C OR A + C <= B OR B + C <= A THEN 'Not A Triangle' when A = B AND B = C THEN 'Equilateral'  when A = B OR B = C OR A = C THEN 'Isosceles'  else 'Scalene'  END  from TRIANGLES;

-- The PADS



-- New Companies



-- SQL Project Planning

select START_DATE, a from (select b.START_DATE, MIN(c.END_DATE) as a FROM (select START_DATE from PROJECTS where START_DATE NOT IN (select END_DATE from PROJECTS)) b, (select END_DATE from PROJECTS where END_DATE NOT IN (select START_DATE from PROJECTS)) c where START_DATE < END_DATE GROUP BY b.START_DATE) d ORDER BY DATEDIFF(a, START_DATE), START_DATE;

-- Average Population

select round(avg(population),0)from city;

-- Ollivander's Inventory



-- The Report

select IF(grades.grade>=8, students.name, NULL),grades.grade,students.marks from grades, students where students.marks between grades.min_mark and grades.max_mark order by grades.grade desc, students.name;

-- Symmetric Pairs



-- Weather Observation Station 15

select round(long_w,4) from station where lat_n < 137.2345 order by  lat_n desc limit 1 ;

-- Placements

select s.name from students s join friends F on S.ID = F.ID join packages P1 on S.ID = P1.ID join packages P2 on F.friend_id = P2.ID WHERE P2.salary > P1.salary ORDER BY P2.salary;

-- Interviews

