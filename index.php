
<?php
include 'includes/db.php';

?>
<?php include 'header.php'; ?>

<?php
?>

<div class="jumbotron" id="hero">
        <div class="container">
            <div class="jumbo-area">
            </div>
        </div>
       </div>
      <div class="jumbotron" id="player">
        <div class="container">
           <div class="top-player clearfix">

             <div class="cover-image">
              <button class="play-pause"><span class="fa fa-play play"></span><span class="fa fa-pause pause"></span></button>
               <img class="" src="" alt="">

             </div>
             <div class="details">
               <div class="title">No One</div>
             <div class="genre-list">GENRE <span class="genre">HIP HOP</span> <span class="genre">TRAP</span></div>
             <ul class="tags">
               <li class="tag">#Migos</li>
               <li class="tag">#Young Thug</li>
               <li class="tag">#Travis Scott</li>
               <li class="tag">#21 Savage</li>
             </ul>
             </div>

           </div>
            <div class="jumbo-area" id="playlist">
              <h3>Playlist</h3>
            <table class ="table playlist-table  d-inline-flex" >
             <thead>
               <tr>
                <th colspan="1" scope="col" class="title-header">Titre</th>
                <th colspan="1" scope="col" class="time-header hidden-xs hidden-sm">Duree</th>
                <th colspan="1" scope="col" class="bpm-header hidden-xs hidden-sm">BPM</th>
                <th colspan="1" scope="col" class="tags-header hidden-xs hidden-sm">Tags</th>
                <th colspan="1" scope="col" class="license-header">Licence</th>
                <th colspan="1" scope="col" class="price-header d-xs-none">prix</th>
              </tr>
             </thead>
             <tbody>

             </tbody>

            </table>
            </div>
        </div>

       </div>


        <!--       Les Licences       -->
       
        <div class="wrap">
 <section id="licenses">
     <div class="container">
       <h1>LES LICENCES</h1>
       <p class="lead text-danger">Choisissez le Type de Licence qui vous Convient le mieux.</p>

<!--       Row Begins       -->
        <div class="row">
          <div class="col-sm-3">
          <div class="panel">
           <h3>Basic MP3</h3>
           <hr>
           <div class="well" style="background-color: #101727;">
           <h2><span class="price" style="color: #fff;">15000</span> <SMall>FCFA</SMall></h2>
           </div>
           <hr>
           <p class="text-success"> <i class="fa fa-star"> 1 Acheté = 1 Offert</i></p>
           <p>• Mp3 avec TAG</p>
           <p>• Beat de Bonne Qualité</p>
           <p>• Audio Streams (50k)</p>
           <p>• Utilisation Commerciale</p>
           <p class="text-danger">• Obligation de Crediter <br>(Prod. LatzoBeatz)</p>
           <hr>
           
            <p><button data-id="1" data-target="#licenseModal" data-toggle="modal"  class="btn btn-warning btn-lg">Lire Licence</button></p>
            </div>
          </div>
          <div class="col-sm-3">
           <div class="panel">
            <h3>Premium WAV</h3>
            <hr>
            <div class="well" style="background-color: #101727;">
            <h2><span class="price" style="color: #fff;">25000</span> <SMall>FCFA</SMall></h2>
           </div>
           
           <hr>
           <p class="text-success"> <i class="fa fa-star"> 2 Achetés = 2 Offerts</i></p>
           <p>• MP3, WAV sans TAG</p>
           <p>• Beat de Haute Qualité</p>
           <p>• Audio Streams (100k)</p>
           <p>• Utilisation Commerciale</p>         
           <p>• Non-Exclusive</p>
           <p class="text-danger">• Obligation de Crediter <br>(Prod. LatzoBeatz)</p>
           
           <hr>
           
            <p><button data-id="2" data-target="#licenseModal" data-toggle="modal"  class="btn btn-warning btn-lg">Lire Licence</button></p>
            </div>
            
          </div>
          <div class="col-sm-3">
           <div class="panel">
            <h3>WAV Multipistes</h3>
            <hr>
            <div class="well" style="background-color: #101727;">
            <h2><span class="price" style="color: #fff;">45000</span> <SMall>FCFA</SMall></h2>
           </div>
           <hr>
           <p class="text-success"> <i class="fa fa-star"> 2 Achetés = 2 Offerts</i></p>
           <p>• WAV Multipistes sans TAG</p>
           <p>• Beat de Haute Qualité</p>
           <p>• Streams Illimités</p>
           <p>• Utilisation Commerciale</p>
           <p>• Non-Exclusive</p>
           <p class="text-danger">• Obligation de Crediter <br>(Prod. LatzoBeatz)</p>
           
           <hr>
            <p><button data-id="3" data-target="#licenseModal" data-toggle="modal"  class="btn btn-warning btn-lg">Lire Licence</button></p>
            </div>
            
          </div>
          <div class="col-sm-3">
           <div class="panel">
            <h3>Exclusivité</h3>
            <hr>
            <div class="well" style="background-color: #101727;">
            <h2><span class="price" style="color: #fff;">450000</span> <SMall>FCFA</SMall></h2>
           </div>
           <hr>
           
           <p>• Droits exclusifs pour la piste</p>
           <p>• La propriété du morceau revient à l'acheteur</p>
           <p>• Beat supprimé de la boutique</p>
           <p>• Utilisation Commerciale Illimité</p>
           <p>• Beat de Meilleure Qualité</p>
           <p>• Streams Illimités</p>
           <p class="text-danger">• Obligation de Crediter <br>(Prod. LatzoBeatz)</p>
           <hr>
            <p><button data-id="4" data-target="#licenseModal" data-toggle="modal"  class="btn btn-warning btn-lg">Lire License</button></p>
            </div>
          
          </div>
        </div> <!--  End Row -->
     </div>
 </section>
       <!--       FIN des Licences       -->

       <!--  License Modal -->
    <div class="modal fade" id="licenseModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal"><span>&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                  <button class="close"  type="button" data-dismiss="modal"><span>Fermer &times;</span></button>
                </div>
            </div>
        </div>
    </div> 
           <!--  Autres Services -->
       <section id="about" >
         <div class="container">
           <h2> A<span class="red_underline">UTRES SERVICE</span>S</h2>
           <div class="row">
             <div class="col-sm-4">
               <h3><i class="fa fa-check"> Mixage - Mastering </i></h3>
               <img src="images/mix-master.jpg" alt="">
               <p  style="color: white;">Vous nous envoyez le morceau, nous faisons le mixage et nous vous le renvoyons.</p>
               <a href="contact.php" style="text-decoration: none;"><p class="text-warning">En savoir plus...</p></a>
             </div>
             <div class="col-sm-4">
               <h3><i class="fa fa-check"> Generique Films - Series </i></h3>
               <img src="images/pexels5.jpeg" alt="">
               <p style="color: white;">Contactez nous pour un contrat de production de vos musiques de films et series de tout ttype.</p>
               <a href="contact.php" style="text-decoration: none;"><p class="text-warning">En savoir plus...</p></a>
             </div>
             <div class="col-sm-4">
               <h3><i class="fa fa-check"> Infographie - Web Design </i></h3>
               <img src="images/infographie.jpg" alt="">
               <p style="color: white;"> A vous de Preciser vos Objectifs ! <br> A nous de définir et proposer une meilleur image de votre structure.</p>
               <a href="contact.php" style="text-decoration: none;"><p class="text-warning">En savoir plus...</p></a>
             </div>
           </div>
         </div>
       </section>


       <div id="music-hero" class=" carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#hero-section" data-slide-to="0" class="active"></li>
    <li data-target="#hero-section" data-slide-to="1"></li>
    <li data-target="#hero-section" data-slide-to="2"></li>
    <li data-target="#hero-section" data-slide-to="3"></li>
