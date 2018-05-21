<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Http\Resources\Product as ProductResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::channel('bws')->info('Products shown.', ['user' => Auth::user()]);

        // Get articles
        return Product::paginate(15);
    }

    /**
     * Display the specified resource by id
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Log::channel('bws')->info('Products shown.', ['user' => Auth::user()]);
      
        // Return and find single product
        return Product::findOrFail($id);
    }

    /**
     * Get the product by searching name
     *
     * @param String $name
     * @return \Illuminate\Http\Response
     **/
    public function search($name)
    {
        return Product::where('name', 'LIKE', "%$name%")->orderBy('id')->paginate(1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Product::create($request->all());
    }

    /**
     * Create new product entry
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Log::channel('bws')->info('Product created.', [
            'product' => $request->all(),
            'user' => Auth::user()
        ]);

        return Product::create($request->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $deleted = $product->delete();

        if ($deleted) {
            Log::channel('bws')->info('Product deleted.', [
                'product' => $product,
                'user' => Auth::user()
            ]);

            return response()->json(['status' => 'success', 'message' => 'product_deleted']);
        } else {
            return response()->json(['status' => 'error',
                'message' => 'product_not_found', ], 422);
        }
    }
}
