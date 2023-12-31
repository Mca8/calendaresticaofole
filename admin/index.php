<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calendar Estica o Fole</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../style.css">
</head>
<?php
    $strJsonFileContents = file_get_contents(get_template_directory().'/assets/js/samples.json');

    $samples_vals = json_decode($strJsonFileContents, true);
    array_multisort(array_map(function($element) {
    return $element['order'];
    }, $samples_vals), SORT_ASC, $samples_vals);
?>
<body>
  <div class="main-container-wrapper">
    <main>
      <div class="calendar-container">
        <div class="calendar-container__header">
          <div class="d-flex justify-center">
            <img src="../logo.png" class="class-img" alt="Estica o Fole">
          </div>
          <!-- <h2 class="calendar-container__title"></h2> -->
        </div>
      </div>
      <div class="events-container">
        <span class="events__title">Agosto</span>
        <ul class="events__list">
          <li class="events__item">
            <div class="events__item--left">
              <span class="events__name">01 - Agosto</span>
              <span class="events__date">Cortinhas</span>
            </div>
            <span class="events__tag events__tag--highlighted">Hora ainda não definida</span>
          </li>
          <li class="events__item">
            <div class="events__item--left">
              <span class="events__name">15 - Agosto</span>
              <span class="events__date">Vreia de Jales</span>
            </div>
            <span class="events__tag events__tag--highlighted">Hora ainda não definida</span>
          </li>
          
        </ul>
      </div>
    </main>
  </div>
</body>
</html>