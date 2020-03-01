<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Resources\Slides as SlidesResource;
use App\Models\Slides;


class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type="image", Request $request)
    {
        //
        if($request->has('public')){
            if($type === config('config.slides.types.0')){
                $slides = Slides::where('is_public', true)->where('type',config('config.slides.types.0'))->get();
            }elseif ($type === config('config.slides.types.1')){
                $slides = Slides::where('is_public', true)->where('type',config('config.slides.types.1'))->get();
            }
        }else {
            $slides = Slides::all();
        }
        return SlidesResource::collection($slides);

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
        $slide = Slides::find($id);
        return new SlidesResource($slide);

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
