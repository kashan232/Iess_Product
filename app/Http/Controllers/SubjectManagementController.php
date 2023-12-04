<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectManagementController extends Controller
{
    public function add_sub_manage(Request $request)
    {
        $pagename = 'Add Program Management';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.degree_progrm_manage.subject_management.add_sub_manage',
            [
                'pagename' => $pagename,
            ]
        );
    }
}
