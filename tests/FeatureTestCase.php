<?php

use \Illuminate\Foundation\Testing\DatabaseTransactions;

class FeatureTestCase extends TestCase
{
    use DatabaseTransactions;

    function test_example()
    {
        $this->assertTrue(true);
    }

    public function seeErrors($fields)
    {
        foreach ($fields as $name => $error){
            foreach ((array) $error as $mesage){
                $this->seeInElement(
                    "#field_{$name}.has-error .help-block",
                    $mesage
                );
            }
        }
    }
}