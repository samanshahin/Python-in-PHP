<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Features · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">

    

    

<link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="features.css" rel="stylesheet">
  </head>
  <body>
   

<main>

  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Using Python in PHP</h2>

<span class="mb-3 mb-md-0 text-body-secondary">developped by samanshahinpour@gmail.com, <a href="https://github.com/samanshahin">git.hub/samanshahin</a></span>
<span class="mb-3 mb-md-0 text-body-secondary">There's three ways of integrating php with python: 1. popen() function, 2. shell_exec() function and 3. escapeshellcmd() with shell_exec() function</span>

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <h3 class="fs-2">Example 01</h3>
        <p>This example includes sample hello world to show how to use popen() function.</p>
		<div>
			<?php 
				  $command = "python hello.py 2>&1";
				  $pid = popen($command, "r");
				  while (!feof($pid)) {
					  echo Fread($pid, 256);
				  }
				  pclose($pid);
			?>
	  	</div>
      </div>

      <div class="feature col">
        <h3 class="fs-2">Example 02</h3>
        <p>TThis example uses web scraping techniques to get data from a website and show it here.</p>
		<div>
			<?php 
				  $command = "python scraping.py 2>&1";
				  $pid = popen($command, "r");
				  while (!feof($pid)) {
					  echo Fread($pid, 256);
				  }
				  pclose($pid);
			?>
	  	</div>
      </div>

      <div class="feature col">
        <h3 class="fs-2">Example 03</h3>
        <p> We used escapeshellcmd() and shell_exec() functions</p>
		<div>
			<?php 
				  $command = escapeshellcmd('python pdflib.py');
				  $output = shell_exec($command);
				  echo $output;
			  ?>
        <p></p>
        <img src="./0Im1.jpg" alt="The Real Python!" width="300" height="200">

	  	</div>
      </div>


    </div>
  </div>


</main>

    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  </body>
</html>


