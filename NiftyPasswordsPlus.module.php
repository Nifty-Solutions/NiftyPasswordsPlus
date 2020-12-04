<?php declare(strict_types=1);

namespace NiftySolutions;

use Processwire\WireData;
use Processwire\Module;
use Processwire\ConfigurableModule;

class NiftyPasswordsPlus extends WireData implements Module, ConfigurableModule
{
    public static function getModuleInfo() {
        return [
            'name'        => 'NiftyPasswordsPlus',
            'title'       => 'Nifty Solutions Password Reset Extensions',
            'author'      => 'Netcarver & Pete of Nifty Solutions',
            'summary'     => 'Extends the ProcessForgotPassword module with additional config options and abilities.',
            'version'     => '1.4.1',
            'autoload'    => true,
            'singular'    => true,
            'permanent'   => false,
            'requires'    => [
                'ProcessWire>3.0.33',
                'PHP>=7.2.0',
                'ProcessForgotPassword',
                'InputfieldSelect',
                'NiftyHashedTokens>=1.1.0',
            ],
        ];
    }
}
