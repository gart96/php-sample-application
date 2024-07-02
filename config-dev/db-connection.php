<?php

return new PDO("mysql:host=database;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
