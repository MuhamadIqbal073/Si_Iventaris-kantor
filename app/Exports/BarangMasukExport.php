<?php

namespace App\Exports;

use App\Models\Barangmasuk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithDrawings;

class BarangMasukExport implements FromView, ShouldAutoSize, WithDrawings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    

    public function view(): View
    {
        return view('pages.laporanmasuk.print', [
            'barangmasuk' => Barangmasuk::all()
        ]);
    }

    public function drawings()
    {
        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo');
        $drawing->setPath(public_path('/images/bkl.png'));
        $drawing->setHeight(70);

        return $drawing;
    }
}
