<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Barcode extends Component
{
    public $barcode;
    public $data;
    public $errMessage='';

    public function mount(){
        $this->data=[
            "status"=>201,
            "message"=>"Shtrixkod oqiting"
        ];
    }
    public function search(){
       // dd($this->barcode);
       $res = Http::withHeaders([
        'Authorization' => 'Basic cHJpY2U6cHJpY2U=',
        'Accept' => 'application/json'
    ])->get('localhost/base25/hs/km/'.$this->barcode);
    //dd($res->status());
    if($res->status()==200){
            $jsonData=$res->json();
            $this->data=$jsonData;
            
            
            //dd($companies);
    } else{
        //dd($res->json());
        $this->errMessage="error";
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
