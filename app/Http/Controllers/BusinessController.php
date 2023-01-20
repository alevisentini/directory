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
        $fein_ein_number = $request->get('fein_ein_number');

        try {
            $businesses = Business::orderBy('id', 'ASC')
                ->name($name)
                ->feinEinNumber($fein_ein_number)
                ->paginate(10);
            return view('business', compact('businesses'));
        } catch (Exception $ex) {
            Bugsnag::leaveBreadcrumb('Entity data', 'info', [
                'name' => $name,
                'fein_ein_number' => $fein_ein_number,
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
