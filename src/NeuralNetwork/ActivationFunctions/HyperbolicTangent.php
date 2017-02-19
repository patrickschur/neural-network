<?php

declare(strict_types = 1);

namespace NeuralNetwork\ActivationFunctions;

/**
 * Class HyperbolicTangent
 *
 * @package NeuralNetwork\ActivationFunctions
 */
class HyperbolicTangent implements ActivationFunction
{
    /**
     * Returns the hyperbolic tangent of input, a value between -1 and 1
     *
     * @param float $input
     * @return float
     */
    public function activation(float $input): float
    {
        return tanh($input);
    }
}