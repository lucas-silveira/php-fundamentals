<?php

  var_dump((int) 6.8); // int(6)
  var_dump((float) 6); // float(6)
  var_dump(intval(2.333)); // int(2)
  var_dump(3 + "2"); // int(5)
  var_dump(3 + "2.4"); // float(5.4)
  var_dump(3 . "2"); // string(2) "32"
  print(is_string("3")); // 1 (true)
