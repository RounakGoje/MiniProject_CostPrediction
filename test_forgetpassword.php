<?php
use PHPUnit\Framework\TestCase;

class UserLoginTest extends TestCase
{
    public function testEmptyFields()
    {
        $connect = new mysqli("localhost", "root", "", "project");
        $result = loginUser($connect, "", "", "");
        $this->assertEquals("Both Fields are required", $result);
    }

    public function testWrongUserDetails()
    {
        $connect = new mysqli("localhost", "root", "", "project");
        $result = loginUser($connect, "rounakgoje@gmail.com", "Rounak@4444", "Rounak@1234"));
        $this->assertEquals("Wrong User Details", $result);
    }

    public function testSuccessfulLogin()
    {
        $connect = new mysqli("localhost", "root", "", "project");
        $result = loginUser($connect, "rounakgoje@gmail.com", "Rounak@2001", "Rounak@1234");
        $this->assertEquals("success", $result);
        // Additionally, you can add assertions to check if password has been updated in the database
    }
}
