<!--This is the cart page -->
<?php
include 'includes/db.php';

//This adds an item to the cart
if(isset($_GET['add_cart'])){
session_start();
  $id = $_GET['add_cart'];
  $name = $_GET['name'];
  $price= $_GET['price'];
  $license= $_GET['license'];
  foreach($_SESSION['shopping_cart'] as $item){
    if($item['id'] === $id ) {
      echo 'no';
      return;
    }
  }
  $_SESSION['shopping_cart'][] = [
    "id" => $id,
    "name" => $name,
    "price" => $price,
    "license" => $license

  ];
  return;
}

//This deletes an item from the cart
else if(isset($_GET['delete_item'])){
session_start();
  $delete = mysqli_real_escape_string($connection, $_GET['delete_item']);
  foreach($_SESSION['shopping_cart'] as $key => $item){
    if ($item['id'] === $delete){
      unset($_SESSION['shopping_cart'][$key]);
    }
  }
  array_values($_SESSION['shopping_cart']);
  header("Location: cart.php");
}


//This shows the cart
else {

include 'header.php';}
  ?>
<div class="wrap">

         <section id="cart" class="container">
             <div class="row">
             <div class="col-md-8 cart-products">
               <table class="table">
               <thead>
                 <tr>
                   <th>Produit</th>
                   <th>Licence</th>
                   <th>Prix</th>
                 </tr>
               </thead>
               <tbody>

                 <?php
                 $total = 0;
                 foreach($_SESSION['shopping_cart'] as $item){
                   $total += $item['price'];
                  ?>
                  <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['license']; ?> Licence</td>
                    <td><?php echo $item['price']; ?></td>
                    <td><a href="cart.php?delete_item=<?php echo $item['id']; ?>" class="btn btn-danger">Supprimer</a></td>

                  </tr>
                  <?php } ?>
               </tbody>

             </table>
             </div>
<!--              END Product Table        -->

             <div class="col-md-4 cart-summary">

               <h2>Panier</h2>
               <table class="table">
                 <tbody>
                   <tr>
                     <td>Sous-total</td>
                     <td><?php echo $total ;?> <small> FCFA</small></td>
                   </tr>
                   <tr>
                     <td>Total</td>
                     <td><?php echo $total; ?> <small> FCFA</small></td>
                   </tr>

                 </tbody>
               </table>
<!--               <a href="checkout.php" class="btn btn-success">Commander</a>-->
             </div>
           </div>
           <span class="btn btn-warning"><p  style="width: auto">Valider la commande <br>en remplissant ce formulaire !</span> <i class="fa fa-arrow-back"></i> </p>

         </section>
         
</div>

<iframe src="https://whatsform.com/z6Z0ns"  width="100%" height="800" frameBorder="0" style="background-color: #f5b511;"></iframe>


  <?php  include 'footer.php';?>
