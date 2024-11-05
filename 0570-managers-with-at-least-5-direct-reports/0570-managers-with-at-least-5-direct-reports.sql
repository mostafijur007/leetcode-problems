# Write your MySQL query statement below

SELECT E1.name FROM employee AS E1 JOIN employee AS E2 ON E1.id = E2.managerId GROUP BY E2.managerId HAVING COUNT(E2.managerId) >= 5;