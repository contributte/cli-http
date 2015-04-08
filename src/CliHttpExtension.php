<?php

namespace Minetro\Bridges;

use Nette\DI\CompilerExtension;
use Nette\DI\Statement;

/**
 * Cli HTTP Extension
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
final class CliHttpExtension extends CompilerExtension
{

    /** @var array */
    private $defaults = [
        'url' => NULL,
        'query' => NULL,
        'post' => NULL,
        'files' => NULL,
        'cookies' => NULL,
        'headers' => NULL,
        'method' => NULL,
        'remoteAddress' => NULL,
        'remoteHost' => NULL,
        'rawBodyCallback' => NULL,
    ];

    /**
     * @param mixed $url
     */
    public function __construct($url = NULL)
    {
        $this->defaults['url'] = $url;
    }

    /**
     * Adjusts DI container before is compiled to PHP class. Intended to be overridden by descendant.
     *
     * @override
     */
    public function beforeCompile()
    {
        // Breaks at other mode then CLI
        if (PHP_SAPI != 'cli') return;

        // Validate config
        $config = $this->validateConfig($this->defaults);

        // Get builder
        $builder = $this->getContainerBuilder();

        // Remove old definition
        $builder->removeDefinition('http.request');

        // Add new one
        $builder->addDefinition('http.request')
            ->setClass('Nette\Http\Request', [
                new Statement('Nette\Http\UrlScript', [$config['url']]),
                $config['query'],
                $config['post'],
                $config['files'],
                $config['cookies'],
                $config['headers'],
                $config['method'],
                $config['remoteAddress'],
                $config['remoteHost'],
                $config['rawBodyCallback'],
            ]);
    }
}
