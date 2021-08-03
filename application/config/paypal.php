<?php

/** set your paypal credential **/

// Sandbox Lavani
//$config['client_id'] = 'ASU1bGQBY5XhzDWJXVw674zQMTFjjKsKzzmjDclsL3XhaoXLhDw8aqIh2TJegyehPbmIznbeq7r-uJa3';
//$config['secret'] = 'ECJs20Vw5tPXam959nTY7HneKjyKNH-JkjJeawPmPgrkmJPp881RIYqUBEEG70j9zD5zchIE840g8r47';
//Sandbox fahad test
$config['client_id'] = 'AUWtAzfN2dEQtOIZOWm14iNPYD7P6zob1i7tfUmD-Ii0B54Hfbu9mTlhA_7r5FG7WPtuSM99Pw71gBfv';
$config['secret'] = 'EKVvf3QfL2OROjhfJPu5wPgreD_s9oF7Sir0cyo1w20ZiM7F3FrJsW5ObhzvY0oVUIPSxxSdUc5c1MN9';

////
// Live
//$config['client_id'] = 'AUDMRQeMeS5j0cvpXkWI2pY_A5i3B7J1N3AA28IDbD5uiMDSp_B5zxirP7MkaEO7AjODi0-STSA1T9SL';
//$config['secret'] = 'EGMSEKGsqPRhOU3Ada9LPYQeU03e2t50-00Iiq4vcIHXhyv3Ip9D9LRfHuNHgTAQUAK-rvbxMT0ZimRU';


//fahad live
//$config['client_id'] = 'AbNwD0mMxidDoJMD9zW5pQd4nje5tKqwXWLUSM8y6syXkfzV7XDS7tjf0G-MIrQzf0kp3tV-Z_9_k0vv';
//$config['secret'] = 'EMg545HxMBO3Ljm2Tup33HdoOkeJ43K5wb5OB-6dCg6bRl5I-ujpJFDseKFV0rJ3DtjWgVmKGyDs-wW_';
/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'sandbox',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => true,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);

?>
