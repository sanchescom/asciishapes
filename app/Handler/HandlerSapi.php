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
	const CONTENT_TYPE_HTML = 'html';

	protected $config;
	protected $request;


	abstract public function apply();


	public function setConfig(Config $config): HandlerSapi
	{
		$this->config = $config;

		return $this;
	}


	public function getConfig(): Config
	{
		return $this->config;
	}


	public function setRequest(Request $request): HandlerSapi
	{
		$this->request = $request;

		return $this;
	}


	public function getRequest() : Request
	{
		return $this->request;
	}


	protected function display($size, $amount): void
	{
		$shapes = ShapesProvider::boot();

		if ($this->request->getContentType() == self::CONTENT_TYPE_HTML)
		{
			echo '<pre>';
		}

		foreach ($shapes as $shape)
		{
			/**
			 * @var $instance Shape
			 */
			$instance = (new $shape());
			$instance->build($size);
			$instance->draw($amount);

			echo PHP_EOL;
		}

		if ($this->request->getContentType() == self::CONTENT_TYPE_HTML)
		{
			echo '</pre>';
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