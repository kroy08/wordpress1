<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <div class="inner">
            <div class="branding">
              <a href="#"> BLOG</a>
            </div>
            <nav>
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
          <button id="themeToggle"><i class="fas fa-sun"></i></button>
        </div>
      </div>
    </header>