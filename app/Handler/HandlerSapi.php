<?php

namespace AsciiShapes\Handler;

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


    public function getConfig()
    {
        return $this->config;
    }


    public function setRequest(Request $request)
    {
        $this->request = $request;

        return $this;
    }

    public function getRequest()
    {
        return $this->request;
    }


    protected function validateSize()
    {
        $this->request->get('size');
    }


    protected function getDefaultSize()
    {
        return $this->config->get('default.size')[array_rand($this->config->get('default.size'))];
    }


    protected function getDefaultAmount()
    {
        return $this->config->get('default.amount');
    }
}