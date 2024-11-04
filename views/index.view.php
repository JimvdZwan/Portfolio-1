<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thisis a sample webpage demonstratingthe useof meta tags in HTML5."></metaname>
    <meta name="keywords" content="HTML5, meta tags, web development">
    <meta name="author"content="Jim van der Zwan">
    <meta name="robots"content="index, follow">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Portfolio Jim van der Zwan </title>
</head>
<body>
<?php require 'nav.php';
?>

<!---home section--->
<section class="home" id="home">
    <div class="home-text">
        <h1>Portfolio J.D. van der Zwan</h1>
        <a href="#about" class="btn btn-primary">Meer info</a>
    </div>

</section>

<div class="about-section" id="about">
        <div class="inner-container">
            <h1>Bio </h1>
            <p class="text">
                Aangenaam. Mijn naam is Jim van der Zwan. Ik ben 22 en kom uit Hoofddorp. Ik doe nu de AD Software Development in Almere.
                Ik zit in mijn eerste jaar en dit is mijn eerste project. Het is een portfolio met wat informatie over mijzelf, een pagina waar 
                je projecten kan aanmaken en een contactpagina. Hopelijk kunt u alles vinden. Zo niet mag u altijd contact met mij opnemen!
                Nog een fijne dag!
            </p>
            <a href="../cv/CV%202024.pdf" class="btn btn-primary">Download CV </a>
            <div class="skills">
                <span>Web Design</span>
                <span>Software ontwikkelaar</span>
                <span>Coding</span>
            </div>
        </div>
    </div>
<div class="wrapper">
      <div class="card">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="title">HTML & CSS</div>
      </div>
      <div class="card js">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="title">JavaScript</div>
      </div>
      <div class="card php">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="title">PHP</div>
      </div>
    </div>
    <script>
      let options = {
        startAngle: -1.55,
        size: 150,
        value: 0.85,
        fill: {gradient: ['#00008B']}
      }
      $(".circle .bar").circleProgress(options).on('circle-animation-progress',
      function(event, progress, stepValue){
        $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
      });
      $(".js .bar").circleProgress({
        value: 0.40
      });
      $(".php .bar").circleProgress({
        value: 0.60
      });
    </script>
<?php 
require 'footer.php';
?>
</body>
</html>
