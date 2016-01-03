<?php
/**
 * Make someone visible again
 */

$user = elgg_get_logged_in_user_entity();
//only admins for now
if (!$user->isAdmin()) {
	register_error(elgg_echo('actionunauthorized'));
}

$guid = get_input('guid');

$user = get_user($guid);

unset($user->visanonymity);

system_message(elgg_echo('izapProfileVisitor:UnMadeAnonymous', array($user->name)));
