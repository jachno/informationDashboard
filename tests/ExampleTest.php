<?php


class ExampleTest extends TestCase
{
    
/** @test */
    public function testExample()
    {
        $this->visit('/')
        ->see('NonFunctional Test Team');
        
        
    }
}