<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Entity;
use Illuminate\Http\Request;
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use Exception;

class BusinessController extends Controller
{
    /**
     * Display a listing of businesses.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $foreign_legal_name = $request->get('foreign_legal_name');
        $fictitious_name = $request->get('fictitious_name');

        try {
            $businesses = Business::orderBy('id', 'ASC')
                ->name($name)
                ->foreign_legal_name($foreign_legal_name)
                ->fictitious_name($fictitious_name)
                ->paginate(10);
            return view('business', compact('businesses'));
        } catch (Exception $ex) {
            Bugsnag::leaveBreadcrumb('Entity data', 'info', [
                'name' => $name,
                'foreign_legal_name' => $foreign_legal_name,
                'fictitious_name' => $fictitious_name,
                'message' => $ex->getMessage()
            ]);
            Bugsnag::notifyException($ex);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
