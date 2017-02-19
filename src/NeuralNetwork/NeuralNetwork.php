<?php

declare(strict_types = 1);

namespace NeuralNetwork;

/**
 * Class NeuralNetwork
 *
 * @package NeuralNetwork
 */
class NeuralNetwork
{
    /**
     * @var array
     */
    private $inputNeurons = [];

    /**
     * @var array
     */
    private $outputNeurons = [];

    /**
     * @return WorkingNeuron
     */
    public function createNewOutput(): WorkingNeuron
    {
        return $this->outputNeurons[] = new WorkingNeuron();
    }

    /**
     * @return InputNeuron
     */
    public function createNewInput(): InputNeuron
    {
        return $this->inputNeurons[] = new InputNeuron();
    }

    /**
     * @param \float[] ...$weights
     * @throws \RuntimeException
     * @return void
     */
    public function createFullMesh(float ...$weights)
    {
        if (count($weights) != (count($this->inputNeurons) * count($this->outputNeurons)))
        {
            throw new \RuntimeException();
        }

        $index = 0;

        /** @var WorkingNeuron $wn */
        foreach ($this->outputNeurons as $wn)
        {
            /** @var InputNeuron $in */
            foreach ($this->inputNeurons as $in)
            {
                $wn->addConnection(new Connection($in, $weights[$index++]));
            }
        }
    }
}