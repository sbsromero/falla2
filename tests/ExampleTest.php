<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    
    public function testBasicExample()
    {
        /**$this->visit('/')
             ->see('Laravel 5');
             */
       $this->visit('home')
       ->see('Esto es una Prueba en PHPUnit');

    } 

}
