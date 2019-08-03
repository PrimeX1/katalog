<?php

namespace App\Imports;

use App\laptop;
use App\Mlaptop;
use App\MProyektor;
use App\Mhdd;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\MGlobal;

class proyektorImport  implements ToCollection,WithMultipleSheets
{   
    //to validate only sheet 1 can be imported
    public function sheets(): array
    {
        return [
            0 => new proyektorImport()
        ];
    }
    //to validate row can't null
    public function collection(Collection $rows)
    {
        

        Validator::make($rows->toArray(), [
            '*.0' => 'required|max:50',
            '*.1' => 'required|max:50',
            '*.2' => 'required|max:50',
            '*.3' => 'required|max:50',
            '*.4' => 'required|max:50',
            '*.5' => 'required|max:50',
            '*.6' => 'required|max:50',
            '*.7' => 'required|max:50',
            '*.8' => 'required|max:50',
        ])->validate();

        foreach ($rows as $row) 
        {   //mengirim data dari excel ke tabel detail_proyektor dengan pengecekan
            MProyektor::create([
            'kd_merk'=>MGlobal::get_merk_pro($row[0])==0 ? MGlobal::get_add_merk($row[0]) : MGlobal::get_merk_pro($row[0]) ,
            'model' =>$row[1],
            'kd_tipe_pro'=>MGlobal::get_tipe_pro($row[2])==0 ? MGlobal::get_add_tipe($row[2]) : MGlobal::get_tipe_pro($row[2]) ,
            'kd_ktg_proyek'=>MGlobal::get_kd_ktg_proyektor($row[3])==0 ? MGlobal::get_add_ktg($row[3]) : MGlobal::get_kd_ktg_proyektor($row[3]) ,
            'kd_jenis_pro'=>MGlobal::get_kd_jenis_pro($row[4])==0 ? MGlobal::get_add_jenis($row[4]) : MGlobal::get_kd_jenis_pro($row[4]) ,
            'kd_int_pro'=>MGlobal::get_kd_int_pro($row[5])==0 ? MGlobal::get_add_int($row[5]) : MGlobal::get_kd_int_pro($row[5]),
            'H1'=>$row[6],
            'H2'=>$row[7],
            'H3'=>$row[8],
            'detail_pro'=>$row[9] ,
            ]);
        }
    }
}

           