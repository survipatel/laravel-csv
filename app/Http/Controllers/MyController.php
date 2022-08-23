<?php
     
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
//use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
    
class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importView()
    {
       return view('import');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
   
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
             
        return back();
    }


//class CsvImportRequest extends FormRequest
//{
  //  public function authorize()
    //{
      //  return true;
    //}

    //public function rules()
    //{
      //  return [
        //    'csv_file' => 'required|file'
        //];
    //}
//}


//public function parseImport(CsvImportRequest $request)
//{
   // $path = $request->file('csv_file')->getRealPath();
    //$data = array_map('str_getcsv', file($path));
    //$csv_data = array_slice($data, 0, 2);
    //return view('import_fields', compact('csv_data'));
//}

}