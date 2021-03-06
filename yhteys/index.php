<!DOCTYPE html>
<html lang="fi">

<head>

  <script>

    if(window.location.protocol != 'https:') {
      location.href = location.href.replace("http://", "https://");
    }

  </script>

    <title>Yhteys - Jaetaan.net</title>

    <link rel='stylesheet' type='text/css' href='../muotoilu.css'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta charset='UTF-8'>
    <meta name='keywords' content='yhteys, yhteystiedot, ota yhteyttä, Jaetaan.net'>
    <meta name='description' content='Kaikissa Jaetaan.nettiin liittyvissä asioissa voit ottaa meihin 
                                      yhteyttä tältä sivulta löytyvällä lomakkeella.'>

    <meta property="og:title" content="Yhteys" />
    <meta property="og:description" content="Kaikissa Jaetaan.nettiin liittyvissä asioissa voit ottaa meihin 
                                             yhteyttä tältä sivulta löytyvällä lomakkeella." />
    <meta property="og:image" content="http://jaetaan.net/kuvat/kaivopuisto-helsinki.jpg" />
    <meta property="og:url" content="http://jaetaan.net/yhteys/" />
    <meta property="og:type" content="website" /> 
    <meta property="fb:app_id" content="your fb app id here" /> 
    <meta property="og:site_name" content="Jaetaan.net" /> 
    <meta property="og:locale" content="fi_FI">

    <script src='../toiminnallisuuksia.js'></script>

</head>


<body>


        <?php 
            include '../includes/header.php';
            include '../includes/nav_bar_public.php';
            include '../includes/yhteys.php';
            include '../includes/footer.php';
        ?>


</body>
</html>
