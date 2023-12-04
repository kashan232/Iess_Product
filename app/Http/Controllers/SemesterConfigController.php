<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemesterConfigController extends Controller
{
    public function add_sem_config(Request $request)
    {
        $pagename = 'Add Program Management';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.degree_progrm_manage.semester_config.add_sem_config',
            [
                'pagename' => $pagename,
            ]
        );
    }
}
