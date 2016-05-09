<?php


class Test extends TestCase
{

    /**
     * My test implementation
     */
    public function testConceptIsFantastic()
    {
        $this->visit('/');
      //  $this->visit('/');
     //   $this->see('NonFunctional Test Team');
        //$this->visit('/login');
        $this->seePageIs('/login');
       
    }
}