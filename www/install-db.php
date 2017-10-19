<?php

require_once 'init.php';

db()->query(file_get_contents('data/create.sql'));
db()->query(file_get_contents('data/insert.sql'));

echo "Done!";
