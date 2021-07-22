<?php
include "../partials/metadata.php";
include "../partials/db_conn.php";
include "../partials/navbar.php";
$output = '';
if(isset($_GET['search'])){
    $searchq = $_GET['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

    $query = mysqli_query($con,"SELECT * FROM products WHERE title LIKE '%$searchq%' OR description LIKE '%$searchq%'") or die("could not search");

    $count = mysqli_num_rows($query);
    if($count == 0){
        $output = 'There was no search results';
    }
    else{
        $output = '<div class="container"><div class="row">';
         while($row = mysqli_fetch_array($query)){
             $row['title'];
             $row['description'];
             $row['image'];

             $output .= '<div class="col-md-3">
             <div class="ibox">
                 <div class="ibox-content product-box">
                     <div class="product-imitation"> 
                             <img src="../images/products/'.$row['image'].'" alt='. $row['image'] .' />
                     </div>
                     <div class="product-desc">
                         <span class="product-price">$'. $row['price'] .'</span>
                         <small class="text-muted">Category</small>
                         <a href="#" class="product-name"> '. $row['title'] .'</a>

                         <div class="small m-t-xs">'. $row['description'] .'</div>
                         <div class="m-t text-righ">

                             <a href="#" class="btn btn-xs btn-outline btn-primary">
                             buy
                             <i class="fa fa-long-arrow-right"></i> </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>';
         }
         $output .= '</div></div>';
    }
}
?> 


<?php echo $output;?>
