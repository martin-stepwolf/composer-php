<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    /**
     * the name should be 
     * descriptible as posible, 
     * testEmail also works
     */
    public function test_email()
    {
        $email = Validate::email('test@gmail.com');
        $this->assertTrue($email);

        $email = Validate::email('testgmailcom');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://martin.com');
        $this->assertTrue($url);

        $url = Validate::url('martin.com');
        $this->assertFalse($url);
    }

    public function test_password()
    {
        $password = Validate::password('123456');
        $this->assertTrue($password);

        $password = Validate::password('12345');
        $this->assertFalse($password);

        $password = Validate::password('12345a');
        $this->assertFalse($password);
    }
}
