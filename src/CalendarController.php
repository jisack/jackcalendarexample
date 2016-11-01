<?php

namespace Jacklaravel\Calendar;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Jacklaravel\Calendar\models\Calendar;

class CalendarController extends Controller
{
    //
    public function index(){
        return view('jacklaravel.calendar.calendar',['calendar' => Calendar::all()]);
    }

    //
    public function createEvent(Request $event){
        $event = $event->all();
        $calendar = Calendar::create([
            'title' => $event['title'],
            'description' => $event['description'],
            'start_date' => $event['start_date'],
            'end_date' => $event['end_date'],
            'bgcolor' => $event['bgcolor'],
            'bdcolor' => $event['bdcolor']
        ]);
        return $calendar->id;
    }

    //
    public function setEvent(Request $event){
        $event = $event->all();
        $calendar = Calendar::find($event['id'])->update([
            'start_date' => $event['start_date'],
            'end_date' => $event['end_date'],
        ]);
        if($calendar){
            return 'success';
        }
        return 'failed';
    }

    public function removeEvent(Request $id){
        $calendar = Calendar::destroy($id->id);
        if($calendar){
            return 'success';
        }
        return 'failed';
    }

    public static function rgb2hex($rgb)
    {
        $rgb = str_replace([')','rgb(',''],['','',''], $rgb);
//        $rgb = preg_replace('/\)/','',((preg_replace('/rgb\(/', '', $rgb))));
        $rgb = explode(',',$rgb);
        $hex = "#";
        $hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
        $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
        $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

        return $hex; // returns the hex value including the number sign (#)
    }
}
