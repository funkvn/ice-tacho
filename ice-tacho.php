<?php

// Set some options for special HTTP headers
$opts = [
    'http' => [
        'method' => 'GET',
        'header' => 'User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
Accept-Language: de,en;q=0.7,en-US;q=0.3
Pragma: no-cache
Cache-Control: no-cache'
    ]
];
$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$return = @file_get_contents('https://portal.imice.de/api1/rs/status', false, $context);
if ($return === false) {
    print '{"error"}';
}
print $return;
