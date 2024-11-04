<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact pagina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/contact.css" />
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  <?php
  require 'nav.php';
  ?>
    <div class="container">
      <div class="contact_data2">
        <ul>
          <li>
            <i class="fa-solid fa-location-dot"></i>
            <strong>Locatie:</strong>
            <p>Stadhuisstraat 18, 1315 HC Almere</p>
          </li>
          <li>
            <i class="fa-solid fa-envelope"></i>
            <strong>Email:</strong>
            <p>jimmies22@icloud.com</p>
          </li>
          <li>
            <i class="fa-solid fa-envelope"></i>
            <strong>Telefoon:</strong>
            <p>+31 637296515</p>
          </li>
        </ul>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.9335460957022!2d5.216655776588795!3d52.37162497202276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c616e1a8f6257f%3A0xe83cbea06ef1ed23!2sStadhuisstraat%2018%2C%201315%20HA%20Almere!5e0!3m2!1snl!2snl!4v1730563720646!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="contact_data">
        <h2>Contact</h2>
        <form action="#">
          <label for="">Naam</label>
          <input type="text" />
          <label for="">Email</label>
          <input type="email" />
          <label for="">Onderwerp</label>
          <input type="text" />
          <label for="">Bericht</label>
          <textarea name="" id="" cols="30" rows="05"></textarea>
          <button>Verzenden</button>
        </form>
      </div>
    </div>
  
  </body>
  <?php require 'footer.php'; ?>
</html>
