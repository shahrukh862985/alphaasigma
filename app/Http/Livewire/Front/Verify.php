<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\ProductCode;
class Verify extends Component
{
    public $product_code;

    protected $rules = [
        'product_code' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.front.verify');
    }
    public function submit()
    {
        $this->validate();
        $productCode = ProductCode::where('code',$this->product_code)->first();
        if($productCode)
        {
            if($productCode->is_verified == 0)
            {
                session()->flash('message', ['style_class' => 'alert-success','text'=>'Thank you for Verification. Your product is Original.']);
                $productCode->is_verified = 1;
                $productCode->save();
                $this->resetField();
            }
            else
            {
                session()->flash('message', ['style_class' => 'alert-danger','text'=>'The security code you entered does not exist. We are sorry, but it seems your product is fake. Kindly help us stop counterfeit products by reporting immediately. Thank you!']);
            }
        }else
        {
            session()->flash('message', ['style_class' => 'alert-danger','text'=>'The security code you entered does not exist. We are sorry, but it seems your product is fake. Kindly help us stop counterfeit products by reporting immediately. Thank you!']);
        }

    }
    private function resetField()
    {
        $this->product_code = '';
    }
}
