<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_outlet;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomerExport;
use PDF;

class controllerbaru extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $outletcustomer = model_outlet::all();
        return view('tabel', ['outletcustomer' => $outletcustomer]);

    }

    public function index1()
    {

        $outletcustomer = model_outlet::all();
        return view('detailcustomer', ['outletcustomer' => $outletcustomer]);

    }

    public function root()
    {

        $count = model_outlet::all();
        return view('/index', ['count' => $count]);

    }

      public function export_excel()
	   {
		return Excel::download(new CustomerExport, 'customer.xlsx');
	   }

     public function exportPDF()
     {

         $outletcustomer = model_outlet::all();

         $pdf = PDF::loadView('detailcustomer', ['outletcustomer' => $outletcustomer]);

         return $pdf->download('customer.pdf');

       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data=array(

        'nama' => $request->input('nama'),
        'alamat' => $request->input('alamat'),
        'aktifitas' => $request->input('aktifitas'),
        'hp' => $request->input('hp'),
        'instagram' => $request->input('instagram'),
        'facebook' => $request->input('facebook'),
        'minat' => $request->input('minat'),
        'info' => $request->input('info'),
        'tgl_janji' => $request->post('tgl_janji'),
        'tgl_kunjung' => $request->post('tgl_kunjung')


      );

      model_outlet::create($data);
    return redirect('tabel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(model_outlet $outletcustomer)
       {
           return view('editcustomer', compact('outletcustomer'));
       }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, model_outlet $outletcustomer)
     {
         model_outlet::where('id', $outletcustomer->id)
         ->update([
             'nama' => $request->nama,
             'alamat' => $request->alamat,
             'aktifitas' => $request->aktifitas,
             'hp' => $request->hp,
             'instagram' => $request->instagram,
             'facebook' => $request->facebook,
             'minat' => $request->minat,
             'info' => $request->info,
             'tgl_janji' => $request->tgl_janji,
             'tgl_kunjung' => $request->tgl_kunjung,

         ]);
         return redirect('/tabel');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(model_outlet $outletcustomer)
     {
         model_outlet::destroy($outletcustomer->id);
         return redirect('tabel');
     }
}
