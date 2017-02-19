<?php

declare(strict_types = 1);

namespace NeuralNetwork\ActivationFunctions;

/**
 * Class Identity
 *
 * @package NeuralNetwork\ActivationFunctions
 */
class Identity implements ActivationFunction
{
    /**
     * Returns the input
     *
     * @param float $input
     * @return float
     */
    public function activation(float $input): float
    {
        return $input;
    }
}