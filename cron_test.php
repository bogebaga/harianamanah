<?php
  require __DIR__."/config/GO/Scheduler.php";
  require __DIR__."/config/GO/Job.php";
  require __DIR__."/config/GO/Traits/Interval.php";
  require __DIR__."/config/GO/Traits/Mailer.php";

  echo __DIR__."/config/GO/Scheduler.php";


  $scheduler = new GO\Scheduler;

  $scheduler->call(
                function(){
                  return "test";
                },
                ['user' => '1'],
                'identifier')->everyMinute();

  // $scheduler->run();
?>