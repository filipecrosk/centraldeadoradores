<?php



/**
 * Skeleton subclass for representing a row from the 'token' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.centraldeadoradores
 */
class Token extends BaseToken
{
	public function fill(){
		$this->setChave(md5(Internals_Util::randString(10)));
		$this->setData(date("Y-m-d H:i:s"));
		$this->save();
	}
}
