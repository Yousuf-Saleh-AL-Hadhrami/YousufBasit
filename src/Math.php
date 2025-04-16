<?php 

namespace Yousufbasit\Math;

class Math 
{
    public $numbers = [];
    public $sum = 0;
    public $avg;
    public $max;
    public $min;

    public function setNumbers($numbers)
    {
        $this->numbers = $numbers;
        return $this;
    }

    public function add()
    {
        foreach ($this->numbers as $number)
        {
            $this->sum += $number;
        }

        return $this;
    }

    public function subtract()
    {
        foreach ($this->numbers as $number)
        {
            $this->sum -= $number;
        }

        return $this;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function getAverage()
    {
        if (count($this->numbers) === 0) {
            return 0;
        }

        $this->avg = array_sum($this->numbers) / count($this->numbers);
        return $this->avg;
    }

    public function getMax()
    {
        $this->max = max($this->numbers);
        return $this->max;
    }

    public function getMin()
    {
        $this->min = min($this->numbers);
        return $this->min;
    }
}

