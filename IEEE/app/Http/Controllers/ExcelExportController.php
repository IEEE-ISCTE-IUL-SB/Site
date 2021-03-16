<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class ExcelExportController
{
    public function downloadTableXLSX($tablename)
    {
        return DB::table(strtolower($tablename))->get()->downloadExcel($tablename . '_' . time() . '.xlsx', \Maatwebsite\Excel\Excel::XLSX, $headers=true);
    }
}
