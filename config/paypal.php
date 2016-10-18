<?php
return array(
    // set your paypal credential
    'client_id' => 'AdQ13l6Vdy37DUBzzcHEBBO_6vh0zoHVJC_OZg_efLW-EsgzxLt1B2dx_cWXOYgW0L9aohdCi7FAmuR7',
    'secret' => 'EK9wEc0P6cZYzbf_iLOP5M4-mA039mgy7hSPSUHpnvObbTDbM6jsmpifw0iCi47RF329mp5HmdFOXJ4D',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);