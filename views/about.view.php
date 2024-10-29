<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thisis a sample webpage demonstratingthe useof meta tags in HTML5."></metaname>
    <meta name="keywords" content="HTML5, meta tags, web development">
    <meta name="author"content="Jane Doe">
    <meta name="robots"content="index, follow">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<?php
require 'views/nav.php';
?>
<h1>Hello About</h1>
<div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container">
    <div class="imgContainer">
      <img class="blueDots" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/aw3.svg">
      <img class="mainImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/aw2.svg">
    </div>
    <div class="responsive-container-block textSide">
      <p class="text-blk heading">
        About Us
      </p>
      <p class="text-blk subHeading">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget purus lectus viverra in semper nec pretium mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget purus lectus viverra in semper nec pretium mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget purus lectus viverra in semper nec pretium mus.
      </p>
      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
        <div class="cardImgContainer">
          <img class="cardImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/id2.svg">
        </div>
        <div class="cardText">
          <p class="text-blk cardHeading">
            Value
          </p>
          <p class="text-blk cardSubHeading">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
        <div class="cardImgContainer">
          <img class="cardImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/id2.svg">
        </div>
        <div class="cardText">
          <p class="text-blk cardHeading">
            Value
          </p>
          <p class="text-blk cardSubHeading">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
        <div class="cardImgContainer">
          <img class="cardImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/id2.svg">
        </div>
        <div class="cardText">
          <p class="text-blk cardHeading">
            Value
          </p>
          <p class="text-blk cardSubHeading">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
      <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
        <div class="cardImgContainer">
          <img class="cardImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/id2.svg">
        </div>
        <div class="cardText">
          <p class="text-blk cardHeading">
            Value
          </p>
          <p class="text-blk cardSubHeading">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
      <a>
        <button class="explore">
          Explore our Services
        </button>
      </a>
    </div>
    <img class="redDots" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/cw3.svg">
  </div>
</div>
<?php 
require 'views/footer.php';
?>
</body>
</html>
