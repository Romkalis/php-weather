<?php
    if(isset($_GET["city"])) {
        $api_data = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=Podgorica&appid=5ffc5f7deb72b209149529834f07ea65&units=metric');
        $forecastArray = json_decode($api_data);
        print_r($forecastArray);
    }
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/styles.css">
    <title>WeatherApp Demo</title>
</head>

<body>
    <div class="bg-pic"></div>

    <div class="container">
        <h1 class="h2">Hmm...What's about weather?</h1>


        <form method="get">
            <div class="mb-3">
                <label for="city" class="form-label">Enter name of your city:</label>
                <input type="text" class="form-control" id="city" name="city" placteholder="Enter your City"\>
            </div>
            <button type="submit" class="btn btn-primary">Yep, check the weather!</button>
        </form>
    </div>
</body>

</html>