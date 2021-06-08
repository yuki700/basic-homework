CREATE TABLE new_agents AS

    SELECT agents.* FROM agents, customer
    
    WHERE agents.WORKING_AREA = 'London' AND customer.CUST_COUNTRY = 'UK';

ALTER TABLE new_agents ADD PRIMARY KEY(AGENT_CODE);
