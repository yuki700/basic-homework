/*
*  Author: YUKI
*  Purpose: Get the columns 'working_area', average 'commission' and number of agents for each group of 'working_area' from the 'agents' table.
*/

SELECT 
  working_area,
  AVG(commission) AS average_commision,
  COUNT(agent_name) AS count_agent_name
FROM 
  agents
GROUP BY 
  1
HAVING 
  COUNT(agent_name)<3 --  do not group areas with 3 or more people.
ORDER BY 
  2,3 DESC;