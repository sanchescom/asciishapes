<?php

namespace AsciiShapes\Handler;

use AsciiShapes\Shapes\Shape;
use AsciiShapes\Shapes\ShapesProvider;
use Noodlehaus\Config;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class HandlerSapi
 *
 * @property Config $config
 * @property Request $request
 *
 * @package AsciiShapes\Handler
 */
abstract class HandlerSapi
{
    protected $config;
    protected $request;

	abstract public function apply();

	public function setConfig(Config $config)
    {
        $this->config = $config;

        return $this;
    }


    public function getConfig(): Config
    {
        return $this->config;
    }


    public function setRequest(Request $request)
    {
        $this->request = $request;

        return $this;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }


    protected function display($size, $amount)
    {
        $shapes = ShapesProvider::boot();

        foreach ($shapes as $shape)
        {
            /**
             * @var $instance Shape
             */
            $instance = (new $shape);
            $instance->build($size, $amount);

            echo PHP_EOL;
        }
    }


    protected function getDefaultSize(): string
    {
        return $this->config->get('default.size')[array_rand($this->config->get('default.size'))];
    }


    protected function getDefaultAmount(): int
    {
        return $this->config->get('default.amount');
    }
}