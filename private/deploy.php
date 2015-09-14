<?php

$setup_repo_commands = array(
	'./deploy.sh',
);

$pull_commands = array(

);

$stderr_redirect = '2>&1';
//$stderr_redirect = '';

$execute_stack = implode(" $stderr_redirect && ", $setup_repo_commands) . " $stderr_redirect";

echo "<pre>";
echo('execute_stack:' . $execute_stack . "\n\n\n");

echo shell_exec($execute_stack);
echo "</pre>";