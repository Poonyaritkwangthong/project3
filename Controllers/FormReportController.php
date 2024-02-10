<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;

class FormReportController extends Controller
{
    public function index(){
        $report = Problem::all();
        return view('report.index', compact('report'));
    }
    public function create()
    {
        return view('report.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'problem_name' => 'required',
            'p_img' => 'required',
            'p_detail' => 'required',
            'p_location' => 'required',
            'p_date' => 'required',
        ],
        [
            'problem_name.required' => 'กรุณาระบุปัญหา',
            'p_img.required' => 'กรุณาเลือกรูปภาพปัญหา',
            'p_detail.required' => 'กรุณาระบุรายละเอียดปัญหา',
            'p_location.required' => 'กรุณาระบุที่อยู่ปัญหา',
            'p_date.required' => 'กรุณาวันที่เกิดปัญหา',
        ]);
        Problem::create($request->post());

        return redirect()->route('report.index')->with('success','ปัญหาที่เเจ้งถูกเพิ่มในระบบเเล้ว!');
    }
}
