<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfessorsController extends Controller
{
    private $professors = [
        ['id' => "D1401", 'name' => 'Sornchai Laksanapeeti', 'dept' => 'Computer Science'],
        ['id' => "D1402", 'name' => 'Thanapat Srisuwan', 'dept' => 'Mechanical Engineer'],
        ['id' => "D1403", 'name' => 'Pimpisa Wattanapanit', 'dept' => 'Business Administration'],
        ['id' => "D1404", 'name' => 'Chaiwat Prasertkul', 'dept' => 'Information Technology'],
        ['id' => "D1405", 'name' => 'Narissa Phumirat', 'dept' => 'Industrial Engineer'],
        ['id' => "D1406", 'name' => 'Santi Raksa-kiet', 'dept' => 'Electrical Engineer'],
    ];

    public function index(Request $req): View {
        $professors = $this->professors;
        $params = $req->query();

        foreach ($params as $param => $search) { // name=Sorn, major=Computer%20Sc
            if ($req->has($param)) {
                $professors = array_filter($professors, function($professor) use ($param, $search) {
                    return Str::contains($professor[$param], $search, true);
                });
            }
        }

        return view('professors', ['professors' => $professors]);
    }
}
