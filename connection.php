<?php
// connection to SQL
    mysql_connect('localhost', 'Matchmakers', '') or die (mysql_error());
    mysql_select_database('matchmakers') or die (mysql_error());
