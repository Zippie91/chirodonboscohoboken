<?php
date_default_timezone_set("Europe/Brussels");

class BootstrapPanel
{
	private $title;
	private $name;
	private $date;
	private $sdate;
	private $text;

	public function __construct($phpobject)
	{
		$this->getValues($phpobject);
		print $this->buildHTML();
	}

	private function buildHTML()
	{
		$HTML = "	<div class='panel panel-default'>
						<div class='panel-heading'>
							<div class='col-xs-12 col-sm-6'>
								<h5>{$this->title} <small><a href='#'><em>{$this->name}</em></a></small></h5>
							</div>
							<div class='col-xs-12 col-sm-6'>
								<h5 class='text-right'><small class='hidden-xs'>{$this->date}</small></h5>
								<h6><small class='visible-xs'>{$this->sdate}</small></h6>
							</div>
							<div class='clearfix'></div>
						</div>
						<div class='panel-body'>
							<p>{$this->text}</p>
						</div>
					</div>";

		return $HTML;
	}

	private function getValues($object)
	{
		$this->title = $object['titel'];
		$this->name = $this->name($object['voornaam'], $object['naam']);
		$this->date = $this->formatDate($object['datum_aangemaakt'], normal);
		$this->sdate = $this->formatDate($object['datum_aangemaakt'], small);
		$this->text = $object['tekst'];
	}

	private function name($name, $surname)
	{
		return $name . " " . $surname;
	}

	private function formatDate($timestamp, $type)
	{
		$datetime = new DateTime($timestamp);

		switch($type) {
			case "small":
				return strftime("%d %B %Y", $datetime->getTimestamp());
			case "normal":
				return strftime("%A %e %B %Y", $datetime->getTimestamp());
			default:
				return strftime("%d/%m/%Y", $datetime->getTimestamp());
		}
	}
}
?>
