<?php
    function logMessage($message, $type='info', $logFileName='main.log') {
        // if log file or directory doesn't exist, create them
        if (!file_exists(ABSPATH . 'logs')) {
            mkdir(ABSPATH . 'logs', 0777, true);
        }

        // write log message to log file
        $logFile = fopen(ABSPATH . 'logs/' . $logFileName, 'a');
        $timestamp = date('Y-m-d H:i:s');
        fwrite($logFile, $timestamp . " -- " . $type . " -- " . $message . "\n");
        fclose($logFile);
    }