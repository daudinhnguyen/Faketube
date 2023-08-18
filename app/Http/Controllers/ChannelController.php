<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Http\Requests\StoreChannelRequest;
use App\Http\Requests\UpdateChannelRequest;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $model;
    public function __construct()
    {
        $this->model = (new Channel())->query();
    }

    public function index()
    {
        $channel = Channel::query()->get();
        return View("index", [
            "channels" => $channel,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChannelRequest $request)
    {
        try {
            $arr = $request->validated();
            $course = $this->model->create($arr);
            return redirect()->route('ChannelList', $course)
                ->with('success', 'Success Add Channel!');
        }catch (\Exception $exception) {
            return back()->withErrors('Errors');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Channel $channel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Channel $channel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChannelRequest $request, Channel $channel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Channel $channel)
    {
        //
    }
}
