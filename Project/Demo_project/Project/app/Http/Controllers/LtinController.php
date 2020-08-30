<?php

namespace App\Http\Controllers;
use App\Ltin;
use App\Tloai;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class LtinController extends Controller
{
    //Thêm loại tin liên kết thể loại
    public function add_ltin()
    {
        $theloai = Tloai::all();
        return view('loaitin.add-ltin',[
            'theloai'=>$theloai
        ]);
    }

    //Lưu loại tin
    public function save_ltin(request $request)
    {
        $loaitin = New Ltin();
        $loaitin->name = $request->tenloaitin;
        $loaitin->tloai_id = $request->tloai_id;
        $loaitin->save();

        return redirect::to('list-ltin');
    }

    //Hiển thị danh sách loại tin
    public function all_ltin()
    {
        $loaitin = Ltin::all();
        return view('loaitin.list-ltin',[
            'loaitin'=>$loaitin
        ]);
    }

     //Ajax loại tin
    public function ajax_add(request $request)
    {   
        $data = $request->all();
        $output = '';
        if($data['action']== "theloai"){
            $loaitins = Ltin::where('tloai_id',$data['idTheloai'])->get();
                $output.=' <option>--Chọn loại tin--</option>';
            foreach($loaitins as $lt){
                $output.= '<option value="'.$lt->id.'">'.$lt->name.'</option>';
            }         
        }  
        echo $output;  
    }

    //Sửa loại tin
    public function edit_ltin($id)
    {
        $theloai = Tloai::all(); 
        $loaitin = Ltin::find($id);   
        return view('loaitin.edit-ltin',[
            'theloai'=> $theloai,
            'loaitin'=>$loaitin 
        ]);
    }

    //Update loại tin
    public function update_ltin(request $request,$id)
    {
        $loaitin = Ltin::find($id);
        $loaitin->name = $request->name;
        $loaitin->tloai_id = $request->tloai_id;
        $loaitin->save();
        return redirect::to('list-ltin');

    }

    //Xóa loại tin
    public function delete($id)
    {
        $loaitin = Ltin::find($id);
        $loaitin->delete();
        return redirect::to('list-ltin');    
    }

}
?>
 