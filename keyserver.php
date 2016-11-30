<?php

header("Content-Type:application/json"); 

class chave {

	public $numbers;
	public $stars;

	public function __construct() {
		$this->numbers = $this->extraction(1,50,5);
		$this->stars = $this->extraction(1,12,3);
	}

	function extraction ($min,$max,$n) {

	$exkey = array();

	while (count($exkey) < $n) {
		$number = rand($min,$max);
		if (!in_array($number,$exkey)) {
			$exkey[] = $number;
		} 
	}
	sort($exkey);
	return $exkey;
}

} 

$key = new chave();


echo json_encode($key);

//$outjson = '{"numbers":'.json_encode($chaven).',"stars":'.json_encode($chavee).'}';

//echo $outjson;


?>