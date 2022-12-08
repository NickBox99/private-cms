<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebStorageOrder;

class WebStorageOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = [
            [
                'id' => 1,
                'name' => 'Тест',
                'short_description' => 'Краткое описание',
                'description' => 'Большое описание',
                'price' => 1000,
                'views' => 10,
                'tags' => [
                    [
                        'name' => 'Большой бос',
                        'short_name' => 'БОС',
                        'background' => 'blue',
                        'color' => 'white'
                    ]
                ]
            ]
        ];

        WebStorageOrder::create([
            'name' => 'Тест',
            'short_description' => 'Краткое описание',
            'description' => 'Большое описание',
            'price' => 1000,
            'views' => 10,
            'tags_id' => 1
            // 'tags' => [
            //     [
            //         'name' => 'Большой бос',
            //         'short_name' => 'БОС',
            //         'background' => 'blue',
            //         'color' => 'white'
            //     ]
            // ]
        ]);

        return view('web-storage.orders.index', [
            'orders' => $orders
        ]);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
