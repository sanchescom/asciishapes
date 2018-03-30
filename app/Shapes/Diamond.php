<?php

namespace AsciiShapes\Shapes;

class Diamond extends Shape
{
	protected static $start_step  = 0;

	protected static $small_size  = 5;
	protected static $medium_size = 7;
	protected static $large_size  = 11;


	protected static function getStep($name): int
	{
		$previous_size = self::getPreviousSize($name);

		if ($previous_size)
		{
			return self::getSize($name) - $previous_size;
		}

		return static::$start_step;
	}


	public function build($size): void
	{
		$stack  = [];
		$lines  = self::getSize($size);
		$length = $lines + self::getStep($size);
		$middle = round($lines / 2);

		$prefix  = "  ";
		$postfix = "  ";

		for ($i = 1; $i <= $middle; $i++)
		{
			if ($i == 2)
			{
				$prefix .= " ";
			}

			$string = $prefix;

			for ($j = 0; $j < $length; $j++)
			{
				$char = "";

				if ($i == 1)
				{
					if ($j == 0)
					{
						$char .= "+";
					}
				}

				$char .= ($i == $middle ? "+" : "X");

				if ($i == 1)
				{
					if ($j == $length - 1)
					{
						$char .= "+";
					}
				}

				$string .= $char;
			}

			if ($i == 2)
			{
				$postfix .= " ";
			}

			$string .= $postfix;

			if ($i != ($middle - 1))
			{
				$length -= 4;

				if ($length < 0)
				{
					$length = 1;

					$prefix  .= " ";
					$postfix .= " ";
				}
				else
				{
					$prefix  .= "  ";
					$postfix .= "  ";
				}
			}

			$stack[] = $string;
		}
		$middle_row = array_shift($stack);

		$this->shape_parts = array_merge(
			array_reverse($stack),
			array_merge([
				$middle_row,
			], $stack)
		);
	}
}