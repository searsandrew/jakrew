<?php

namespace App\Models;

use Square\Server;
use Square\SquareClient;
use Square\ConfigurationDefaults;

class Square extends SquareClient
{
    public function __construct() {
        $configOptions = [];
        $squareOptions = [
            'timeout' => 'SQUARE_TIMEOUT',
            'squareVersion' => 'SQUARE_VERSION',
            'accessToken' => 'SQUARE_TOKEN',
            'additionalHeaders' => 'SQUARE_ADDITIONAL_HEADER',
            'environment' => 'SQUARE_ENVIRONMENT',
        ];

        foreach($squareOptions as $option => $variable)
        {
            if(getenv($variable))
            {
                $configOptions[$option] = getenv($variable);
            }
        }
        
        parent::__construct($configOptions);
    }

    /**
     * Get the base uri for a given server in the current environment
     *
     * @param  string $server Server name
     *
     * @return string         Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        if(getenv('SQUARE_ENVIRONMENT') == 'Enviroment::PRODUCTION')
        {
            return 'https://connect.squareup.com';
        }

        return 'https://connect.squareupsandbox.com';
    }
    
}
