<!DOCTYPE html>
<html>
<head>
    <title>Book a Table</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 30px;
            display: flex;
            justify-content: center;
        }
        form {
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 320px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #555;
        }
        select, input[type="date"], input[type="time"] {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 20px;
            border: 1.5px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        select:focus, input[type="date"]:focus, input[type="time"]:focus {
            border-color: #007BFF;
            outline: none;
        }
        button {
            width: 100%;
            background-color: #007BFF;
            color: white;
            padding: 12px 0;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form method="POST" action="../controller/bookingController.php">
        <h2>Book Your Table</h2>
        <label>Booking Type:</label>
        <select name="booking_type" id="typeSelect">
            <option value="full">Full Day</option>
            <option value="half">Half Day</option>
            <option value="custom">Custom</option>
        </select>

        <div id="dateDiv">
            <label>Date:</label>
            <input type="date" name="booking_date">
        </div>

        <div id="timeDiv" style="display:none;">
            <label>Time:</label>
            <input type="time" name="booking_time">
        </div>

        <button type="submit">Book Now</button>
    </form>

    <script>
        $('#typeSelect').on('change', function() {
            var type = $(this).val();
            if (type === 'custom') {
                $('#timeDiv').show();
            } else {
                $('#timeDiv').hide();
            }
        });
    </script>
</body>
</html>
