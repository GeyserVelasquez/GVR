<?php

namespace Webkul\Blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Webkul\Blog\Http\Controllers\Controller;
use Webkul\Blog\Repositories\PostRepository;

class PostController extends Controller
{
    /**
     * Create a controller instance.
     *
     * @return void
     */
    public function __construct(protected PostRepository $postRepository){}

    /**
     * Index.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $blogs = $this->postRepository->all();

        return view('blog::admin.index', compact('blogs'));
    }

    /**
     * Create.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        //
    }

    /**
     * Store.
     *
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Function to update items.
     */
     public function update(int $id)
     {
       //
     }

    /**
     * Function to remove items.
     */
     public function destroy(int $id)
     {
       //
     }
}
