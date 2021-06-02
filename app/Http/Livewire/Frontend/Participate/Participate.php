<?php

namespace App\Http\Livewire\Frontend\Participate;

use Livewire\Component;
use App\Models\Contribute;

class Participate extends Component
{
    public $name;
    public $phone;
    public $address;
    public $text;

    public function send()
    {
        $this->validate([
            'name' => 'required|string|max:150',
            'phone' => 'required|string|max:150',
            'address' => 'required|string|max:150',
            'text' => 'required|string|max:400',
        ],messages());
        Contribute::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'address' => $this->address,
            'text' => $this->text,
        ]);
        $this->resetErrorBag();
        $this->reset();
        session()->flash('success', __('app.message_sent'));
    }

    public function render()
    {
        return view('livewire.frontend.participate.participate');
    }
}
