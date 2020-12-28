<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepository;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $categoryRepo;

    function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepo->getAll();

        return response()
            ->json([
                'success' => true,
                'data' => [
                    'items' => $categories
                ]
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = $this->categoryRepo->create($request->all());
        
        return response()
            ->json([
                'success' => true,
                'data' => [
                    
                ]
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->categoryRepo->find($id);
        
        return response()
            ->json([
                'success' => true,
                'data' => [
                     'item' => $category
                ]
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = $this->categoryRepo->find($id);

        $this->categoryRepo->update($category, $request->all());

        return response()
            ->json([
                'success' => true,
                'data' => [
                     
                ]
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryObject = $this->categoryRepo->find($id);
        $this->categoryRepo->delete($categoryObject);

        return response()
            ->json([
                'success' => true,
                'data' => [
                    
                ]
            ]);
    }
}
