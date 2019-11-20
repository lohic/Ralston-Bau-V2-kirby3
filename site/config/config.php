<?php

return [
    'debug' => true,
    'languages' => true,
    // 'languages.detect' => true,
    'medienbaecker.autoresize.maxWidth' => 1500,  // https://github.com/medienbaecker/kirby-autoresize
    'thumbs' => [
		'driver' => 'im'
		// ,'bin' => 'convert'
	],
	'sylvainjule.matomo.url'        => 'https://analytics.ralstonbau.com', #required
    'sylvainjule.matomo.id'         => '1', #required
    'sylvainjule.matomo.token'      => '981205d607ffc067a858fbee82584e9b', #required for the panel integration
];