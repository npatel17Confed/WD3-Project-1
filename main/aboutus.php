<?php include '../partials/db_conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<?php include '../partials/navbar.php'; ?>


<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 6px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 140px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>Comber Drug Store</h1>
  <p>We help you feel better as we pray for the best.</p>

</div>
<br>
<br>

<h2 style="text-align:center">Our Team</h2>
<br>
<br>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Nilkumar Patel</h2>
        <img src="../images/developers/nil.jpg" height='300' width='300' />
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>nsp4898@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">

      <div class="container">
        <h2>Rohan Palkar</h2>
        <img src="../images/developers/rohan.jpg" height='300' width='300' />
        <p class="title"> Director</p>
        <p></p>
        <p>rohanpalkar56@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">

      <div class="container">
        <h2>Chintan Trivedi</h2>
        <img src="../images/developers/chintan.jpg" height='300' width='300' />
        <p class="title">Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>chintan024@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>


<div class="column">
    <div class="card">

      <div class="container">
        <h2>Neel Patel</h2>
        <img src="../images/developers/neel.jpg" height='300' width='300' />
        <p class="title"> Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>neel.2147@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  
  <div class="column">
    <div class="card">

      <div class="container">
        <h2>Parth Vyas</h2>
        <img src="../images/developers/parth.jpg" height='300' width='300' />
        <p class="title">Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>vyasparth188@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

</body>




</html>