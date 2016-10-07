<?php include("BootstrapPanel.class.php"); ?>
<?php
class Nieuws
{
  public function __construct($dbconn)
  {
    $sql = "SELECT n.*, p.naam, p.voornaam, p.persoon_id
            FROM nieuws n
            LEFT JOIN ploeg p
            ON n.persoon_aangemaakt = p.persoon_id";

    foreach($dbconn->query($sql) as $row) {
      new BootstrapPanel($row);
    }
  }
}
?>
