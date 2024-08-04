<?php

namespace App\Livewire\RSVP;

use Livewire\Component;

class Index extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone_number = '';
    public int $number_of_guest = 0;
    public int $status = 0;
    public function submit()
    {
        $submitedData = [
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'number_of_guest' => $this->number_of_guest,
        ];

        $this->dispatch('rsvp-submitted');
    }
    public function render()
    {
        return view('livewire.r-s-v-p.index');
    }
}
