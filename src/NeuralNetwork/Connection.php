<?php

declare(strict_types = 1);

namespace NeuralNetwork;

/**
 * Class Connection
 *
 * @package NeuralNetwork
 */
class Connection
{
    /**
     * @var Neuron
     */
    private $neuron;

    /**
     * @var float
     */
    private $weight;

    /**
     * @param Neuron $neuron
     * @param float $weight
     */
    public function __construct(Neuron $neuron, float $weight)
    {
        $this->neuron = $neuron;
        $this->weight = $weight;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->neuron->getValue() * $this->weight;
    }
}