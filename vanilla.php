<html>
<head>
    <title>Electricity Calculator</title>
    <link rel="stylesheet" href="link.css">
</head>
<body>
    <div class="container">
        <h1>Electricity Calculator</h1>
        <form method="post">
            <div class="form-group">
                <label for="voltage">Voltage (V):</label>
                <input type="number" class="form-control" id="voltage" name="voltage" required>
            </div>
            <div class="form-group">
                <label for="current">Current (A):</label>
                <input type="number" class="form-control" id="current" name="current" required>
            </div>
            <div class="form-group">
                <label for="rate">Current Rate:</label>
                <input type="number" class="form-control" id="rate" name="rate" required>
            </div>
            <button type="submit" class="btn btn-primary">Total</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $voltage = $_POST['voltage'];
            $current = $_POST['current'];
            $rate = $_POST['rate'];

            $power = $voltage * $current;
            $energy = ($power / 1000) * 1; // Assuming 1 hour
            $totalCharge = $energy * ($rate / 100);

            echo '<h2>Results:</h2>';
            echo '<p>Power: ' . $power . ' Wh</p>';
            echo '<p>Energy: ' . $energy . ' kWh</p>';
            echo '<p>Total Charge: $' . $totalCharge . '</p>';
        }
        ?>
    </div>
</body>
</html>