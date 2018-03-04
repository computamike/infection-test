<?php


use PHPUnit\Framework\TestCase;

class test_thing extends TestCase
{
   /**
    * [test_do_process_a_passing_false_returns_false description]
    *
    * @return [type] [description]
    * @runInSeparateProcess
    * @preserveGlobalState disabled
    */
   function test_do_process_a_passing_false_returns_false()
   {
      require_once realpath(__DIR__ . '/../src/thing.php');
      $this->assertInternalType('boolean', do_process_a(false));
   }

/**
 * [test_do_process_a_returns_false description]
 * 
 * @runInSeparateProcess
 * @preserveGlobalState disabled
 */
   function test_do_process_a_returns_false()
   {
      require_once realpath(__DIR__ . '/../src/thing.php');
      $this->assertInternalType('boolean', do_process_a(null));
   }

/**
 * [test_do_process_a_passing_true_returns_true description]
 * 
 * @runInSeparateProcess
 * @preserveGlobalState disabled
 */
   function test_do_process_a_passing_true_returns_true()
   {
      require_once realpath(__DIR__ . '/../src/thing.php');
      $this->assertInternalType('boolean', do_process_a(true));
   }
}