
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

 $license_temp = "<p><p><strong>LE PR??SENT CONTRAT DE LICENCE </strong> est conclu le {$time} (Date d'entr??e en vigueur) par et entre {$buyer_name} (ci-apr??s d??nomm?? le Licenci??) ??galement, le cas ??ch??ant, professionnellement connu sous le nom de  (". ($buyer_stage_name === '' ? $buyer_name : $buyer_stage_name) . "), et {$producer_name} (Auteur de la chanson). (ci-apr??s d??nomm?? le Conc??dant). Le conc??dant garantit qu'il contr??le les droits m??caniques de l'??uvre musicale prot??g??e par le droit d'auteur intitul??e {$beat_name} (la composition) ?? la date indiqu??e ci-dessus et avant celle-ci. La Composition, y compris sa musique, a ??t?? compos??e par {$producer_name} (\"Songwriter\") g??r?? par le Conc??dant.</p>

<p><strong>Toutes les licences sont non remboursables et non transf??rables.</strong></p>

<p><strong>Utilisation principale.</strong> Le Conc??dant accorde par la pr??sente au Licenci?? une licence non exclusive (this  License) pour enregistrer la synchronisation vocale de la Composition en partie ou dans son int??gralit?? et substantiellement dans sa forme originale (\"Master Recording\")</p>

<p><strong>Droits m??caniques.</strong> Le Conc??dant conc??de par les pr??sentes au Licenci?? une licence non exclusive d'utilisation de l'Enregistrement Principal pour la reproduction, la duplication, la fabrication et la distribution de disques phonographiques, de cassettes, de disques compacts, de t??l??chargements num??riques, d'autres enregistrements audio et num??riques divers, ainsi que de tous levages et versions de ceux-ci (collectivement, les Enregistrements, et individuellement, un Enregistrement) dans le monde entier.</p>

<p><strong>Credit.</strong> Le D??tenteur de licence doit reconna??tre la paternit?? originale de la Composition de mani??re appropri??e et raisonnable dans tous les m??dias et formats d'ex??cution sous le nom de {$producer_name} par ??crit si possible et vocalement sinon.</p>

<p><strong>Contrepartie.</strong> En contrepartie des droits accord??s en vertu du pr??sent contrat, le titulaire de la licence verse au conc??dant la somme de $price FCFA et d'autres contreparties de valeur, ?? l'ordre de  \"{$producer_name}\", dont il accuse r??ception par les pr??sentes. Si le preneur de licence ne rend pas compte au donneur de licence, n'effectue pas en temps voulu les paiements pr??vus par le pr??sent contrat ou ne remplit pas ses autres obligations en vertu du pr??sent contrat, notamment s'il ne dispose pas d'un solde bancaire suffisant, le donneur de licence aura le droit de r??silier la licence sur notification ??crite au preneur de licence. Une telle r??siliation rendra l'enregistrement, la fabrication et/ou la distribution d'Enregistrements pour lesquels des sommes n'ont pas ??t?? pay??es sujettes ?? des infractions et pouvant faire l'objet de poursuites.</p>

<p><strong>Indemnisation.</strong> En cons??quence, le D??tenteur de licence accepte d'indemniser et de d??gager le Conc??dant de toute responsabilit?? en cas de r??clamations, pertes, dommages, co??ts, d??penses, y compris, mais sans s'y limiter, les frais d'avocat raisonnables, d??coulant ou r??sultant d'une pr??tendue violation de l'une des d??clarations, garanties ou accords du D??tenteur de licence en vertu des pr??sentes.</p>

<p><strong>??chantillons audio.</strong> L'autorisation des ??chantillons de tiers est la responsabilit?? du titulaire de la licence.</p>

<p><strong>Divers.</strong>  Cette licence n'est pas transf??rable et est limit??e ?? la composition sp??cifi??e ci-dessus, constitue l'int??gralit?? de l'accord entre le conc??dant et le licenci?? concernant la composition, et lie le conc??dant et le licenci?? ainsi que leurs successeurs, ayants droit et repr??sentants l??gaux respectifs.</p>

<p><strong>Conditions.</strong> Sign??e par le Conc??dant et le Licenci??, elle prend effet ?? toutes fins utiles ?? la date d'entr??e en vigueur mentionn??e en premier lieu ci-dessus.</p>
";

if(isset($_POST['transaction'])){
  echo $license_temp;
  
}
else{
    $response['content'] = $license_temp;
    echo json_encode($response);
}