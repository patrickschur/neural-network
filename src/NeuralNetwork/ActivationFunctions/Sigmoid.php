<?php

declare(strict_types = 1);

namespace NeuralNetwork\ActivationFunctions;

/**
 * Class Sigmoid
 *
 * @package NeuralNetwork\ActivationFunctions
 */
class Sigmoid implements ActivationFunction
{
    /**
     * Returns a value between 0 and 1
     *
     * @param float $input
     * @return float
     */
    public function activation(float $input): float
    {
        return 1 / (1 + M_E ** -$input);
    }
}