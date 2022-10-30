<?php

namespace App\Http\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode as FacadesQrCode;

class QRCode extends Component
{
    public $params;
    public string $qrCode;
    public function mount($params)
    {
        $this->params = $params;
        $url = url('/') . '/' . $this->params;

        $this->qrCode = $url;
        return view('livewire.q-r-code');
    }
}