<?php


use PHPUnit\Framework\TestCase;

class test_thing extends TestCase
{
   function test_do_process_a_returns_done()
   {
      require_once realpath(__DIR__ . '/../src/thing.php');
      $this->assertEquals('done', do_process_a());
   }
}