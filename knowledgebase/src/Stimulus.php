<?php
/**
 * Description of Stimulus
 *
 * @author Jonathan Karr, jkarr@stanford.edu
 * @affiliation Covert Lab, Department of Bioengineering Stanford University
 * @lastupdated 3/23/2010
 */
class Stimulus extends KnowledgeBaseObject {
	public $values;

	function  __construct($idx, $tableID, $knowledgeBase) {
		parent::__construct($idx, $tableID, $knowledgeBase);
	}
}
?>
