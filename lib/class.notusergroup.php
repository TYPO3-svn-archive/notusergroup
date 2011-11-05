<?php
	/**
	 * Matches if a user is not in given list 
	 *	@var	string	a list of groups to match against sperator | (pipe)
	 *	@return	bool	
	 */
	function tx_notusergroup($cmd){
		$cmd = t3lib_div::trimExplode('|',$cmd,true);
		$gr_list = $GLOBALS['TSFE']->gr_list;
		foreach( $cmd as $grp) {
			if(t3lib_div::inList($gr_list,$grp)){
				return false; // matched a group so condition is false
			}
		}
		return true; // no Group Found so return true;
	}
?>