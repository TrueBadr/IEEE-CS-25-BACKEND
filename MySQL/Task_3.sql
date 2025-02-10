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

select sender_id, count(sender_id) as message_count from messages where  sent_date >= '2022-08-01' and sent_date < '2022-09-01' group by sender_id order by message_count desc limit 2;

-- App Click-through Rate (CTR)


  
