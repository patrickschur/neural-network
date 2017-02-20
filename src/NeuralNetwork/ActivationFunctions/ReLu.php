<?php

declare(strict_types = 1);

namespace NeuralNetwork\ActivationFunctions;

/**
 * Class ReLu (Rectifier Linear Unit)
 *
 * @package NeuralNetwork\ActivationFunctions
 */
class ReLu implements ActivationFunction
{
    /**
     * Returns 0 if the value is less than or equal to 0, otherwise the input itself
     *
     * @param float $input
     * @return float
     */
    public function activation(float $input): float
    {
        return max(0, $input);
    }
}