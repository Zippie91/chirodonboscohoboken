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

      $stm = $this->db->prepare($this->sqlstm);
      $stm->execute(array(':is_actief' => 1));
      while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
        foreach ($row as $key => $value) {
          echo $key . ": " . $value . "<br>";
        }
      }
    }

    public function werkgroepen() {
      $this->sql('werkgroep');

      $stm = $this->db->prepare($this->sqlstm);
      $stm->execute(array(':is_actief' => 1));
      while($row = $stm->fetch(PDO::FETCH_ASSOC)) {
        foreach ($row as $key => $value) {
          echo $key . ": " . $value . "<br>";
        }
      }
    }

    private function sql($dbname)
    {
      $this->sqlstm = "SELECT *
                    FROM {$dbname}
                    WHERE is_actief = :is_actief";
    }
}
?>
