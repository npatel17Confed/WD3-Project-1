<?php include '../partials/db_conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<?php include '../partials/navbar.php'; ?>

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
<?php 
  
  $query = "SELECT * FROM developers ORDER BY name";
  $result = mysqli_query($con, $query);

  while ($row = mysqli_fetch_array($result)) {
    echo '  
    <div class="column">
      <div class="card">
  
        <div class="container">
          <h2>'. $row['name']. '</h2>
          <img src="../images/developers/'. $row['image']. '" height="300" width="300" />
          <p class="title">'. $row['title']. '</p>
          <p>'. $row['description']. '</p>
          <p>'. $row['email']. '</p>
          <p><a href="mailto:'.$row['email'].'" class="button nodeco">Contact</a></p>
        </div>
      </div>
    </div>';
  
  }
?>
</body>

<?php include '../partials/footer.php'; ?>

</html>