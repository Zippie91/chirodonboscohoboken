<?php
class Dropdown
{
    private $sqlstm;
    private $db;
    private $dbname;

    public function __construct($database)
    {
      $this->db = $database;
    }

    public function afdelingen()
    {
      $this->sql('groep');

      $list = " <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Afdelingen <span class='caret'></span></a>
                  <ul class='dropdown-menu'>";

      $stm = $this->db->prepare($this->sqlstm);
      $stm->execute(array(':is_actief' => 1));
      while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
        foreach ($row as $key => $value) {
          $lowervalue = strtolower($value);
          $list .= "<li><a href='/afdelingen/{$lowervalue}'>{$value}</a></li>";
        }
      }

      $list .= "</ul>";

      echo $list;
    }

    public function werkgroepen() {
      $this->sql('werkgroep');

      $list = " <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Werkgroepen <span class='caret'></span></a>
                  <ul class='dropdown-menu'>";

      $stm = $this->db->prepare($this->sqlstm);
      $stm->execute(array(':is_actief' => 1));
      while($row = $stm->fetch(PDO::FETCH_ASSOC)) {
        foreach ($row as $key => $value) {
          // $cleanvalue = $this->strreplace(strtolower($value));
          $cleanvalue = strtolower($this->clean(iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $value)));
          $list .= "<li><a href='/werkgroepen/{$cleanvalue}'>{$value}</a></li>";
        }
      }

      $list .= "</ul>";

      echo $list;
    }

    private function sql($dbname)
    {
      $this->sqlstm = "SELECT omschrijving
                    FROM {$dbname}
                    WHERE is_actief = :is_actief";
    }

    private function clean($string)
    {
      $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

      return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
}
?>
