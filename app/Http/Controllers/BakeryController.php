<?php

namespace App\Http\Controllers;

use App\Bakery;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use JD\Cloudder\Facades\Cloudder;

class BakeryController extends Controller
{
    //Tra ve 1 danh sach san pham.
    public function index()
    {
        $bakeries = Bakery::where('status', 1)->orderBy('created_at', 'desc')->paginate(5);
        $categories = Category::all();
        return view('admin.BanhNgot')
            ->with([
                'bakeries_inView' => $bakeries,
                'categories' => $categories
            ]);
    }

    //Show 1 sản phẩm
    public function show()
    {
        return 'show';
    }

    public function showJson($id)
    {
        $bakery = Bakery::find($id);
        if ($bakery == null) {
            return response()->json(['msg' => 'Not found'], 404);
        }
        return rescue()->json(['item' => $bakery], 200);
    }

    //Tra ve view form tao moi san pham.
    public function create()
    {
        $categories = Category::all();
        return view('Form')->with([
            'categories' => $categories
        ]);
    }


    //Lưu thông tin sản phẩm vào DB.
    public function store()
    {
        $bakery = new Bakery();
        $bakery->name = Input::get('name');
        $bakery->categoryId = Input::get('categoryId');
        $bakery->price = Input::get('price');
        $bakery->description = Input::get('description');

        $image_id = time();
        Cloudder::upload(Input::file('images')->getRealPath(), $image_id);
        $bakery->images = Cloudder::getResult()['url'];
        $bakery->content = Input::get('content');
        $bakery->note = Input::get('note');
        $bakery->save();
        return redirect('/admin/bakery/list');
    }

    //Sua thong tin san pham.
    public function edit($id)
    {

        $bakery = Bakery::find($id);
        if ($bakery == null) {
            return response()->json(['msg' => 'Khong tim thay!'], 404);
        }
        return response()->json(['item' => $bakery], 200);
    }

    //Update thong tin sau khi Sua.
    public function update($id)
    {
        $bakery = Bakery::find($id);

        if ($bakery == null) {
            return view('404');
        }
        $bakery->name = Input::get('nameEdit');
        $bakery->categoryId = Input::get('categoryIdEdit');
        $bakery->price = Input::get('priceEdit');
        $bakery->description = Input::get('descriptionEdit');
        if (Input::hasFile('imagesEdit')) {
            $image_id = time();
            Cloudder::upload(Input::file('imagesEdit')->getRealPath(), $image_id);
            $bakery->images = Cloudder::secureShow($image_id);
        }
        $bakery->content = Input::get('contentEdit');
        $bakery->note = Input::get('noteEdit');
        $bakery->save();
        return redirect('/admin/bakery/list');

    }

    //Xoa san pham.
    public function destroy($id)
    {
        $bakery = Bakery::find($id);
        if ($bakery == null) {
            return view('404');
        }
        $bakery->delete();
        return redirect()->route('listProductAD');
    }
}
