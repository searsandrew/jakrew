<?php

namespace App\Http\Controllers;

use App\Models\Browse;
use App\Models\Square;
use Illuminate\Http\Request;

class BrowseController extends Controller
{
    private $catalog;

    public function __construct()
    {
        $client = new Square();
        $this->catalog = $client->getCatalogApi();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiResponse = $this->catalog->listCatalog();

        if ($apiResponse->isSuccess()) {
            $listCatalogResponse = $apiResponse->getResult();
        } else {
            $errors = $apiResponse->getErrors();
        }

        dd($listCatalogResponse);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Browse  $browse
     * @return \Illuminate\Http\Response
     */
    public function show(Browse $browse)
    {
        // $catalogApi = 

        // $apiResponse = $catalogApi->retrieveCatalogObject($item, false);

        // if ($apiResponse->isSuccess()) {
        //     $retrieveCatalogObjectResponse = $apiResponse->getResult();
        // } else {
        //     $errors = $apiResponse->getErrors();
        // }

        // dd($retrieveCatalogObjectResponse);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Browse  $browse
     * @return \Illuminate\Http\Response
     */
    public function edit(Browse $browse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Browse  $browse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Browse $browse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Browse  $browse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Browse $browse)
    {
        //
    }
}
