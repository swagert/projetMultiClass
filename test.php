<?php
class Personnage
{
	private $name;
	private $id_personnage;
	private $weapons;

	public function __construct($data)
	{
		// $weapon[0] => 
		// $weapon[1] => 
		// $weapon[2] => 

		// $this->setTruc($data['truc']);
	}
}
class Magicien extends Personnage
{
	private $magie;
	private $id_magicien;
	private $id_personnage;

	public function __construct($data)
	{
		// DB => Personnage
		$dataPersonnage = "SELECT * FROM personnage WHERE id='".$this->id_personnage."'";
		parent::__construct($dataPersonnage);
		// $this->setTruc($data['truc']);
		$id_magicien = $data['id_magicien'];
		$this->magie = $data['magie'];
	}
}
class DarkMagicien extends Magicien
{
	private $noire;
	private $id_dark_magicien;
	private $id_magicien;

	public function __construct($data)
	{
		// DB => Magicien
		$dataMagicien = "SELECT * FROM magicien WHERE id='".$this->id_magicien."'";
		parent::__construct($dataMagicien);
		// $this->setTruc($data['truc']);
		$id_dark_magicien = $data['id_dark_magicien'];
		$this->noire = $data['noire'];
		$data['weapon'];// => 
		$this->setWeapon($weapon);
	}
}
// $id_personnage : Personnage => Magicien => DarkMagicien
// Personnage : 	#id
// Magicien :   	#id
//					@id_personnage
// DarkMagicien : 	#id
//					@id_magicien
// Personnage LEFT JOIN ... LEFT JOIN ... WHERE id=$id_personnage
// list id
// $id_personnage => DarkMagicien
// SELECT * FROM dark_magicien
$data = $res->fetch();
$darkmage = new DarkMagicien($data);

if ($data['classname'] == 'DarkMagicien')
{
	$class = new DarkMagicien($data);
}
// $class = new $data['name']($data);

// $id_personnage => Magicien
// SELECT * FROM magicien
$data = $res->fetch();
$mage = new Magicien($data);

?>