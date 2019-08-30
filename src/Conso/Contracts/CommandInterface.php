<?php

namespace Conso\Contracts;

/**
 * @author    <contact@lotfio.net>
 *
 * @version   0.2.0
 *
 * @license   MIT
 *
 * @category  CLI
 *
 * @copyright 2019 Lotfio Lakehal
 */
interface CommandInterface
{
    /**
     * execute command method.
     *
     * @param string $subCommand if we have an additional command
     * @param array  $options
     * @param array  $flags
     */
    public function execute(string $subCommand, array $options, array $flags);
}
