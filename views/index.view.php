<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thisis a sample webpage demonstratingthe useof meta tags in HTML5."></metaname>
    <meta name="keywords" content="HTML5, meta tags, web development">
    <meta name="author"content="Jane Doe">
    <meta name="robots"content="index, follow">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Flexbox 0 — starting code</title>
</head>
<body>
<?php require 'nav.php';
?>

<!---home section--->
<section class="home" id="home">
    <div class="home-text">
        <h1>Portfolio J.D. van der Zwan <br><span class="input"></span></h1>
        <a href="#about" class="btn">Meer info</a>
    </div>

</section>
<section class="about" id="over ons">
    <div class="about-img">
        <img src="../img/cv_foto.jpeg">
    </div>

    <div class="about-text" id="about">
        <h2>Jim  van der Zwan<br> AD Software Development Windesheim</h2>
        <p>Familie Vermeulen maakt samen met een team van enthousiaste medewerkers Flevosap. Ze zijn bijna iedere dag te vinden in de boomgaarden rondom hun boerderij en bij collega-kwekers die ook hun bijdrage leveren aan Flevosap.<br>
            <br> Het fruit, dat is hun passie. Ze zijn er met hart en ziel aan verknocht. Het maakt niet uit of je hen iets vraagt over appels, sinaasappels, aardbeien, citroenen, kersen, zwarte bessen, peren of cranberry’s: zij weten welk fruit in Flevosap mag, en welke niet. Bij de appels zijn bijvoorbeeld de Elstar, Goudrenet en Jonagold favoriet.</p>
        <a href="../cv/CV%202024.pdf" class="btn">CV </a>
    </div>
</section>
<div class="container">
    <div class="box">
        <div class="shadow"></div>
        <div class="content">
            <div class="percent" data-text="HTML" style="--num: 70">
                <div class="dot"></div>
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70"></circle>
                </svg>
            </div>
            <div class="number">
                <h2>70<span>%</span></h2>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="shadow"></div>
        <div class="content">
            <div class="percent" data-text="CSS" style="--num: 50">
                <div class="dot"></div>
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70"></circle>
                </svg>
            </div>
            <div class="number">
                <h2>50<span>%</span></h2>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="shadow"></div>
        <div class="content">
            <div class="percent" data-text="JS" style="--num: 35">
                <div class="dot"></div>
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70"></circle>
                </svg>
            </div>
            <div class="number">
                <h2>35<span>%</span></h2>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="shadow"></div>
        <div class="content">
            <div class="percent" data-text="PHP" style="--num: 70">
                <div class="dot"></div>
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70"></circle>
                </svg>
            </div>
            <div class="number">
                <h2>70<span>%</span></h2>
            </div>
        </div>
    </div>
</div>
<?php 
require 'views/footer.php';
?>
</body>
</html>
