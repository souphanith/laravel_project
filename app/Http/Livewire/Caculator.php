<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Caculator extends Component
{
    public $number1 = 0;
    public $number2 = 0;
    public string $action = '+';
    public $result = 0;
    public bool $disabled = false;


    public function render()
    {
        return view('livewire.caculator');
    }

    public function caculate()
    {
        $num1 = (float)$this->number1;
        $num2 = (float)$this->number2;
        if($this->action === '-'){
            $this->result = $num1 - $num2;
        }
        else if($this->action === '+'){
            $this->result = $num1 + $num2;
        }
        else if($this->action === '*'){
            $this->result = $num1 * $num2;
        }
        else if($this->action === '/'){
            $this->result = $num1 / $num2;
        }
        else if($this->action === '%'){
            $this->result = $num1 / 100 * $num2;
        }
    }

    public function update($property)
    {
        if ($this->number1 = '' || $this->number2 = ''){
            $this->disabled = true;
        }
        else{
            $this->disabled = false;
        }
    }
}
