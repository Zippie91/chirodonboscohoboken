<?php
class Hoofding
{
  private $hoofdteksten;

  public function __construct($dbconn)
  {
    $sql = "SELECT hoofding, tekst FROM hoofdtekst";

    foreach($dbconn->query($sql) as $row) {
      $hoofdteksten["{$row['hoofding']}"] = $row['tekst'];
    }

    print self::buildHTML($hoofdteksten);
  }

  private static function buildHTML($hoofdarray)
  {
    $counter = 1;

    $tabpills = "<!-- Tab Pills -->";
    $tabpanes = "<!-- Tab Panes -->";

    $tabpills .= "<ul class='nav nav-pills' role='tablist'>";
    $tabpanes .= "<div class='tab-content'>";

    foreach($hoofdarray as $hoofding => $tekst) {
      if ($counter == 1) {
        $tabpills .= "<li role='presentation' class='active'><a href='#{$counter}-pane' aria-controls='home' role='tab' data-toggle='pill'>{$hoofding}</a></li>";
        $tabpanes .= "<div role='tabpanel' class='tab-pane fade in active' id='{$counter}-pane'>{$tekst}</div>";
      } else {
        $tabpills .= "<li role='presentation'><a href='#{$counter}-pane' aria-controls='home' role='tab' data-toggle='pill'>{$hoofding}</a></li>";
        $tabpanes .= "<div role='tabpanel' class='tab-pane fade in' id='{$counter}-pane'>{$tekst}</div>";
      }

      $counter += 1;
    }

    $tabpills .= "</ul>";
    $tabpanes .= "</div>";

    return $tabpills . "\n" . $tabpanes;
  }
}

?>
