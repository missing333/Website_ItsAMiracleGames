<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IAM Games</title>
  <link rel="shortcut icon" href="Art\Logos\IAMG logo.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fonts.css" type="text/css" charset="utf-8" />
  <!--link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Special+Elite&display=swap" rel="stylesheet"-->
  <link href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC|Julius+Sans+One|Major+Mono+Display|Megrim|Special+Elite&display=swap" rel="stylesheet">

  	<script type="text/javascript" src="jscript.js"></script>
</head>


<!--  Begin Website    -->

<body>

  <?php include("header.html");?>


  <!--  Main Content Area    -->
  <main id="main">



    <!--  Section A - Title  -->
    <section id="section-a" class="grid">
      <div class="content-wrap">
        <h2 class="content-title">Angel Academy</h2>
        <p>
          You are a guardian angel in training.  Your final exam: a group project to save one soul.  Will you pass?
        </p>
      </div>
    </section>



    <!--  Section B - Game Images  -->
    <section id="section-b" class="grid">
      <ul id="games">
        <li id="Genesis">
          <a href="#">
            <div class="card">
              <img src="https://images.pexels.com/photos/122427/roll-the-dice-craps-board-game-points-122427.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
              <div class="card-content">
                <h3 class="card-title">Genesis</h3>
                <p class="card-description">Build the world in 7 days</p>
                <p>
                  The universe is a formless void! It is up to you to align fire, air, earth, and water within 7 days, while The Enemy vows to stop you.
                </p>
              </div>
            </div>
          </a>
        </li>
        <li id="AngelAcademy">
          <a href="#">
            <div class="card">
              <img src="https://images.pexels.com/photos/163064/play-stone-network-networked-interactive-163064.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
              <div class="card-content">
                <h3 class="card-title">Angel Academy</h3>
                <p class="card-description">Everything is on the line</p>
                <p>
                  You are taking final exams to become a full-fledged Guardian Angel! If you can save one soul with the help of your friends, you pass.
                </p>
              </div>
            </div>
          </a>
        </li>
        <li id="Game3">
          <a href="#">
            <div class="card">
              <img src="https://images.pexels.com/photos/278912/pexels-photo-278912.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
              <div class="card-content">
                <h3 class="card-title">Game 3</h3>
                <p class="card-description">Explore and collect</p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia at recusandae tempora nesciunt, tenetur est dolor reprehenderit.
                </p>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </section>




    <!--section D - Rules/OverView/How to Play  -->
    <section id="section-d" class="grid">
      <div id="Contact" class="box">
        <h2 class="content-title">Rules/OverView/How to Play</h2>
        <p>
          Take 2 actions, then reveal a Sin card.
          <p>Actions:
          <br>-Study (place a card from your hand into your Bookshelf)
          <br>-Homework (use an ability from a book in your Bookshelf)
        </p>


      </div>

      <div id="About" class="box">
        <h2 class="content-title">
          Where to buy
        </h2>
        <p>
          Store link
        </p>
      </div>
    </section>



  </main>


  <!-- Footer -->
  <?php include("footer.html");?>


</body>

</html>
