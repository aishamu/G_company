<?php

namespace App\Http\Controllers;

use DB;
use Excel;
use Illuminate\Http\Request;
use App\Employee;
use App\AjaxImage;


class ImportExcelController extends Controller
{

    public function index()
    {
        $data = DB::table('table_employees')->orderBy('id', 'DESC')->get();
        return view('import_excel', compact('data'));
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'select_file' => 'required|mimes:xls,xlsx']);

        $path = $request->file('select_file')->getRealPath();
        $data = Excel::load($path)->get();

        if ($data->count() > 0) {
            $insert_data=[];
            foreach ($data->toArray() as $key => $value) {
                if (isset($value)) {
                            $insert_data[]=$value;
                    }

            }
            if (!empty($insert_data)) {
                DB::table('table_employees')->insert($insert_data);
                return back()->with('success', 'Excel Data Imported successfully.');
            }
        }

    }
}

 ?>
