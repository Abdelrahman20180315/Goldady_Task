<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use App\Models\Country;
use App\Models\User;
use App\Models\Volt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    //manage users

    public function users()
    {
    
        $users = User::all();
        return view('Admins.users',compact('users'));
    }
    public function deleteuser($id)
    {

        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    //manage countries

    public function add_country()
    {
        return view('Admins.add_country');
    }
    public function add_country_data(Request $request)
    {
        $data = new Country();
        $data->country_name = $request->country_name;
        $data->save();
        return redirect()->back();
    }
    public function show_contries()
    {
        $data = Country::all();
        return view('Admins.admin_show_country',compact('data'));
    }
    public function delete_country($id)
    {
        $data = Country::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function search_country(Request $request)
    {
        $data = Country::where('country_name','LIKE','%'.$request->search.'%')->get();
        return view('Admins.admin_show_country',compact('data'));
    }


    //manage volts


    public function add_volt()
    {
        $country = Country::all();
        return view('Admins.add_volt',compact('country'));
    }
    public function add_volt_data(Request $request)
    {
        $data = new Volt();
        $data->volt_name = $request->volt_name;
        $data->volt_country = $request->volt_country;
        $data->volt_type = $request->volt_type;
        $data->save();
        return redirect()->back();
    }
    public function show_volts()
    {
        $data = Volt::all();
        return view('Admins.admin_show_volt',compact('data'));
    }
    public function delete_volt($id)
    {
        $data = Volt::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function search_volt(Request $request)
    {
        $data = Volt::where('volt_name','LIKE','%'.$request->search.'%')->
        OrWhere('volt_type','LIKE','%'.$request->search.'%')
        ->OrWhere('volt_type','LIKE','%'.$request->search.'%')
        ->get();
        return view('Admins.admin_show_volt',compact('data'));
    }




    //manage bars

    
    public function add_bar()
    {
        $country = Country::all();
        return view('Admins.add_bar',compact('country'));
    }


    public function GetVoltsRelatedToSpecificType($filter_type)
    {
        echo json_encode(DB::table('volts')->where('volt_type', $filter_type)->get());
    }


    public function add_bar_data(Request $request)
    {
        $data = new Bar();
        $data->bar_serialnumber = $request->bar_serialnumber;
        $data->bar_country = $request->bar_country;
        $data->bar_size = $request->bar_size;
        $data->bar_type = $request->bar_type;
        $data->volt_id = $request->volt_id;
        $data->save();
        return redirect()->back();
    }
    public function show_bars()
    {
        $data = Bar::all();
        return view('Admins.admin_show_bar',compact('data'));
    }
    public function delete_bar($id)
    {
        $data = Bar::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function search_bar(Request $request)
    {
        $data = Bar::where('bar_serialnumber','LIKE','%'.$request->search.'%')->
        OrWhere('bar_type','LIKE','%'.$request->search.'%')
        ->OrWhere('volt_country','LIKE','%'.$request->search.'%')
        ->OrWhere('volt_size','LIKE','%'.$request->search.'%')
        ->get();
        return view('Admins.admin_show_bar',compact('data'));
    }


    //manage bars and volts relationship and show them

    public function barwithitsvolt()
    {
        $data = DB::table('bars')->join('volts','bars.volt_id','=','volts.id')->get();
        return view('Admins.admin_show_bar_volt',compact('data'));
    }

    public function search_barvolt(Request $request)
    {
        $barvolt = DB::table('bars')->join('volts','bars.volt_id','=','volts.id')->get();

        $data = $barvolt->where('bar_serialnumber','LIKE','%'.$request->search.'%')
        ->OrWhere('bar_country','LIKE','%'.$request->search.'%')
        ->OrWhere('bar_size','LIKE','%'.$request->search.'%')
        ->OrWhere('bar_type','LIKE','%'.$request->search.'%')
        ->OrWhere('volt_name','LIKE','%'.$request->search.'%')
        ->OrWhere('volt_country','LIKE','%'.$request->search.'%')
        ->OrWhere('volt_type','LIKE','%'.$request->search.'%');
        return view('Admins.admin_show_bar_volt',compact('data'));
    }


    

    
}
