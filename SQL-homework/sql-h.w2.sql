UPDATE 
  `agents`
SET COMMISSION=COMMISSION-.02

WHERE  
  `agents`.`AGENT_CODE` = (

    SELECT 
      `customer`.`AGENT_CODE`
    FROM
      `customer`
    WHERE 
      `customer`.`PAYMENT_AMT` = (
         SELECT 
           MIN( `customer`.`PAYMENT_AMT` )
         FROM 
           `customer`
       )
  );