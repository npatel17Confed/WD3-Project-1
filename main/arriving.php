<?php include '../partials/db_conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<?php include '../partials/navbar.php'; ?>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;  
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>


<h2 style="text-align:center">Product lists</h2>
<div class="row">

<div class="card" >

  <h1>Product 1 </h1>
  <p class="price">$19.99</p>
  <p>Some text about the . Super slim and comfy lorem ipsum lorem um. Lorem jeamsun denim lorem um.</p>
  <p><button>Wishlist</button></p>
</div>
</div>

<div class="row">


<div class="card">

  <h1>Product 2  </h1>
  <p class="price">$19.99</p>
  <p>Some text about the . Super slim and comfy lorem ipsum lorem um. Lorem jeamsun denim lorem um.</p>
  <p><button>Wishlist</button></p>
</div>
</div>
<div class="row">


<div class="card">

  <h1>Product 3 </h1>
  <p class="price">$19.99</p>
  <p>Some text about the . Super slim and comfy lorem ipsum lorem um. Lorem jeamsun denim lorem um.</p>
  <p><button>Wishlist</button></p>
</div>
</div>

<div class="row">
<div class="card">

  <h1>Product 4  </h1>
  <p class="price">$19.99</p>
  <p>Some text about the . Super slim and comfy lorem ipsum lorem um. Lorem jeamsun denim lorem um.</p>
  <p><button>Wishlist</button></p>
</div>
</div>


<div class="row">

<div class="card">

  <h1>Product 5 </h1>
  <p class="price">$19.99</p>
  <p>Some text about the . Super slim and comfy lorem ipsum lorem um. Lorem jeamsun denim lorem um.</p>
  <p><button>Wishlist</button></p>
</div>
</div>
<div class="row">

<div class="card">

  <h1>Product 6  </h1>
  <p class="price">$19.99</p>
  <p>Some text about the . Super slim and comfy lorem ipsum lorem um. Lorem jeamsun denim lorem um.</p>
  <p><button>Wishlist</button></p>
</div>
</div>
</body>
</html>