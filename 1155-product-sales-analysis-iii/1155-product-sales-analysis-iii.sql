# Write your MySQL query statement below

#select s.product_id, s.year as first_year, min(s.quantity) as quantity, min(s.price) as price  from Sales as s 
 #group by s.product_id having s.year = min(s.year) ;

 select product_id, year as first_year, quantity, price from Sales where (product_id, year) in (select product_id, min(year) from sales group by product_id);