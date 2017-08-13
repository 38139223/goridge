<?php
/**
 * Dead simple, high performance, drop-in bridge to Golang RPC with zero dependencies
 *
 * @author Wolfy-J
 */

namespace Spiral\Tests;

use Spiral\Goridge\Connection;
use Spiral\Tests\Prototypes\RPCTest;

class RCPUnixTest extends RPCTest
{
    const SOCK_ADDR = "server.sock";
    const SOCK_TYPE = Connection::SOCK_UNIX;
}