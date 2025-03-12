# Write your MySQL query statement below

#select * from Customer as c join Product as p on c.product_key = p.product_key;

select customer_id from Customer group by customer_id having count(distinct product_key) = (select count(product_key) from Product);