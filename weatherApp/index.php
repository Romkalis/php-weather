<?php
if (isset($_POST["city"])) {
    $cityselect = $_POST["cityselect"];

    //  определяем, заполнено ли после через селект, если да - подставляем значение
    if ($cityselect != "false") {
        $city = $cityselect;
    } else {
        $city = $_POST["city"];
    }
    

    $api_data = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&appid=5ffc5f7deb72b209149529834f07ea65&units=metric');
    $forecastArray = json_decode($api_data, false);

    print_r($forecastArray);

    $weather = $forecastArray->weather[0]->description;
    $temp = $forecastArray->main->temp;
    $humidity = $forecastArray->main->humidity;
    $windSpeed = $forecastArray->wind->speed;

    if ($city && $weather && $humidity && $temp) {

        $output = <<<HTML

        <div class="alert alert-success mt-3" role="alert">
            <p><b>Погода в {$city}:</b> {$weather}</p>
            <p><b>Temperature:</b> {$temp}</p>
            <p><b>Humidity:</b> {$humidity}</p>
            <p><b>Wind Speed:</b>{$windSpeed}</p>
        </div>
        
        HTML;
    } else {
        $output = <<<HTML

        <div class="alert alert-danger mt-3" role="alert">
            <p><b>The city is nopt found! You can try to choose or enter other city.</b></p>
        </div>
        
        HTML;
    }


} else {
    $output = <<<HTML

        <div class="alert alert-danger mt-3" role="alert">
            <p><b>Enter the city</b></p>
        </div>
        
        HTML;
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


        <form method="post">
            <div class="mb-3">
                <label for="city" class="form-label">Enter name of the city:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter your City">
                <select name="cityselect">
                    <option value="false">Choose City</option>

                    <option value="Moscow">Moscow</option>
                    <option value="Cairo">Cairo</option>
                    <option value="Yekaterinburg">Yekaterinburg</option>
                    <option value="New_York">New York</option>
                    <option value="Kazan">Kazan</option>
                    <option value="Podgorica">Podgorica</option>

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Yep, check the weather!</button>
        </form>
    </div>

    <?php
    echo $output;
    ?>
    </div>
</body>

</html>