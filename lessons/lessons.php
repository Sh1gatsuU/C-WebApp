<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
           content="width=devise-width, user-scale=no, initial-scale=1.0,
           maximum-scale=1.0, minimum-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <link  rel="stylesheet" href="../css/style.css">"></link>
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
           <title>Lessons</title>
           
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img src="../img/hed.png" alt="Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-lg active" aria-current="page" href="../index.php">Головна</a>
                    </li>
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link nav-link-lg" href="../training.php">Тренування</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-lg" href="lessons.php">Уроки</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-lg" href="../about.php">Про нас</a>
                    </li>
                </ul>
               
            </div>
        </div>
    </nav>
</header>
    
    <main>
    <div class="pos">
        <h1>.</h1>
    </div>
    <div class="container">
        <div class="lessons">
            <div class="lesson-section">
                <div class="section-title">Основи C#</div>
                <ul class="lesson-list">
                    <li><a href="lesson1.php">1. </a></li>
                    <li><a href="lesson2.php">2. </a></li>
                    <li><a href="lesson3.php">3. (Statements)</a></li>
                    <li><a href="lesson4.php">4. </a></li>
                    <li><a href="lesson5.php">5.  (синтаксиса)</a></li>
                </ul>
            </div>
        </div>
        <div class="info-block">
            <h2>Інформація</h2>
            <p>C# – Мова програмування, створений компанією Microsoft. Він стабільно входить у Top 10 найпопулярніших мов. На ньому можна розробляти веб-сервери, настільні та мобільні додатки і навіть ігри. Вивчати C# ми будемо з нуля, з самих азів. Перший модуль – плацдарм для написання осмислених програм. В ньому ми розберемо, як написати свій перший код на C#. Розкажемо, що таке коментарі і навіщо вони потрібні. На прикладі перевірки ваших рішень розглянемо, що таке тестування і як читати вивід тестів.</p>
        </div>
    </div>
   
    <?php require "../blocks/footer.php" ?>
    </main>
   
</body>
</html>