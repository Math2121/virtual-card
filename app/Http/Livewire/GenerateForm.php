<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GenerateForm extends Component
{
    public  $name;
    public  $linkedin;
    public  $github;

    protected $rules = [
        'name' => 'required',
        'linkedin' => 'required|url',
        'github' => 'required|url',
    ];
    protected $messages = [
        'name.required' => 'The name is required.',
        'linkedin.required' => 'The linkedin URL is required.',
        'github.required' => 'The Github URL is required.',
        'github.url' => 'The URL is invalid.',
        'linkedin.url' => 'The URL is invalid.',
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        return view('livewire.generate-form');
    }
    public function createQRCode(){
        $validatedData = $this->validate();


        return redirect()->route('qrcode', ['params' => $validatedData]);
    }
}