<?php


namespace App\classes;


class Calculator
{
    protected $firstNumber;
    protected $lastNumber;
    protected $option;
    protected $result;

    public function __construct($post=null)
    {
        if ($post)
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber  = $post['last_number'];
            $this->option      = $post['option'];
        }
    }

    public function add()
    {
        return $this->firstNumber + $this->lastNumber;
    }

    public function sub()
    {
        return $this->firstNumber - $this->lastNumber;
    }

    public function mul()
    {
        return $this->firstNumber * $this->lastNumber;
    }

    public function div()
    {
        return $this->firstNumber / $this->lastNumber;
    }

    public function mod()
    {
        return $this->firstNumber % $this->lastNumber;
    }

    public function index()
    {
        switch ($this->option)
        {
            case '+';
                $this->result = $this->add();
                break;

            case '-';
                $this->result = $this->sub();
                break;

            case '*';
                $this->result = $this->mul();
                break;

            case '/';
                $this->result = $this->div();
                break;

            case '%';
                $this->result = $this->mod();
                break;
        }
        return $this->result;
    }
}