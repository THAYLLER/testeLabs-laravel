<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DocFiscal;

class DocFiscalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DocFiscal::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        DocFiscal::create($request->all());

        return $request->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

    * public function store(Request $request)
    * {

    * }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DocFiscal::find($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showKey($chave)
    {
        return DocFiscal::all()->where("Chave", $chave);
    }
    public function showIntervalDateAndType($dataDe,$dataAte,$tipo)
    {
        return DocFiscal::all()
                ->where("Tipo", $tipo)
                ->whereBetween('created_at',[$dataDe,$dataAte]);
    }
    public function showStatus($status)
    {
        return DocFiscal::all()->where("Status", strtoupper($status));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

    * public function edit($id)
    * {

     *}
    */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DocFiscal::find($id)->update($request->all());

        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DocFiscal = DocFiscal::find($id)->delete();
    }
}
