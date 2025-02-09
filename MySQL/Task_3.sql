-- Japanese Cities Names

select name from city where countrycode = 'JPN';

-- Weather Observation Station 2

select round(sum(lat_n),2) , round(sum(long_w),2) from station;

-- Weather Observation Station 9

select distinct city from station where substr(city,1,1)NOT IN('a','o','u','i','e');

-- Weather Observation Station 10

select distinct city from station where substr(city,length(city),1)NOT IN('a','o','u','i','e');

-- Weather Observation Station 12

select distinct city from station where substr(city,length(city),1)NOT IN('a','o','u','i','e') and substr(city,1,1)NOT IN('a','o','u','i','e');

-- Average Population

select round(avg(population),0) from city;

--Teams Power Users



-- App Click-through Rate (CTR)


  
