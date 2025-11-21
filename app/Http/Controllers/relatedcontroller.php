<?php

namespace App\Http\Controllers;

use App\Models\RelatedProd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class relatedcontroller extends Controller
{
    public function index() {
        try {
            $relatedprods = RelatedProd::all();
            return view( 'pages.relatedproductview',compact('relatedprods') );
        } catch ( \Throwable $th ) {
            Log::error( $th );
        }
    }

    public function getallRelatedproducts(Request $request){
        try {
            $query = RelatedProd::orderBy('id', 'desc');

            return datatables()->eloquent($query)
                ->addColumn('sno', function ($data) {
                    static $rowNumber = 0;
                    $rowNumber++;
                    $start = request()->input('start', 0);
                    return $start + $rowNumber;
                    // return $lead ? $lead->delivery_date : '-';
                })
                ->addColumn('projecttitle', function ($data) {
                    return $data->project_name ? $data->project_name : '-';
                })
                ->addColumn('projectimage', function ($data) {
                    if ($data->project_image) {
                        $imageUrl = asset('uploads/projects/' . $data->project_image); // Adjust path as needed
                        return '<img src="' . $imageUrl . '" alt="Blog Image" width="80" height="60">';
                    } else {
                        return '-';
                    }
                })
                ->addColumn('action', function ($data) {
                    $productIds = RelatedProd::where('project_id', $data->id)->pluck('product_id')->toArray();
                    return '
                        <button class="btn btn-sm btn-primary edit-project-products-btn"  
                            data-id="' . $data->id . '" 
                            data-name="' . $data->project_name . '" 
                            data-image="' . $data->project_image . '" 
                            data-products=\'' . json_encode($productIds) . '\'
                            data-bs-toggle="modal" 
                            data-bs-target="#projectproductModal">
                            Edit
                        </button>
                    ';
                })
                ->rawColumns(['action','projectimage'])            
                ->toJson();
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }
}
