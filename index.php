<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
           content="width=devise-width, user-scale=no, initial-scale=1.0,
           maximum-scale=1.0, minimum-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <link  rel="stylesheet" href="css/style.css">"></link>
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
           <title>TestApp</title>
           
</head>
<body>
    <?php require "blocks/header.php" ?>
    
    <main>
    <div class="pos">
        <h1>.</h1>

    </div>
    <div class="container py-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Вивчи C#</h1>
            <p class="col-md-8 fs-4">Давно хотів спробувати програмування? Тоді не чекай і розпочни прямо зараз,безліч уроків з мови C# прямо у твоєму браузері. Не зволікай і тисни кнопку!</p>
            <button class="btn btn-primary btn-lg" type="button" id="redirectButton">Спробувати</button>
            <img src="img/logo2.png" alt="" width="10%" class="logoimg">     
        </div> 
        </div>
       
    </div>
    
    <?php require "blocks/footer.php" ?>
    
    </main>
    <script>
        document.getElementById('redirectButton').addEventListener('click', function() {
            window.location.href = 'lessons/lessons.php';
        });
    </script>
</body>
</html>