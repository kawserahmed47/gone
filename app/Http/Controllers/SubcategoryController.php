<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['subcategories'] = Subcategory::latest()->get();
        return response()->json($data, 200);
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
        $subcategory = new Subcategory();
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->language= $request->language;
        $subcategory->slug = $request->slug;
        $subcategory->icon= $request->icon;
        $subcategory->banner= $request->banner;
        $subcategory->description = $request->description;
        $subcategory->status= $request->status ?? true;
        try {
            $subcategory->save();
            $data['status'] = true;
            $data['message'] = "Saved successfully!";
            $data['subcategory'] = $subcategory;
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            $data['status'] = false;
            $data['message'] = "Failed to save data!";
            $data['errors'] = $th;
            return response()->json($data, 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = Subcategory::where('status', true)->where('id', $id)->first();
        if($subcategory){
            $data['subcategory'] = $subcategory;
            return response()->json($data, 200);

        }else {
            $data['status'] = false;
            $data['message'] = "Data Not Found!";
            return response()->json($data, 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = Subcategory::find($id);
        if($subcategory){
            $data['subcategory'] = $subcategory;
            return response()->json($data, 200);
        }else {
            $data['status'] = false;
            $data['message'] = "Data Not Found!";
            return response()->json($data, 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategory =  Subcategory::find($id);
        if($subcategory) {
            $subcategory->name = $request->name;
            $subcategory->category_id = $request->category_id;
            $subcategory->language= $request->language;
            $subcategory->slug = $request->slug;
            $subcategory->icon= $request->icon;
            $subcategory->banner= $request->banner;
            $subcategory->description = $request->description;
            $subcategory->status= $request->status ;
            try {
                $subcategory->save();
                $data['status'] = true;
                $data['message'] = "Updated successfully!";
                $data['subcategory'] = $subcategory;
                return response()->json($data, 200);
            } catch (\Throwable $th) {
                $data['status'] = false;
                $data['message'] = "Failed to save data!";
                $data['errors'] = $th;
                return response()->json($data, 500);
            }
        } else {
            $data['status'] = false;
            $data['message'] = "Noting found to update!";
            return response()->json($data, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        if($subcategory){
            try {
                $subcategory->delete();
                $data['status'] = true;
                $data['message'] = "Deleted Successfully!";
                return response()->json($data, 200);
            } catch (\Throwable $th) {
                $data['status'] = false;
                $data['message'] = "Failed to delete!";
                $data['errors'] = $th;
                return response()->json($data, 500);
            }
        }else {
            $data['status'] = false;
            $data['message'] = "Noting found to delete!";
            return response()->json($data, 404);
        }
    }
}
