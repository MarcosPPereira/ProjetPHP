<?
/**
* 
*/
class Apostila
{
	private $idApostila;
	private $apostila;
	private $synopsis;
	private $year;
	private $price;
	private $registryDate;

	public function __construct($idApostila, $apostila, $synopsis, $year, $price, $registryDate)
	{
		$this->idApostila = $idApostila;
		$this->apostila = $apostila;
		$this->synopsis = $synopsis;
		$this->year = $year;
		$this->price = $price;
		$this->registryDate = $registryDate;
	}

	public function getIdApostila()
	{
		return $this->idApostila;
	}

	public function setIdApostila($idApostila)
	{
		$this->idApostila = $idApostila;
		return $this;
	}

	public function getApostila()
	{
		return $this->apostila;
	}

	public function setApostila($apostila)
	{
		$this->apostila = $apostila;
		return $this;
	}

	public function getSynopsis()
	{
		return $this->synopsis;
	}

	public function setSynopsis($synopsis)
	{
		$this->synopsis = $synopsis;
		return $this;
	}

	public function getYear()
	{
		return $this->year;
	}

	public function setYear($year)
	{
		$this->year = $year;
		return $this;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		return $this;
	}

	public function getRegistryDate()
	{
		return $this->registryDate;
	}

	public function setRegistryDate($registryDate)
	{
		$this->registryDate = $registryDate;
		return $this;
	}

}