<?php
function searchBin($file, $key)
{
    $content = file_get_contents($file);
    $records = explode("\x0A",$content);
    foreach ($records as $record) {
      $recordValue = explode("\t",$record);
      if ($recordValue[0] === $key) {
        return $recordValue[1];
      }
    }
    return "undef";
}
