<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <title>NicePage</title>
</head>
<body>
<header>
    <div class="header-logo">
        <img src="logo-nicepage.png">
    </div>
    <nav class="navigation">
        <ul>
            <li><a href="#desktop"><i class="icon-desktop"></i> Desktop</a></li>
            <li><a href="#laptop"><i class="icon-laptop"></i> Laptop</a></li>
            <li><a href="#tablet"><i class="icon-tablet"></i> Tablet</a></li>
            <li><a href="#mobile"><i class="icon-mobile"></i> Mobile</a></li>
        </ul>
    </nav>
</header>
<div class="bg">
    <div class="text">
        <p>Мы готовы поделиться советами и опытом</p>
    </div>
    <div class="container">
           <div class="contact1">
       <a href="icon1.png"></a>
       <p>Инвестиции</p>
       <h5>Sample text. Click to select the text box. Click again or double click to start editing the text.</h5>
    </div>
    <div class="contact-2">
       <a href="icon2.png"></a>
       <p>Финансовое планирование</p>
       <h5>Sample text. Click to select the text box. Click again or double click to start editing the text.</h5>
    </div>
    <div class="contact3">
        <a href="icon3.png"></a>
         <p>Помощь по долгам</p>
        <h5>Sample text. Click to select the text box. Click again or double click to start editing the text.</h5>
    </div>
    </div>
</div>
<section class="promo">
    <div class="container">
        <h1>Мы один из крупнейших и наиболее авторитетных застройщиков</h1>
        <p>Sample text. Click to select the Text Element. Tincidunt eget nullam non nisi est. Mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Quis ipsum suspendisse ultrices gravida dictum. Justo nec ultrices dui sapien eget mi. Turpis egestas maecenas pharetra convallis posuere morbi. Urna duis convallis convallis tellus.</p>
    </div>
</section>

<button id="openModalBtn">Регистрация</button>

<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Регистрация</h2>
    <form id="registerForm">
      <label for="username">Имя пользователя</label>
      <input type="text" id="username" name="username" required>
      <label for="email">Email</label>
      <input type="text" id="username" name="email" required>
      <button onclick="(event)">Sing in</button>

      <script>
       
        var modal = document.getElementById("myModal");
        
       
        var btn = document.getElementById("openModalBtn");
        
       
        var span = document.getElementsByClassName("close")[0];
        
        
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
     
        span.onclick = function() {
          modal.style.display = "none";
        }
        
      
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        
        document.getElementById("registerForm").onsubmit = function(event) {
          event.preventDefault();
      
          alert("Регистрация прошла успешно!");
          modal.style.display = "none";
        }
        </script>
        
</body>
</html>
