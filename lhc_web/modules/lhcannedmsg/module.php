<?php

$Module = array( "name" => "Canned Messages",
				 'variable_params' => true );

$ViewList = array();

$ViewList['showsuggester'] = array(
    'params' => array('chat_id'),
    'uparams' => array(),
    'functions' => array( 'use' ),
);

$FunctionList['use'] = array('explain' => 'General permission to use canned messages module');
$FunctionList['see_global'] = array('explain' => 'Allow operator to see global canned messages');

?>