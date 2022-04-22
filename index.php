<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


    <?php 
        /* importo "data" contenente l'array */
        include __DIR__ . '/server/data.php';
    ?>
    <div id="app" class="my-container d-flex my-5">
        <div class="card-container d-flex" v-for='element in albums' >
            <div class="img-container">
                <img :src="element.url" alt="">
            </div>
            <div class="content-container d-flex justify-content-center align-items-center flex-column text-center">
                <h1>{{element.title}}</h1>
                <p>{{element.author}}</p>
                <p>{{element.year}}</p>
            </div>

        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="script.js"></script>
</body>
</html>