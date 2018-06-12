<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Requests;
use App\Bottle;
use App\Offering;
use App\Product;
use App\Http\Resources\Bottle as BottleResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class BottleController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::channel('bottle')->info('Bottles shown.', ['user' => Auth::user()]);

        $bottles = Bottle::all()->groupBy('offering_id');
        return $this->datatable($bottles);
    }

    /**
     * Get filtered data fro datatable
     **/
    public function datatable($bottles)
    {
        $offering_ids = $bottles->keys();
        $offerings = Offering::find($offering_ids);
        $product_ids = $offerings->pluck('product_id');
        $products = Product::find($product_ids);
        $associative = collect();
        foreach ($offering_ids as $offering_id) {
            $associative->put($offering_id, $offerings->where('id', $offering_id)->pop()->product_id);
        }
        $displayValues = collect();
        foreach ($bottles as $collection) {
            $collectByLoc = $collection->groupBy('location_id');
            $locations = collect();
            foreach ($collectByLoc as $location) {
                $locations->push([
                    'location_id' => $location[0]['location_id'],
                    'numberAtLocation' => $location->count(),
                    'bottles' => $location
                ]);
            }
            $offering_id = $collection[0]['offering_id'];
            $product_id = $associative->get($collection[0]['offering_id']);
            $displayValues->push([
                'offering_id' => $offering_id,
                'offering' => $offerings->where('id', $offering_id),
                'product_id' => $product_id,
                'product' => $products->where('id', $product_id),
                'name' => $products->where('id', $product_id)->pop()->name,
                'quantity' => $collection->count(),
                'location' => $locations,
            ]);
        }
        return new Paginator($displayValues, 15);
    }

    /**
     * Display the specified resource
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Log::channel('bottle')->info('Bottles shown.', ['user' => Auth::user()]);

        // Get a single bottle
        return Bottle::findOrFail($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Bottle::create($request->all());
    }

    /**
     * Get the bottle by searching name
     *
     * @param String $name
     * @return \Illuminate\Http\Response
     **/
    public function search($name)
    {
        $bottle = Bottle::where('name', 'LIKE', "%$name%")->orderBy('id')->first();

        $offering = $bottle->offering;

        return $bottle;
    }

    /**
     * Get the bottles at a location
     *
     * @param String $name
     * @return \Illuminate\Http\Response
     **/
    public function byLoc($id)
    {
        $bottles = Bottle::all()->where('location_id', $id)->groupBy('offering_id');
        $offering_ids = $bottles->keys();
        $offerings = Offering::find($offering_ids);
        $product_ids = $offerings->pluck('product_id');
        $products = Product::find($product_ids);
        $associative = collect();
        foreach ($offering_ids as $offering_id) {
            $associative->put($offering_id, $offerings->where('id', $offering_id)->pop()->product_id);
        }
        $displayValues = collect();
        foreach ($bottles as $collection) {
            $collectByLoc = $collection->groupBy('location_id');
            $offering_id = $collection[0]['offering_id'];
            $product_id = $associative->get($collection[0]['offering_id']);
            $displayValues->push([
                'offering_id'   => $offering_id,
                'offering'      => $offerings->where('id', $offering_id),
                'product_id'    => $product_id,
                'product'       => $products->where('id', $product_id),
                'name'          => $products->where('id', $product_id)->pop()->name,
                'quantity'      => $collection->count(),
                'location'      => $collection
            ]);
        }
        return new Paginator($displayValues, 15);
    }

    /**
     * Create new bottle entry
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Log::channel('bottle')->info('Bottle created.', [
            'bottle' => $request->all(),
            'user' => Auth::user()
        ]);

        Mail::to(App\User::find(1))->send(new NewOffering());

        return Bottle::create($request->all());
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
        $bottle = bottle::find($id);
        $deleted = $bottle->delete();

        if ($deleted) {
            Log::channel('bottle')->info('Bottle deleted.', [
                'bottle' => $bottle,
                'user' => Auth::user()
            ]);

            return response()->json(['status' => 'success', 'message' => 'bottle_deleted']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'bottle_not_found', ], 422);
        }
    }
}
