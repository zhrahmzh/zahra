<html>
<head>
    <title>Electricity Calculator</title>
    <link rel="stylesheet" href="link.css">
</head>
<body>
	<center>
    <div class="container">
        <h1>Electricity Calculator</h1>
        <form method="post">
            <div class="form-group">
                <label for="voltage">Voltage (V):</label>
                <input type="decimals" class="form-control" id="voltage" name="voltage" required>
            </div><br>
            <div class="form-group">
                <label for="current">Current (A):</label>
                <input type="decimals" class="form-control" id="current" name="current" required>
            </div><br>
            <div class="form-group">
                <label for="rate">Current Rate:</label>
                <input type="decimals" class="form-control" id="rate" name="rate" required>
            </div><br>
            <button type="submit" class="btn btn-primary">Total</button>
        </form>
	</center>

	<?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $voltage = $_POST['voltage'];
            $current = $_POST['current'];
            $rate = $_POST['rate'];
			
			echo '<h2>Results:</h2>';
            echo '<p>Power: ' . $voltage * $current/1000 . ' Wh</p>';
            echo '<p>Rate: ' . $rate . ' RM</p>';
			echo '</tr>';
			
			
			function calcElc($voltage, $current, $rate){
				for ($hour=1; $hour <= 24; $hour++){
					$power = $voltage * $current;
					$energy = ($power * $hour)/1000;
					$total = ($energy * $rate )/100;
			   
			 echo '<table border = 1, style=width:50% >';
				echo '<tr>';
						echo '<td>Hour:'.$hour.'</td>';
						echo '<td>Energy: '.$energy.' </td>';
						echo '<td>Total:RM '.number_format($total, 2).'</td>';
				echo '</tr>';
			echo '</table>'; 
					} 
			  }
					$voltage = $voltage;  
					$current = $current;
					$rate = $rate; 
					
			 calcElc($voltage, $current, $rate);
			
		}
        ?>

 </div>
</body>
</html>		