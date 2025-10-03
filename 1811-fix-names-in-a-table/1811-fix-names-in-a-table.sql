# Write your MySQL query statement below
-- SELECT user_id,
--        CONCAT(UPPER(LEFT(name,1)), LOWER(SUBSTRING(name, 2))) AS name
-- FROM Users
-- ORDER BY user_id;

select user_id , concat( ucase(left(name,1)), lcase(substr(name,2)) ) as name
from Users
order by user_id , name