</ol>
<div class="carousel-inner" role="listbox">
   
   <?php 
         
          $query = "SELECT * FROM music_posts ORDER BY id DESC LIMIT 100";
         $result = mysqli_query($connection, $query);
         if(!$result){
           
         }
         while($row = mysqli_fetch_assoc($result)){
           $song_name = $row['song_name'];
           $song_artist = $row['song_artist'];
           $song_url = $row['song_url'];
           $song_content = $row['song_content'];
           
           ?>
            
   <div class="item">
       <iframe width="100%" height="500px" src="https://www.youtube.com/embed/<?php echo $song_url;?>" frameborder="0" allowfullscreen></iframe>

   </div>
        <?php } ?>


</div>
<a href="#music-hero" role="button" data-slide="prev" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a>
<a href="#music-hero" role="button" data-slide="next" class="right carousel-control"><span class=" glyphicon glyphicon-chevron-right"></span></a>

</div>
       

           <!--  Formulaire de Contact -->
?>
<div class="wrap">
<?php

if (isset($_POST['name'],$_POST['email'], $_POST['message'])  ){
  $name = $_POST['name'];
  $from = $_POST['email'];
  $message = $_POST['message'];
  
  
  $message = mysqli_real_escape_string($connection, $message);
  $name = mysqli_real_escape_string($connection, $name);
  $from = mysqli_real_escape_string($connection, $from);
  
//  sendMail($from, $name, $message);
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  $mail->setFrom('latzodck97@gmail.com', 'Contact Latzo Beatz');
  $mail->addReplyTo($from, $name);
  $mail->Subject   = 'Message';
  $mail->Body = $message;

  $mail->AddAddress( 'latzodck97@gmail.com' );
 
  if(!$mail->Send()){
    header('location: contact.php?failed');

  }
  else{
    header('location: contact.php?success');
  }
}

if (isset($_GET['success'])){
  $message = '<p class="alert alert-success"> Message Sent Successfully.<span class="close" data-dismiss="alert">&times;</span></p>';
}
else if (isset($_GET['failed'])){
  $message = '<p class="alert alert-danger"> Message non envoyé ! Veuillez reessayer.<span class="close" data-dismiss="alert">&times;</span></p>';
}
?>


<?php include 'footer.php'; ?>
