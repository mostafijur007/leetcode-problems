# Write your MySQL query statement below

#select distinct v1.author_id as id from views as v1 where v1.author_id = v1.viewer_id order by id asc 

# select * from views as v1 group by v1.author_id, v1.viewer_id having count(v1.viewer_id) > 1

SELECT DISTINCT author_id as id
FROM Views
WHERE author_id = viewer_id ORDER BY id