<?php

class ExampleTestFeature extends FeatureTestCase
{

    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }
}
