<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;
use App\Calendar;

class CalendarController extends Controller
{
    public function getHoliday(Request $request)
    {   
        $data = new Holiday();
        $list = Holiday::all();
        return view('calendar.holiday', ['list' => $list, 'data' => $data]);
    } 
    public function getHolidayId($id)
    {
        $data = new Holiday();
        if (isset($id)) {
            $data = Holiday::where('id', '=', $id)->first(); 
        }
        $list = Holiday::all();
        return view('calendar.holiday', ['list' => $list, 'data' => $data]);
    }

    public function postHoliday(Request $request)
    {
        if (isset($request->id)) {
            $holiday = Holiday::where('id', '=', $request->id)->first();
            $holiday->day = $request->day;
            $holiday->description = $request->description;
            $holiday->save();
        } else {
            $holiday = new Holiday();
            $holiday->day = $request->day;
            $holiday->description = $request->description;
            $holiday->save();
        }

        $data = new Holiday();
        $list = Holiday::all();
        return view('calendar.holiday', ['list' => $list, 'data' => $data]);
    }

    public function index(Request $request)
    {
        $list = Holiday::all();
        $cal = new Calendar($list);
        $tag = $cal->showCalendarTag($request->month,$request->year);

        return view('calendar.index', ['cal_tag' => $tag]);
    }

    public function deleteHoliday(Request $request)
    {
        if(isset($request->id)) {
            $holiday = Holiday::where('id', '=', $request->id)->first();
            $holiday->delete();
        }

        $data = new Holiday();
        $list = Holiday::all();
        return view('calendar.holiday', ['list' => $list, 'data' => $data]);
    }
}
