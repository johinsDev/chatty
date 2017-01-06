<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterUser extends FeatureTestCase
{
    function test_user_register_and_view_username()
    {
        //Having
        $this->visit('/register')
            ->type('johins' , 'username')
            ->type('johandbz@gmail.com' ,'email')
            ->type('secret' ,'password')
            ->type('secret' ,'password_confirmation');

        //when
        $this->press('Register');

        //Then
        $this->seeInDatabase('users' , [
            'username'     => 'johins',
            'email'   => 'johandbz@gmail.com',
        ]);

        //Test a user is redirect to home;
        $this->seePageIs('/')
            ->see('johins');
    }

    //prueba unitaria para ver la funcionalidad del nombre y del username
    //prueba para mirar q un saurio no registrado no se le vea el timeline
    //prueba para  uno registrado vea el timeline
    //y no vea no login ni registro
    //prueba para q usaurio no registrado no vea el home
    //prueba de login al igual q aqui en registro
    //prueba de recordarme
    //test
    /*
     *    $this->actingAs($user)
             ->withSession(['foo' => 'bar'])
             ->visit('/')
             ->see('Hello, '.$user->name);
     * */

    function test_register_user_form_validation()
    {
        $this->visit('/register')
            ->press('Register')
            ->seePageIs(route('/register'))
            ->seeErrors([
                'username'     => 'The username field is required.',
                'email'   => 'The email field is required.',
                'password'   => 'The password field is required.',
                'password_confirmation'   => 'The password_confirmation field is required.',
            ]);
    }
}
