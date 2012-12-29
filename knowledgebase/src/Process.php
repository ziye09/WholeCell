<?php
/**
 * Description of Process
 *
 * @author Jonathan Karr, jkarr@stanford.edu
 * @affiliation Covert Lab, Department of Bioengineering Stanford University
 * @lastupdated 3/23/2010
 */
class Process extends KnowledgeBaseObject {

	public $description;
	public $initializationOrder;
	public $evaluationOrder;
	public $class;

	public $parameters;
	public $reactions;

	function  __construct($idx, $tableID, $knowledgeBase) {
		parent::__construct($idx, $tableID, $knowledgeBase);
	}
}
?>
