# Write your MySQL query statement below
-- SELECT s.student_id   , s.student_name , e.subject_name    FROM Examinations as e JOIN Students as s ON e.student_id = s.student_id  ORDER BY e.student_id, e.subject_name

SELECT s.student_id, s.student_name, sb.subject_name, IFNULL( COUNT(e.subject_name), 0) as attended_exams FROM Students AS s CROSS JOIN Subjects AS sb  LEFT JOIN Examinations AS e ON s.student_id = e.student_id AND sb.subject_name = e.subject_name GROUP BY s.student_id, s.student_name, sb.subject_name ORDER BY S.student_id, sb.subject_name;