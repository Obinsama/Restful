<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Test;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class MainController extends Controller
{
    public function index(){
        //$client_id=$request->input('client_id');
        //$numberofdays=$request->input('numberofdays');
        $numberofdays=30;
        $end=date('Y-m-d H:i:s');
        $start= date('Y-m-d H:i:s', strtotime($end.'- '.$numberofdays.'days'));
        $failed=DB::table('transaction')->where('statut',15)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
        $success=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
        $total=DB::table('transaction')->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
        $totalmoney=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->sum('montant');
        return view('admin.dashboard',compact('total','success','failed','totalmoney'));
    }
    public function getall(Request $request){
        $entries=DB::table('transaction')->where('client_id',Auth::id())->get();
        //idd($entries);
        foreach ($entries as $entry){
            $unique_id=sha1(''.$entry->client_id.$entry->numero_tel.$entry->date_et_heure);
            DB::table('transaction')->where('transaction_id',$entry->transaction_id)->where('client_id',Auth::id())->update(['unique_id'=>$unique_id]);
        }
        $param=$request->input('action');
        $result['transactions']=DB::table('transaction')->where('client_id',Auth::id())->orderBy('date_et_heure','desc')->get();
        $result['boxes']=$this->retrieve_boxes_data();
        //$result=Test::all();
        return response()->json($result);
    }
    public function getlatest(Request $request){

        $param=$request->input('action');
        $result['transaction']=DB::table('transaction')->where('client_id',Auth::id())->get()->last();
        $result['boxes']=$this->retrieve_boxes_data();
        return response()->json($result);
    }
    public function retrieve_boxes_data(){
        $numberofdays=30;
        $end=date('Y-m-d H:i:s');
        $start= date('Y-m-d H:i:s', strtotime($end.'- '.$numberofdays.'days'));
        $failed=DB::table('transaction')->where('statut',15)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
        $success=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
        $total=DB::table('transaction')->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
        $totalmoney=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->sum('montant');
        $result=[
            'failed'=>$failed,
            'success'=>$success,
            'total'=>$total,
            'totalmoney'=>$totalmoney
        ];
        return $result;

    }

}