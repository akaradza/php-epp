<?php

	/**
	* @package Net_EPP
	*/
	class Net_EPP_Frame_Command_Create_Contact extends Net_EPP_Frame_Command_Create {

		function __construct() {
			parent::__construct('contact');
			
			$this->contactId = $this->createElement('contact:id');
			$this->contactId->appendChild($this->createTextNode('auto'));
			$this->payload->appendChild($this->contactId);
		}
	}
?>