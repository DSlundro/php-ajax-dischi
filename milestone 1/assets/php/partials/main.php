<!doctype html>
<html lang='en'>
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS v5.1.3 -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' 
    integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

    <!-- Font Awesome v6.1.1-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' 
    integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==' 
    crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Axios v0.27.2-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js' 
    integrity='sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==' 
    crossorigin='anonymous' referrerpolicy='no-referrer'></script>

    <!-- Style CSS -->
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>
<body>
<main>
    <div class="container py-5">
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 min-vh-100">
            <?php foreach($database as $db) :?>
                <div class="col d-flex">
                    <div class="my-card py-3">
                        <div class="my-card-container">
                            <img src="<?=$db['poster']?>" alt="">
                            <h5 class="my-card-song py-3"><?=$db['title']?></h5>
                            <p class="my-card-name"><?=$db['author']?></p>
                            <p class="my-card-year"><?=$db['year']?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
</main>
</body>
</html>