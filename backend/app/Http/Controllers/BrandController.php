<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Http\Resources\BrandResource;
use App\Http\Resources\BrandResourceCollection;
use App\Interfaces\BrandRepositoryInterface;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    private BrandRepositoryInterface $brandRepository;

    public function __construct(BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $country = $request->header('CF-IPCountry');
       // dd($country);
        $data = $this->brandRepository->index();
        //
        return ApiResponseClass::sendResponse(BrandResource::collection($data), 'Brands fetched successfully', 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        //
        $data = [
            'brand_name' => $request->brand_name,
            'brand_image' => $request->brand_image,
            'brand_country' => $request->brand_country,
            'rating' => $request->rating
        ];

        DB::beginTransaction();
        try {
            $brand = $this->brandRepository->store($data);
            DB::commit();
            return ApiResponseClass::sendResponse(new BrandResource($brand), 'Brand created successfully', 200);
        } catch (\Exception $ex) {
            ApiResponseClass::rollback($ex);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $brand = $this->brandRepository->getById($id);
        return ApiResponseClass::sendResponse(new BrandResource($brand), '', 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, $id)
    {
        $data = [
            'brand_name' => $request->brand_name,
            'brand_image' => $request->brand_image,
            'brand_country' => $request->brand_country,
            'rating' => $request->rating
        ];
        DB::beginTransaction();
        try {
            $brand = $this->brandRepository->update($data, $id);
            DB::commit();
            return ApiResponseClass::sendResponse(new BrandResource($brand), 'Brand created successfully', 201);
        } catch (\Exception $ex) {
            ApiResponseClass::rollback($ex);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->brandRepository->delete($id);
        return ApiResponseClass::sendResponse('Brand deleted succefully', '', 204);
    }
}
