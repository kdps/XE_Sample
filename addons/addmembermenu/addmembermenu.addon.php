<?php
if(!defined('__XE__')) exit();
if($called_position == 'before_module_init')
{
	$oMemberController = &getController('member');
	$oMemberController->addMemberMenu('dispMemberMenuAdded', 'Name');
}

