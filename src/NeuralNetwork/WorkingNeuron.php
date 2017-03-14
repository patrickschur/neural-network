<?php

declare(strict_types = 1);

namespace NeuralNetwork;

use NeuralNetwork\ActivationFunctions\ActivationFunction;

/**
 * Class WorkingNeuron
 *
 * @package NeuralNetwork
 */
class WorkingNeuron extends Neuron
{
    /**
     * @var array
     */
    private $connections = [];

    /**
     * @var ActivationFunction
     */
    private $activationFunction;

    public function __construct(ActivationFunction $activationFunction)
    {
        $this->activationFunction = $activationFunction;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        $sum = 0;

        /** @var Connection $connection */
        foreach ($this->connections as $c)
        {
            $sum += $c->getValue();
        }

        return $this->activationFunction->activation($sum);
    }

    /**
     * @param Connection $c
     */
    public function addConnection(Connection $c)
    {
        $this->connections[] = $c;
    }
}