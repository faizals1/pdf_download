<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use PDF;


class PdfController extends Controller
{
    public function generatePDF()
    {
        // $data = [
        //  'name' => "faizal",
        //  'address' => "indore"
 
        // ];
        // return view('index',$data);

        $html = PDF::loadView('index');
        // return $html->download('newfile.pdf');
        return $html->stream("newfile.pdf");      
    }

    function downloadPDF()
    {
        // $data = [
        //     'name' => "faizal",
        //     'address' => "indore"
    
        //    ];
        $html = PDF::loadView('index');
        return $html->download('newfile.pdf');
    }
}
