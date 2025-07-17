<?php

$cfg = require __DIR__ . '/../vendor/mediawiki/mediawiki-phan-config/src/config-library.php';

$cfg['directory_list'] = [
	'src',
	'tools',
	'tests',
	'.phan/stubs',
	'vendor/wikimedia/assert',
];
$cfg['suppress_issue_types'] = [
	'PhanPluginNeverReturnMethod',
	'PhanThrowTypeAbsent',
	'PhanUnusedPublicNoOverrideMethodParameter',
	'PhanUnusedProtectedNoOverrideMethodParameter',
];

return $cfg;
