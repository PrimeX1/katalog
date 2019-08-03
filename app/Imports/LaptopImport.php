<?php

namespace App\Imports;

use App\laptop;
use App\Mlaptop;
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

class LaptopImport  implements ToCollection,WithMultipleSheets
{   
    //to validate only sheet 1 can be imported
    public function sheets(): array
    {
        return [
            0 => new LaptopImport()
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
             '*.9' => 'required|max:50',
             '*.10' => 'required|max:50',
             '*.11' => 'required|max:50',
             '*.12' => 'required|max:50',
               '*.13' => 'required|max:50',
               
        ])->validate();

        foreach ($rows as $row) 
        {   //mengirim data dari excel ke tabel detail_laptop dengan pengecekan
            Mlaptop::create([
            'id_merk'=>MGlobal::get_id_merk($row[0])==0 ? MGlobal::get_zero_merk($row[0]) : MGlobal::get_id_merk($row[0]) ,
            'tipe'=>$row[1],
            'color' =>$row[2],
            'kategori'=>strtolower($row[3])=="gaming" ? 2 : strtolower($row[3])=="office" ? 1 : null ,
            'kd_procesor'=>MGlobal::get_kd_procesor($row[4])==0 ? MGlobal::get_zero_procesor($row[4]) : MGlobal::get_kd_procesor($row[4]) ,
            'kd_hdd'=>MGlobal::get_kd_hdd($row[7])==0 ? MGlobal::get_zero_hdd($row[7]) : MGlobal::get_kd_hdd($row[7]) ,
            'kd_ram_laptop'=>MGlobal::get_kd_ram_laptop($row[6])==0 ? MGlobal::get_zero_ram($row[6]) : MGlobal::get_kd_ram_laptop($row[6]) ,
            'kd_vga'=>MGlobal::get_kd_vga($row[5])==0 ? MGlobal::get_zero_vga($row[5]) : MGlobal::get_kd_vga($row[5]) ,
            'kd_os'=>MGlobal::get_kd_os($row[8])==0 ? MGlobal::get_zero_os($row[8]) : MGlobal::get_kd_os($row[8]) ,
            'odd'=>strtolower($row[9])=="odd" ? 1 : 2 ,
            'layar'=>$row[10],
            'H1'=>$row[11],
            'H2'=>$row[12],
            'H3'=>$row[13],
            'aksesoris'=>$row[14],
            ]);
        }
    }
}

           