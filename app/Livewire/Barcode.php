<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Barcode extends Component
{
    public $barcode;
    public $body='';
    public function search(){
       // dd($this->barcode);
       $res = Http::withHeaders([
        'Authorization' => 'Basic cHJpY2U6cHJpY2U=',
        'Accept' => 'application/json'
    ])->get('localhost/base/hs/km/'.$this->barcode);
    dd($res);
    if($res->status()==200){
            $jsonData=$res->json();
            dd($jsonData);
            
            
            //dd($companies);
    } 
       
       
       $this->reset('barcode');

    }


    //{ "status": 200, 
    //    "message": 
    //{ "code": 911, "name": "SN_CHORTOQ 0.5 L ST", "partner": "", 
    //"prices": [ { "name": "Закупочная", "value": 7333.33 }, { "name": "Розничная", "value": 10000 } ],
    //"stock": [ { "name": "SAVDO ZALI", "value": 351 }, { "name": "Markaziy Ombor", "value": 215 } ] } }


    public function render()
    {
        return view('livewire.barcode');
    }
}
