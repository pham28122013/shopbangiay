<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\Backend\ProductService;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{ 
    /**
     * @var ProductService
     */
    private $productService;

    /**
     * initialize the function __construct
     * 
     */
    public function __construct(ProductService $productservice)
    {
        $this->productService = $productservice;
    }
    
    /**
     * list for the product.
     *
     * @return view
     */
    public function index()
    {
        $products = $this->productService->getAllProduct();
        return view('admin.products.list',['products' => $products]);
    }
    
    /**
     * create for the product.
     *
     * @return view
     */
    public function create()
    {
        $productType = $this->productService->getProductTypeList();
        return view('admin.products.create',['productType' => $productType]);  
    } 
    
    /**
     * store for the product.
     *
     * @param \Illuminate\Http\Request  $request
     * @return route
     */
    public function store(CreateProductRequest $request)
    {
        $result = $this->productService->handleCreateProduct($request);
        if ($result) {
            return redirect()->route('products.index')->with('success','Created product successfully');
        }
        return redirect()->route('products.index')->with('failed','Create product failed');
    }

    /**
     * Show for the Product.
     *
     * @param int $id Product id
     * @return view
     */
    public function show($id)
    {
        $product = $this->productService->showProduct($id);
        return view('admin.products.show', ['product' => $product]);
    }

    /**
     * Edit for the Product.
     *
     * @param int $id Products id
     * @return view
     */
    public function edit($id)
    {
        $product = $this->productService->getDataByProductId($id);
        $productType = $this->productService->getProductTypeList();
        return view('admin.products.edit',['product'=> $product, 'productType' => $productType]);
    }
    /**
     * update for the products
     *
     * @param \Illuminate\Http\Request  $request
     * @param int $id Products id
     * @return route
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = $this->productService->updateProduct($request, $id);
        if ($product) {
            return redirect()->route('products.index')->with('success','Update product successfully');
        }
        return redirect()->route('products.index')->with('failed','Update product failed');
    }

    /**
     * destroy for the product.
     *
     * @param int $id Product id
     * @return route
     */
    public function destroy($id)
    {
        $delete = $this->productService->destroyProduct($id);
        return redirect()->route('products.index')->with('success','Destroy product successfully');
    }
}
