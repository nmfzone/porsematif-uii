<?php

namespace App\Awesome\Contracts\Controllers;

use App\Category;

use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;

interface CategoryContract
{
    /**
     * Display a listing of the category.
     *
     * @param  App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category);

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create();

    /**
     * Store a newly created category in storage.
     *
     * @param  App\Http\Requests\Categories\CreateCategoryRequest  $request
     * @param  App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request, Category $category);

    /**
     * Display the specified category.
     *
     * @param  App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category);

    /**
     * Show the form for editing the specified category.
     *
     * @param  App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category);

    /**
     * Update the specified category in storage.
     *
     * @param  App\Http\Requests\Categories\UpdateCategoryRequest $request
     * @param  App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category);

    /**
     * Remove the specified category from storage.
     *
     * @param  App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category);
}
