<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Carbon\Carbon;

if (!\extension_loaded('msgpack')) {
    echo "msgpack not installed\n";
    exit;
}

require __DIR__.'/vendor/autoload.php';

$string = '2018-06-01 21:25:13.321654 Europe/Vilnius';
$date = Carbon::parse('2018-06-01 21:25:13.321654 Europe/Vilnius');
$message = @msgpack_pack($date);
$copy = msgpack_unpack($message);

echo ($string === $copy->format('Y-m-d H:i:s.u e'))
    ? "msgpack test OK\n"
    : "msgpack test failed\n";
