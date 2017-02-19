<?php

declare(strict_types = 1);

namespace NeuralNetwork;

/**
 * Class InputNeuron
 *
 * @package NeuralNetwork
 */
class InputNeuron extends Neuron
{
    /**
     * @var int
     */
    private $value = 0;

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return void
     */
    public function setValue(float $value)
    {
        $this->value = $value;
    }
}