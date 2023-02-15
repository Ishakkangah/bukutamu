<?php

namespace App\Exports;

use App\Models\bukutamu;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class cetakPengunjungBerdasakanHariIni implements FromView, WithEvents, WithDrawings
{
    public function view(): View
    {
        $bukutamus = bukutamu::whereDate('created_at', Carbon::now())->latest()->get();
        return view('bukutamu.exportExcel
        ', compact('bukutamus'));
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getDelegate()->setRightToLeft(false);
            },
        ];
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/img/kominfo.png'));
        $drawing->setHeight(30);
        $drawing->setCoordinates('A1');


        return $drawing;
    }
}
