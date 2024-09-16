<?php

namespace App\Repositories;

use App\Interfaces\BrandRepositoryInterface;
use App\Models\Brand;

class BrandRepository implements BrandRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //

    }

    public function index()
    {
        // TODO: Get all brands.
        return Brand::all();
    }

    public function getById($id)
    {
        // TODO: Get brand identified by $id.
        return Brand::findOrFail($id);
    }

    public function store(array $data)
    {
        // TODO: Store a brand.
        return Brand::create($data);
    }

    public function update(array $data, $id)
    {
        // TODO: Update a brand.
        return Brand::whereId($id)->update($data);
    }

    public function delete($id)
    {
        // TODO: Delete a brand.
        Brand::destroy($id);
    }
}
