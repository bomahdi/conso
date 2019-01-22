<?php namespace Conso\Contracts;

/**
 * 
 * @author    <contact@lotfio.net>
 * @package   Conso PHP Console Creator
 * @version   0.1.0
 * @license   MIT
 * @category  CLI
 * @copyright 2019 Lotfio Lakehal
 */

interface CommandInterface
{ 
    /**
     * execute command method
     *
     * @param  string $subCommand if we have an additional command
     * @param  array  $options
     * @param  array  $flags
     * @return void
     */
    public function execute($subCommand, $options, $flags);
}