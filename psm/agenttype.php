<?php

include_once 'dbconn.php'
?>


<?php


$dataPresent = 0;
try 
{
	$sql = 'SELECT * FROM psmoffice.agent_type;';

	$result = $pdo->query($sql);
 	
	
	if($result->rowcount()>0)
	{
	$dataPresent = 1;		
		while($row = $result->fetch())
		{
			$TypeName[] = $row[1];
		}
	}
		else
		{
			$output = "<div id='message'> Agent Type is Empty, You need to add agent type before agents can be added in the system</div>";
			
		}
}

catch (PDOException $e)
{
	$output = 'undable to connect'. $e->getMessage() ;
}

$output = $output;// . $affectedRows;



if($dataPresent == 1)
{

	for($i = 0; $i < sizeof($TypeName); $i++)
	{
	echo $TypeName[$i].'<br>';
	}
}
echo($output);
?>