<?php
  $HOST = "127.0.0.1";
  $DATABASE = "ce299";
  $USER = "root";
  $PASSWORD = "";
  $PORT = "3306";

  $TIMEFRAME = "30";
  
	$command_exec = escapeshellcmd('python\ScanVisualisation.py '.$TIMEFRAME.' '.$HOST.' '.$DATABASE.' '.$PORT.' '.$USER.' '.$PASSWORD);
  $str_output = shell_exec($command_exec);

  $command_exec = escapeshellcmd('python\ReaderVisualization.py '.$TIMEFRAME.' '.$HOST.' '.$DATABASE.' '.$PORT.' '.$USER.' '.$PASSWORD);
  $str_output = shell_exec($command_exec);
  
  $command_exec = escapeshellcmd('python\DepartmentVisualization.py '.$TIMEFRAME.' '.$HOST.' '.$DATABASE.' '.$PORT.' '.$USER.' '.$PASSWORD);
  $str_output = shell_exec($command_exec);
  
  $command_exec = escapeshellcmd('python\DepartmentVisualization2.py '.$TIMEFRAME.' '.$HOST.' '.$DATABASE.' '.$PORT.' '.$USER.' '.$PASSWORD);
  $str_output = shell_exec($command_exec);

  $command_exec = escapeshellcmd('python\ScanAI_v5.py '.$HOST.' '.$DATABASE.' '.$PORT.' '.$USER.' '.$PASSWORD);
  $str_output = shell_exec($command_exec);

  $command_exec = escapeshellcmd('python\UserVisualisation.py '.$HOST.' '.$DATABASE.' '.$PORT.' '.$USER.' '.$PASSWORD);
  $str_output = shell_exec($command_exec);

  $command_exec = escapeshellcmd('python\ReaderAI.py '.$HOST.' '.$DATABASE.' '.$PORT.' '.$USER.' '.$PASSWORD);
  $str_output = shell_exec($command_exec);
  
?>