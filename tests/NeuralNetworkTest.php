<?php

declare(strict_types = 1);

namespace NeuralNetwork\Tests;

use NeuralNetwork\NeuralNetwork;
use PHPUnit\Framework\TestCase;

class NeuralNetworkTest extends TestCase
{
    public function testSingleLayerPerceptron()
    {
        $nn = new NeuralNetwork();

        $i1 = $nn->createNewInput();
        $i2 = $nn->createNewInput();
        $i3 = $nn->createNewInput();
        $i4 = $nn->createNewInput();

        $i1->setValue(1);
        $i2->setValue(2);
        $i3->setValue(3);
        $i4->setValue(4);

        $o1 = $nn->createNewOutput();

        $nn->createFullMesh(0, 0, 0, 0);

        $this->assertEquals(0, $o1->getValue());
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testSingleLayerPerceptronException()
    {
        $nn = new NeuralNetwork();

        $nn->createFullMesh(0, 0, 0, 0);

        $this->expectException(\RuntimeException::class);
    }
}