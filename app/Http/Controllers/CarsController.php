<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$cars = Car::all();
        return $cars;*/
        $mark = request()->input('mark');
        $term = request()->input('term');
        $take = request()->input('take', Car::get()->count());
        $skip = request()->input('skip', 0);

        if($mark){
            return Car::search($mark, $skip, $take);
        }
        if ($term) {
            return Car::search($term, $skip, $take);
        } else {
            return Car::skip($skip)->take($take)->get();
        }
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
    public function store(CarRequest $request)
    {
        $car = new Car();

        $car->mark = $request->input('mark');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->maxSpeed = $request->input('maxSpeed');
        $car->isAutomatic = $request->input('isAutomatic');
        $car->engine = $request->input('engine');
        $car->numberOfDoors = $request->input('numberOfDoors');

        $car->save();

        return $car;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return $car;
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
    public function update(CarRequest $request, $id)
    {
        $car = Car::find($id);

        $car->mark = $request->input('mark');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->maxSpeed = $request->input('maxSpeed');
        $car->isAutomatic = $request->input('isAutomatic');
        $car->engine = $request->input('engine');
        $car->numberOfDoors = $request->input('numberOfDoors');

        $car->update();

        return $car;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return $car;
    }
}
