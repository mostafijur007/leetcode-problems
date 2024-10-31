# Write your MySQL query statement below
-- SELECT id, movie, description, rating FROM Cinema WHERE description != 'boring' AND mod(id, 2) <> 0  ORDER BY rating DESC;

SELECT id, movie, description, rating FROM Cinema WHERE id%2 = 1  AND description != 'boring'  ORDER BY rating DESC;