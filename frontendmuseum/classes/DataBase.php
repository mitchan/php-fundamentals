<?php
class DataBase
{
  function execute($query)
  {
    $db = new SQLite3('./data/data.db');
    $result = $db->query($query);

    if ($result) {
      //      return $result->fetchArray(SQLITE3_ASSOC);
      $all = [];
      while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        array_push($all, $row);
      }
      return $all;
    }
  }
}
