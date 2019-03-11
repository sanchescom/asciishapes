<?php

namespace AsciiShapes\Handler;

use AsciiShapes\Shapes\ShapesProvider;
use AsciiShapes\Viewer\ViewerFactory;
use Noodlehaus\Config;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class HandlerSapi
 * @package AsciiShapes\Handler
 */
abstract class ApplicationHandler
{
    /**
     * @var string
     */
    const SIZE_ARGUMENT = 'size';

    /**
     * @var string
     */
    const AMOUNT_ARGUMENT = 'amount';

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var Request
     */
    protected $request;


    /**
     * Init passed setting and calling viewing function
     * @return void
     */
    abstract public function init();

    /**
     * @return ApplicationHandler
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @param Config $config
     * @return ApplicationHandler
     */
    public function setConfig(Config $config): ApplicationHandler
    {
        $this->config = $config;

        return $this;
    }

    /**
     * @param Request $request
     * @return ApplicationHandler
     */
    public function setRequest(Request $request): ApplicationHandler
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return string
     */
    protected function getDefaultSize(): string
    {
        $defaultSize = $this->config->get('default.size');

        return $defaultSize[array_rand($defaultSize)];
    }

    /**
     * @return int
     */
    protected function getDefaultAmount(): int
    {
        return $this->config->get('default.amount');
    }

    /**
     * @param $size
     * @param $amount
     */
    protected function view($size, $amount)
    {
        foreach (ShapesProvider::boot($size, $amount) as $shape) {
            ViewerFactory::create($this->request)->draw($shape);
        }
    }
}
