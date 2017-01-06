<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    function test_user_view_chatty_and_login_urls()
    {
        $this->visit('/')
            ->see('Chatty')
            ->see('login')
            ->see('register');
    }

    function test_user_click_in_register()
    {
        $this->visit('/')
            ->click('Login')
            ->seePageIs('login');
    }
}
