<?php

declare(strict_types = 1);

namespace NeuralNetwork;

/**
 * Class Neuron
 *
 * @package NeuralNetwork
 */
abstract class Neuron
{
    /**
     * @return float
     */
    abstract public function getValue(): float;
}