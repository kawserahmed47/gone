<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::latest()->get();
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
        $product = new Product();

        $product->product_type_id = $request->product_type_id;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->child_id = $request->child_id;

        $product->name = $request->name;
        $product->language= $request->language;
        $product->slug = $request->slug;

        $product->feature_image= $request->feature_image;
        $product->gallery_images= json_encode($request->gallery_images);

        $product->tag = $request->tag;
        $product->feature_tags = json_encode($request->feature_tags);

        $product->quantity = $request->quantity;
        $product->original_price = $request->original_price;
        $product->discount_percentage= $request->discount_percentage;
        $product->discount_price = $request->discount_price;

        $product->description = $request->description;
        $product->policy = $request->policy;
        $product->status= $request->status ?? true;

        try {
            $product->save();
            $data['status'] = true;
            $data['message'] = "Saved successfully!";
            $data['product'] = $product;
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('status', true)->where('id', $id)->first();
        if($product){
            $data['product'] = $product;
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if($product){
            $data['product'] = $product;
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product =  Product::find($id);

        if($product) {
            $product->product_type_id = $request->product_type_id;
            $product->category_id = $request->category_id;
            $product->subcategory_id = $request->subcategory_id;
            $product->child_id = $request->child_id;
    
            $product->name = $request->name;
            $product->language= $request->language;
            $product->slug = $request->slug;
    
            $product->feature_image= $request->feature_image;
            $product->gallery_images= json_encode($request->gallery_images);
    
            $product->tag = $request->tag;
            $product->feature_tags = json_encode($request->feature_tags);
    
            $product->quantity = $request->quantity;
            $product->original_price = $request->original_price;
            $product->discount_percentage= $request->discount_percentage;
            $product->discount_price = $request->discount_price;
    
            $product->description = $request->description;
            $product->policy = $request->policy;
            $product->status= $request->status ?? true;
    
            try {
                $product->save();
                $data['status'] = true;
                $data['message'] = "Updated successfully!";
                $data['product'] = $product;
                return response()->json($data, 200);
            } catch (\Throwable $th) {
                $data['status'] = false;
                $data['message'] = "Failed to update data!";
                $data['errors'] = $th;
                return response()->json($data, 500);
            }
        } else {
            $data['status'] = false;
            $data['message'] = "Noting found to update data!";
            return response()->json($data, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product){
            try {
                $product->delete();
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
