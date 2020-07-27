<form action="save-data.php" method="post">

<textarea name="data" cols="80" rows="30"></textarea>


<input type="submit"/>

</form>



<?php 
	
	
$content = $_POST; 
	

file_put_contents('data.html', $content);
	
	
?>