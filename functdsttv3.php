<?php
   date_default_timezone_set('Asia/Ho_Chi_Minh');
   $today = date("h");
   $check = substr(strrev(md5($today)), 0 , 1);
   echo $check;