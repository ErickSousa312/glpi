<?php
class DB extends DBmysql {
   public $dbhost = '10.110.2.254:50778';
   public $dbuser = 'glpi';
   public $dbpassword = 'your-password';
   public $dbdefault = 'glpidb';
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
