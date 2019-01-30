<?php

namespace App\Http\Controllers;

use App;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $__tableName;
    private $_viewPath = '';

    public function __construct(App\Product $product)
    {
        $this->__tableName = $product->getTable();
        $this->__viewPath = $this->__tableName . '.';
    }

    public function index()
    {
        $view = $this->__viewPath . __FUNCTION__;
        $data = App\Product::cursor();
        return view( $view, compact( 'data' ) );
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        /** @var App\Product $model */
        $model = Product::find( $id );
        if (!$model) {
            return response()->json( [
                'status' => 404,
                'message' => 'ID không tồn tại'
            ] );
        } else {
            $flag = $model->delete();
            if ($flag) {
                return response()->json( [
                    'status' => 200,
                    'message' => 'SUCCESS'
                ] );
            }
        }
    }
}
