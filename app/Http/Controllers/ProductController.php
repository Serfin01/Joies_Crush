<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
use App\Models\TagType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected static $noFilterTagName = "no";
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::all();
        $tagtypes = TagType::all();
        $tagtype_color = TagType::where('name', 'color')->first();
        $tagtype_shape = TagType::where('name', 'shape')->first();
        $tagtype_lock = TagType::where('name', 'lock')->first();
        $tagtype_material = TagType::where('name', 'material')->first();
        $tagtype_size = TagType::where('name', 'size')->first();
        $tagtype_texture = TagType::where('name', 'texture')->first();
        $tags_color = Tag::where('tag_type_id', $tagtype_color->id)->get();
        $tags_shape = Tag::where('tag_type_id', $tagtype_shape->id)->get();
        $tags_lock = Tag::where('tag_type_id', $tagtype_lock->id)->get();
        $tags_material = Tag::where('tag_type_id', $tagtype_material->id)->get();
        $tags_size = Tag::where('tag_type_id', $tagtype_size->id)->get();
        $tags_texture = Tag::where('tag_type_id', $tagtype_texture->id)->get();
        //dd($tags_color);

        $searchtags = [];
        foreach ($tagtypes as $tt) {
            $tt_name = $tt->name; // tag type name
            $tt_filter_value = $request->$tt_name; // value of tag to filter by
            if ($tt_filter_value !== null && $tt_filter_value <> self::$noFilterTagName) {
                $searchtags[$tt_name] = $tt_filter_value;
                //$products = $products->where($tt_name,$tt_filter_value);
            }
        }
        if (count($searchtags) > 0) {
            $schtgs = Tag::whereIn('name',$searchtags)->pluck('id');
            $products = Product::whereHas('tags', function ($query) use ($schtgs) {
                $query->whereIn('tag_id', $schtgs);
            })->get();
            //dd($products);
        }
        //dd($searchtags);
        return view('navPages.pendientes', compact(
            'products', 'searchtags',
            'tags_color','tags_shape','tags_lock','tags_material','tags_size','tags_texture'
        ));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
