<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Status;
use App\Models\Type;
use App\Models\Activity;
use App\Models\State;
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
        $state_id = $request->get('state_id');
        $type_id = $request->get('type_id');
        $status_id = $request->get('status_id');
        $activity_id = $request->get('activity_id');

        try {
            $businesses = Business::with('status')->with('activity')->with('type')->with('state')->filter($request)->orderBy('name', 'ASC')
                ->paginate(5);
            return view('business', [
                'businesses' => $businesses,
                'statuses' => Status::pluck('name', 'id'),
                'types' => Type::pluck('name', 'id'),
                'activities' => Activity::pluck('name', 'id'),
                'states' => State::pluck('name', 'id'),
            ]);
        } catch (Exception $ex) {
            Bugsnag::leaveBreadcrumb('Entity data', 'info', [
                'name' => $name,
                'state_id' => $state_id,
                'status_id' => $status_id,
                'type_id' => $type_id,
                'activity_id' => $activity_id,
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
