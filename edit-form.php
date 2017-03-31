<?php

 
class block_quiz_gg_edit_form extends block_edit_form {
 
    protected function specific_definition($mform) {
	$mform->addElement('advcheckbox', 'config_reset', 'Reset inner DB','',array(), array(0, 1));
 
    }
}
