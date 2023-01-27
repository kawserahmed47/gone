<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use Illuminate\Http\Request;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['child_categories'] = ChildCategory::latest()->get();
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
        $child_category = new ChildCategory();
        $child_category->name = $request->name;
        $child_category->subcategory_id = $request->subcategory_id;
        $child_category->language= $request->language;
        $child_category->slug = $request->slug;
        $child_category->icon= $request->icon;
        $child_category->banner= $request->banner;
        $child_category->description = $request->description;
        $child_category->status= $request->status ?? true;
        try {
            $child_category->save();
            $data['status'] = true;
            $data['message'] = "Saved successfully!";
            $data['child_category'] = $child_category;
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
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $child_category = ChildCategory::where('status', true)->where('id', $id)->first();
        if($child_category){
            $data['child_category'] = $child_category;
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
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $child_category = ChildCategory::find($id);
        if($child_category){
            $data['child_category'] = $child_category;
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
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $child_category =  ChildCategory::find($id);
        if($child_category) {
            $child_category->name = $request->name;
            $child_category->subcategory_id = $request->subcategory_id;
            $child_category->language= $request->language;
            $child_category->slug = $request->slug;
            $child_category->icon= $request->icon;
            $child_category->banner= $request->banner;
            $child_category->description = $request->description;
            $child_category->status= $request->status ;
            try {
                $child_category->save();
                $data['status'] = true;
                $data['message'] = "Updated successfully!";
                $data['child_category'] = $child_category;
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
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $child_category = ChildCategory::find($id);
        if($child_category){
            try {
                $child_category->delete();
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
