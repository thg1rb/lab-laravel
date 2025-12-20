<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentsController extends Controller
{
    private $students = [
        ['id' => "6610401934", 'name' => 'Kerdsiri Srijaroen',  'dept' => 'Computer Engineer'],
        ['id' => "6610402132", 'name' => 'Bowornrat Tangnararatchakit',  'dept' => 'Economics'],
        ['id' => "6610402205", 'name' => 'Rugsit Rungrattanachai',  'dept' => 'Computer Science'],
        ['id' => "6610402230", 'name' => 'Sirisuk Tharntham',  'dept' => 'Aerospace Engineer'],
        ['id' => "6610405905", 'name' => 'Narakorn Thanapornpakdee',  'dept' => 'Chemical Engineer'],
    ];

    public function index(Request $req): View {
        $students = $this->students;
        $params = $req->query();

        foreach ($params as $param => $search) { // name=Bowornrat, major=Eco
            if ($req->has($param)) {
                $students = array_filter($students, function($student) use ($param, $search) {
                    return Str::contains($student[$param], $search, true);
                });
            }
        }

        return view('students', ['students' => $students]);
    }
}
