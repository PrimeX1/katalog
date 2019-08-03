<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use App\Mlog;
use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;
class cetakcontrol extends Controller
{
    function cetak($id){
        $user= User::where("id",$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        $barcode = new BarcodeGenerator();
        $barcode->setText($id);
        $barcode->setType(BarcodeGenerator::Code128);
        $barcode->setScale(2);
        $barcode->setThickness(25);
        $barcode->setFontSize(10);
        $code = $barcode->generate();
        //echo '<img src="data:image/png;base64,'.$code.'" />';
         return view('cetak',compact('user','log','code'));
    }
    


}
