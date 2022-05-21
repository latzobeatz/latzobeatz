
<?php
include 'db.php';
session_start();

if (isset($_POST['id'])){
 $id = mysqli_real_escape_string($connection, $_POST['id']);
}
else {
  echo 'none selected';
  die();
}
if(isset($_POST['transaction'])){
  $transaction = mysqli_real_escape_string($connection, $_POST['transaction']);

  $query = "SELECT * FROM transaction WHERE paymentId  = '$transaction'";
  $result = mysqli_query($connection, $query);
  if(mysqli_num_rows($result) == 0){
    header("Location: index.php");
    die('no results');
  }
  foreach($result as $row){
    $buyer_id = $row['buyer_id'];

    
    $buyer_query = "SELECT * FROM users WHERE id  = '$buyer_id'";
    $buyer_result = mysqli_query($connection, $buyer_query);
    if(mysqli_num_rows($buyer_result) == 0){
      header("Location: index.php");
      die('no results');
    }
    foreach($buyer_result as $buyer_row){
      $buyer_name = $buyer_row['name'];
    $buyer_stage_name = $buyer_row['stage_name'];
    }
    
  }
}
else {
  $buyer_name = (isset($_SESSION['name']) ? $_SESSION['name'] : "John Doe");
  $buyer_stage_name = (isset($_SESSION['stage_name']) ? $_SESSION['stage_name'] : "John Doe");
}

$producer_name = "Latzo Beatz";
$beat_name = (isset($_POST['beat_name']) ? $_POST['beat_name'] : "");

$response = [];

$query = "SELECT * FROM licenses WHERE id = {$id}";
$result = mysqli_query($connection, $query);
if(!$result){
  die('error');
}
foreach($result as $row){
  $sales = $row['num_sales'];
  $license_name = $row['license_name'];
  $price = floatval($row['price']);
  $downloads = $row['num_downloads'];
  $streams = $row['num_streams'];
  $isProfitable = $row['isProfitable'];
  $performances = $row['num_performances'];
  $num_videos = $row['num_videos'];
  $num_mon_video = $row['num_mon_videos'];
  $num_radio = $row['radio_stations'];
  $years_active = $row['years_active'];


  $response['type'] = $license_name;
}


$zone = new DateTimeZone('UTC');

date_default_timezone_set('UTC');
$date = new DateTime();


//$date = date_create_from_format('Y-m-d H:i:s','now', $zone);

$time =  $date->format(' D,  M d Y H:i:s P');

//this is the actual string that is either displayed or outputed to a txt file

 $license_temp = "<p><p><strong>LE PRÉSENT CONTRAT DE LICENCE </strong> est conclu le {$time} (Date d'entrée en vigueur) par et entre {$buyer_name} (ci-après dénommé le Licencié) également, le cas échéant, professionnellement connu sous le nom de  (". ($buyer_stage_name === '' ? $buyer_name : $buyer_stage_name) . "), et {$producer_name} (Auteur de la chanson). (ci-après dénommé le Concédant). Le concédant garantit qu'il contrôle les droits mécaniques de l'œuvre musicale protégée par le droit d'auteur intitulée {$beat_name} (la composition) à la date indiquée ci-dessus et avant celle-ci. La Composition, y compris sa musique, a été composée par {$producer_name} (\"Songwriter\") géré par le Concédant.</p>

<p><strong>Toutes les licences sont non remboursables et non transférables.</strong></p>

<p><strong>Utilisation principale.</strong> Le Concédant accorde par la présente au Licencié une licence non exclusive (this  License) pour enregistrer la synchronisation vocale de la Composition en partie ou dans son intégralité et substantiellement dans sa forme originale (\"Master Recording\")</p>

<p><strong>Droits mécaniques.</strong> Le Concédant concède par les présentes au Licencié une licence non exclusive d'utilisation de l'Enregistrement Principal pour la reproduction, la duplication, la fabrication et la distribution de disques phonographiques, de cassettes, de disques compacts, de téléchargements numériques, d'autres enregistrements audio et numériques divers, ainsi que de tous levages et versions de ceux-ci (collectivement, les Enregistrements, et individuellement, un Enregistrement) dans le monde entier.</p>

<p><strong>Credit.</strong> Le Détenteur de licence doit reconnaître la paternité originale de la Composition de manière appropriée et raisonnable dans tous les médias et formats d'exécution sous le nom de {$producer_name} par écrit si possible et vocalement sinon.</p>

<p><strong>Contrepartie.</strong> En contrepartie des droits accordés en vertu du présent contrat, le titulaire de la licence verse au concédant la somme de $price FCFA et d'autres contreparties de valeur, à l'ordre de  \"{$producer_name}\", dont il accuse réception par les présentes. Si le preneur de licence ne rend pas compte au donneur de licence, n'effectue pas en temps voulu les paiements prévus par le présent contrat ou ne remplit pas ses autres obligations en vertu du présent contrat, notamment s'il ne dispose pas d'un solde bancaire suffisant, le donneur de licence aura le droit de résilier la licence sur notification écrite au preneur de licence. Une telle résiliation rendra l'enregistrement, la fabrication et/ou la distribution d'Enregistrements pour lesquels des sommes n'ont pas été payées sujettes à des infractions et pouvant faire l'objet de poursuites.</p>

<p><strong>Indemnisation.</strong> En conséquence, le Détenteur de licence accepte d'indemniser et de dégager le Concédant de toute responsabilité en cas de réclamations, pertes, dommages, coûts, dépenses, y compris, mais sans s'y limiter, les frais d'avocat raisonnables, découlant ou résultant d'une prétendue violation de l'une des déclarations, garanties ou accords du Détenteur de licence en vertu des présentes.</p>

<p><strong>Échantillons audio.</strong> L'autorisation des échantillons de tiers est la responsabilité du titulaire de la licence.</p>

<p><strong>Divers.</strong>  Cette licence n'est pas transférable et est limitée à la composition spécifiée ci-dessus, constitue l'intégralité de l'accord entre le concédant et le licencié concernant la composition, et lie le concédant et le licencié ainsi que leurs successeurs, ayants droit et représentants légaux respectifs.</p>

<p><strong>Conditions.</strong> Signée par le Concédant et le Licencié, elle prend effet à toutes fins utiles à la date d'entrée en vigueur mentionnée en premier lieu ci-dessus.</p>
";

if(isset($_POST['transaction'])){
  echo $license_temp;
  
}
else{
    $response['content'] = $license_temp;
    echo json_encode($response);
}