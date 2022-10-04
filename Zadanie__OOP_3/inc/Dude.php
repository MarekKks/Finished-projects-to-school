<?php


class Dude {

	public $who;
	public $wat;
	public $comments = 0;
	public $dudes = [];


	/**
	 * Dude constructor.
	 *
	 * @param     $who
	 * @param     $wat
	 * @param int $comments
	 */
	public function __construct( $who, $wat, $comments )
	{
		$this->who      = $who;
		$this->wat      = $wat;
		$this->comments = $comments;
	}


	/**
	 * @return mixed
	 */
	public function getWho()
	{
		return $this->who;
	}


	/**
	 * @param mixed $who
	 */
	public function setWho( $who )
	{
		$this->who = $who;
	}


	/**
	 * @return mixed
	 */
	public function getWat()
	{
		return $this->wat;
	}


	/**
	 * @param mixed $wat
	 */
	public function setWat( $wat )
	{
		$this->wat = $wat;
	}


	/**
	 * @return int
	 */
	public function getComments()
	{
		return $this->comments;
	}


	/**
	 * @param int $comments
	 */
	public function setComments( $comments )
	{
		$this->comments = $comments;
	}

	public function addComment($write)
	{ 
		//echo $write;
		{
			$count = $this->comments;
	
			foreach ( $this->dudes as $dude )
			{
				$count += $dude->getComments();
			}
			
			return $count;

	
		}
}
}