<?php

$cfg = require __DIR__ . '/../vendor/mediawiki/mediawiki-phan-config/src/config-library.php';

$cfg['directory_list'] = [
	'src',
	'tools',
	'tests',
	'.phan/stubs',
	'vendor/wikimedia/assert',
];
// T311928 - ReturnTypeWillChange only exists in PHP >= 8.1; seen as a comment on PHP < 8.0
$cfg['file_list'] = array_merge(
	$cfg['file_list'],
	class_exists( ReturnTypeWillChange::class ) ? [] : [ '.phan/stubs/ReturnTypeWillChange.php' ]
);
$cfg['suppress_issue_types'] = [
	'PhanPluginNeverReturnMethod',
];

return $cfg;
