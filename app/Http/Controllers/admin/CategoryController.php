<?php

namespace App\Http\Controllers\admin;
use Codexshaper\WooCommerce\Facades\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FormCategoryRequest;


class CategoryController extends Controller
{
   public function index()
   {
        $limit = 100;
        $Category = Category::all( ['per_page'=>$limit])->all();
        return view('admin.Category.index',['Category'=>$Category]);
   }

   public function store(FormCategoryRequest $req)
   {
    // function convert name  to slug
    function convert_name($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        $str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
        $str = preg_replace("/( )/", '-', $str);
        $str = preg_replace("/[^a-z0-9_\s-]/", "", $str);
        $str = preg_replace("/[\s-]+/", " ", $str);
        $str = preg_replace("/[\s_]/", "-", $str);
        return $str;
	}

           //Kiểm tra file FUNCTION SẺ XOÁ KHI LÊN host bỏ hết
    if ($req->hasFile('input_image'))
        {
        $file = $req->input_image;
        $file_move= $file->move('upload', $file->getClientOriginalName());
        $file_local = "./upload/".$file->getClientOriginalName();
        $file_name = $file->getClientOriginalName();
        $file = file_get_contents($file_local);
        $url = 'https://techy.com.vn/wp-json/wp/v2/media/';
        $ch = curl_init();
        $username = 'admin';
        $password = 'Buildy@2021';
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_POST, 1 );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $file );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, [
        'Content-Disposition: form-data; filename='.$file_name,
        'Authorization: Basic ' . base64_encode( $username . ':' . $password ),
        ] );
        $result = curl_exec( $ch );
        curl_close( $ch );
        $url_web = "https://techy.com.vn/wp-content/uploads/".$file_name;
        }

    $data=
    [
    'name'=>$req->name,
    'slug'=>convert_name($req->name),
    'description'=> $req->desc,
    'parent'=> $req->category_id,
    'image' =>
    [
        'src' =>$url_web,

    ]
    ];



    $category = Category::create($data);

   return redirect()->back()->with('success', 'A New Category Has Been Successfully Created!');

   }
   public function create()
   {

    return view('admin.category.create');

   }
   public function edit($id)
   {

    $limit = 100;
    $Category = Category::all( ['per_page'=>$limit])->all();
    $Category_first = Category::find($id);

   return view('admin.category.edit',['Category_first'=>$Category_first ,'Category'=>$Category]);


   }
   public function update()
   {
        $id = $_POST['id'];
        $data=
        [

            'name'=>$_POST['name'],
            'slug'=>$_POST['slug'],
            'description'=> $_POST['desc'],
            'parent'=>$_POST['category_id'],
            'image' =>
            ['src' => 'http://bizweb.dktcdn.net/thumb/grande/100/101/075/articles/tour-du-lich-thai-binh-sapa.jpg?v=1604714426730']
        ];

        $category = Category::update($id ,$data);
        return redirect('/admin/categrories/')->with('success', 'A New Category Has Been Successfully update!');
   }

   public function delete($id)
   {

    $options = ['force' => true];
    $category = Category::delete($id, $options);
    return redirect()->back()->with('message', 'Bạn đã xoá thành công!');


   }




}
