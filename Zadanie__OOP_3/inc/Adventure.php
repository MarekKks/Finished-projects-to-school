<?php


class Adventure {

	public $dudes = [];

	public function getDudes()
	{
		return $this->dudes;
	}

	public function addDude( Dude $dude )
	{
		array_push( $this->dudes, $dude );
	}

	public function dudeCount()
	{
		return count( $this->dudes );
	}

	public function commentCount()
	{
		$count = 0;

		foreach ( $this->dudes as $dude )
		{
			$count += $dude->getComments();
		}

		return $count;
	}
	
	public function edittdude(Adventure $dude, $number, $setting,$diff)
	{
		$dude->dudes[$number]->$setting = $diff;
		//($this->dudes[$number], $dude);
		echo '<pre>';
		print_r($dude->dudes[$number]->$setting = $diff);
		echo '</pre>';
	}
	public function deletedude($dude,$number)
	{
		unset($dude->dudes[$number]); 
	}


	public function selectdude($dude, $number)
	{
		$arr = ($dude->dudes[$number]);
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	
	}


	
}