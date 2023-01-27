<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function mainCategory()
    {
        return view('backend.pages.category.main_category');
    }

    public function subCategory()
    {
        return view('backend.pages.category.sub_category');
    }

    public function childCategory()
    {
        return view('backend.pages.category.child_category');
    }

    public function index()
    {
        $data['categories'] = Category::latest()->get();
        return response()->json($data, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->language= $request->language;
        $category->slug = $request->slug;
        $category->icon= $request->icon;
        $category->banner= $request->banner;
        $category->description = $request->description;
        $category->status= $request->status ?? true;
        try {
            $category->save();
            $data['status'] = true;
            $data['message'] = "Saved successfully!";
            $data['category'] = $category;
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            $data['status'] = false;
            $data['message'] = "Failed to save data!";
            $data['errors'] = $th;
            return response()->json($data, 500);
        }
    }

    public function show($id)
    {
        $category = Category::where('status', true)->where('id', $id)->first();
        if($category){
            $data['category'] = $category;
            return response()->json($data, 200);

        }else {
            $data['status'] = false;
            $data['message'] = "Data Not Found!";
            return response()->json($data, 404);
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        if($category){
            $data['category'] = $category;
            return response()->json($data, 200);
        }else {
            $data['status'] = false;
            $data['message'] = "Data Not Found!";
            return response()->json($data, 404);
        }
    }

    public function update(Request $request,  $id)
    {
        $category =  Category::find($id);
        if($category) {
            $category->name = $request->name;
            $category->language= $request->language;
            $category->slug = $request->slug;
            $category->icon= $request->icon;
            $category->banner= $request->banner;
            $category->description = $request->description;
            $category->status= $request->status ;
            try {
                $category->save();
                $data['status'] = true;
                $data['message'] = "Updated successfully!";
                $data['category'] = $category;
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

    public function destroy($id)
    {
        $category = Category::find($id);
        if($category){
            try {
                $category->delete();
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
