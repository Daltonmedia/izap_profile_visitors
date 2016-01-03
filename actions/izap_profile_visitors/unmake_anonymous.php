<?php
/**
 * Make someone visible again
 */

$loggedinuser = elgg_get_logged_in_user_entity();
//only admins for now
if (!$loggedinuser->isAdmin()) {
	register_error(elgg_echo('actionunauthorized'));
}

$guid = get_input('guid');

$user = get_user($guid);

unset($user->visanonymity);

system_message(elgg_echo('izapProfileVisitor:UnMadeAnonymous', array($user->name)));
