# muck-log-maker
You can generate your muck log files with it

#### For example 
For example your pattern is "Time : :time Status : :status"
Now you can run this code and generate many muck logs
```php
<?php

include './src/LogGenerator.php';

$generator = new LogGenerator();
$generator->setPattern('Time : :time Status : :status');
$generator->setCount(100000);
$generator->setVariable("status", [1,2,4]);
$generator->setVariable("time", ["10:10","10:13","15:10"]);
$generator->generate();
```

```
Time : 15:10 Status : 4
Time : 15:10 Status : 4
Time : 10:13 Status : 4
Time : 10:13 Status : 2
Time : 15:10 Status : 1
Time : 10:10 Status : 4
Time : 15:10 Status : 1
Time : 15:10 Status : 1
Time : 15:10 Status : 1
Time : 10:13 Status : 2
Time : 10:13 Status : 2
Time : 10:13 Status : 4
Time : 15:10 Status : 4
```
