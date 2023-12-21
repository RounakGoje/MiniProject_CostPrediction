<?php
use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase
{
    public function testConnectionSuccess()
    {
        $server = "localhost";
        $user = "root";
        $password = "";
        $db = "project";

        $connection = establishConnection($server, $user, $password, $db);

        // Assert that the connection is an instance of mysqli and not false (indicating successful connection)
        $this->assertInstanceOf(mysqli::class, $connection);
    }

    public function testConnectionFailure()
    {
        $server = "invalid_server";
        $user = "root";
        $password = "";
        $db = "invalid_db";

        $connection = establishConnection($server, $user, $password, $db);

        // Assert that the connection is false (indicating a failed connection attempt)
        $this->assertFalse($connection);
    }
}
