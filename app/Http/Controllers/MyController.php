<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ApiData;

class MyController extends Controller
{
    public function index(){
        $result = DB::table('api_data')->get();

        return response()->json([ 'data' => $result], 200);
        //return response()->json($result);
        //return $result;
    }

     // Create a new record in 'api_data' table
     public function store(Request $request)
        {
            // Validate incoming request
            $validated = $request->validate([
                'product_name'  => 'required|string|max:50',
                'product_code'  => 'required|string|max:50',
                'unit_price'    => 'required|string|max:50',
                'qty'           => 'required|string|max:50',
                'total_price'   => 'required|string|max:50',
            ]);

            // Insert the data into the database
            DB::table('api_data')->insert($validated);

            // Return success response
            return response()->json(['message' => 'Product created successfully'], 201);
        }



     // Delete a record from 'api_data' table by ID
    public function destroy($id)
        {
            $data = DB::table('api_data')->where('id', $id)->first();

            // Check if the record exists
            if ($data) {
                DB::table('api_data')->where('id', $id)->delete();
                return response()->json(['message' => 'Data deleted successfully'], 200);
            } else {
                return response()->json(['message' => 'Data not found'], 404);
            }
        }


    public function update(Request $request, $id)
        {
            $product = ApiData::findOrFail($id);

            // Validate the request data
            $request->validate([
                'product_name' => 'required|string|max:50',
                'product_code' => 'required|string|max:50',
                'unit_price' => 'required|string|max:50',
                'qty' => 'required|string|max:50',
                'total_price' => 'required|string|max:50',
            ]);

            // Update the product
            $product->update($request->all());

            // Return a success message
            return response()->json(['message' => 'Product updated successfully'], 200);
        }


        public function getproducts($id){
                $product = ApiData::findOrFail($id);
                if(!$product){
                        return response()->json(['message' => 'Product not found'], 404);
                    }
                return response()->json($product);
        }
    

    
}
