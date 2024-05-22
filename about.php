<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
           content="width=devise-width, user-scale=no, initial-scale=1.0,
           maximum-scale=1.0, minimum-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <link rel="stylesheet" href="css/about.css">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
           <title>About US</title>
           
</head>
<body>
    <?php require "blocks/header.php" ?>
    
    <main>
    <div class="container about-section">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h3 class="about-title">Про проект</h3>
                        <p class="about-text">Це простий веб-додаток для вивчення мови C# та онлайн тренувань. Я буду радий, якщо ви залишите <strong>feedback</strong> на адресу <a href="mailto:darksider723@gmail.com">darksider723@gmail.com</a>.</p>
                        <button class="feedback-button mt-4" id="feedbackButton">Залишити Feedback</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php require "blocks/footer.php" ?>
    
    </main>
    <script>
        document.getElementById('feedbackButton').addEventListener('click', function() {
            window.location.href = 'mailto:darksider723@gmail.com';
        });

        // Додатковий JavaScript для анімації зміни тексту при наведенні
        const feedbackButton = document.getElementById('feedbackButton');
        feedbackButton.addEventListener('mouseover', function() {
            feedbackButton.textContent = 'Дякую';
            feedbackButton.style.backgroundColor = '#4e7cff';
            feedbackButton.style.color = '#fff';
        });

        feedbackButton.addEventListener('mouseout', function() {
            feedbackButton.textContent = 'Залишити Feedback';
            feedbackButton.style.backgroundColor = '#4e7cff';
            feedbackButton.style.color = '#fff';
        });
    </script>
    
</body>
</html>