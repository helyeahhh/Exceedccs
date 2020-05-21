<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Crud;

class CsvFile extends Controller
{
	public function csv_export()
	{
		return Excel::download(new CsvExport, 'sample.csv');
	}

    //
}
