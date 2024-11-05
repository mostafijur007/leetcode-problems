# Write your MySQL query statement below

-- SELECT distinct E1.name FROM employee AS E1 JOIN employee AS E2 ON E1.id = E2.managerId and count(E1.managerId) > 5

select name from Employee where id in (select managerId from Employee group by managerId having count(managerId)>4);