# Write your MySQL query statement below
#select name, population, area from world as w where area >= 3000000 or population >= 25000000

SELECT name, population, area 
FROM World 
WHERE area >= 3000000
OR population >=25000000