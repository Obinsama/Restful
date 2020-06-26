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
session_start();
class MainController extends Controller
{

    public function index(){
        //$client_id=$request->input('client_id');
        //$numberofdays=$request->input('numberofdays');
        if(isset($_SESSION['numberofdays'])){
            $numberofdays=$_SESSION['numberofdays'];
        }else{
            $numberofdays=30;
        }

        $end=date('Y-m-d H:i:s');
        $start= date('Y-m-d H:i:s', strtotime($end.'- '.$numberofdays.'days'));
        $results=$this->retrieve_boxes_data();
       // session_destroy();
       // dd($results);
//        $failed=DB::table('transaction')->where('statut',15)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
//        $success=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
//        $total=DB::table('transaction')->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
//        $totalmoney=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->sum('montant');
//        $results=DB::table('transaction')->where('client_id',Auth::id())->orderBy('date_et_heure','desc')->paginate(5);

        return view('admin.dashboard',compact('total','success','failed','totalmoney','results'));
    }
    public function getall(Request $request){
        $entries=DB::table('transaction')->where('client_id',Auth::id())->get();
        //idd($entries);
        foreach ($entries as $entry){
            $unique_id=sha1(''.$entry->client_id.$entry->numero_tel.$entry->date_et_heure);
            DB::table('transaction')->where('transaction_id',$entry->transaction_id)->where('client_id',Auth::id())->update(['unique_id'=>$unique_id]);
        }
        $param=$request->input('action');
        $result['transactions']=DB::table('transaction')->where('client_id',Auth::id())->orderBy('date_et_heure','desc')->paginate(5);
        $result['boxes']=$this->retrieve_boxes_data();
        //$result=Test::all();
//        return response()->json($result);
        return view('admin.dashboard',compact('$result'));
    }
    public function getlatest(Request $request){
        $param=$request->input('action');
        if (isset($_SESSION['settings'])){
            if($_SESSION['settings']['all']=='on'){
                $result['transaction']=DB::table('transaction')->get()->last();
            }else{
                $result['transaction']=DB::table('transaction')->where('client_id',Auth::id())->get()->last();
            }
        }
        $result['boxes']=$this->retrieve_boxes_data();
        //$result['transaction']=$result['boxes']->transaction;
        return response()->json($result);
    }
    public function retrieve_boxes_data(){
        if(isset($_SESSION['settings'])){
            $numberofdays=$_SESSION['settings']['number'];
            $full_stat=$_SESSION['settings']['all'];
            if ($full_stat=='on'){
                $end=date('Y-m-d H:i:s');
                $start= date('Y-m-d H:i:s', strtotime($end.'- '.$numberofdays.'days'));
                $failed=DB::table('transaction')->where('statut',15)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->count();
                $success=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->count();
                $total=DB::table('transaction')->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->count();
                $totalmoney=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->sum('montant');
                $transactions=DB::table('transaction')->where('date_et_heure','>',$start)->where('date_et_heure','<=',$end)->orderBy('date_et_heure','desc')->paginate(5);
            }else{
                $end=date('Y-m-d H:i:s');
                $start= date('Y-m-d H:i:s', strtotime($end.'- '.$numberofdays.'days'));
                $failed=DB::table('transaction')->where('statut',15)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
                $success=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
                $total=DB::table('transaction')->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
                $totalmoney=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->sum('montant');
                $transactions=DB::table('transaction')->where('date_et_heure','>',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->orderBy('date_et_heure','desc')->paginate(5);
            }
        }else{
            $numberofdays=30;
            $end=date('Y-m-d H:i:s');
            $start= date('Y-m-d H:i:s', strtotime($end.'- '.$numberofdays.'days'));
            $failed=DB::table('transaction')->where('statut',15)->where('date_et_heure','>',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
            $success=DB::table('transaction')->where('statut',12)->where('date_et_heure','>',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
            $total=DB::table('transaction')->where('date_et_heure','>',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
            $totalmoney=DB::table('transaction')->where('statut',12)->where('date_et_heure','>',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->sum('montant');
            $transactions=DB::table('transaction')->where('date_et_heure','>',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->orderBy('date_et_heure','desc')->paginate(5);
        }

        $result=[
            'failed'=>$failed,
            'success'=>$success,
            'total'=>$total,
            'totalmoney'=>$totalmoney,
            'transaction'=>$transactions
        ];
        return $result;

    }
    public function change_stat_type(Request $request){
        $cookie_val['all']=$request->input('full_stat');
        $cookie_val['number']=$request->input('number');
        $cookie_name='settings';
       // setcookie($cookie_name,$cookie_val,time()+(86400*30),'/');
        //setcookie($cookie_name,$cookie_val,time()+(86400*30),'/');
        $_SESSION['settings']=$cookie_val;
        $end=date('Y-m-d H:i:s');
        //dd($full_stat);
        $results=$this->retrieve_boxes_data();
//        if ( $_SESSION['settings']['all']=='on'){
//            $start= date('Y-m-d H:i:s', strtotime($end.'- '.$_SESSION['settings']['number'].'days'));
//            $failed=DB::table('transaction')->where('statut',15)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->count();
//            $success=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->count();
//            $total=DB::table('transaction')->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->count();
//            $totalmoney=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->sum('montant');
//            $results=DB::table('transaction')->orderBy('date_et_heure','desc')->paginate(5);
//        }else{
//            $start= date('Y-m-d H:i:s', strtotime($end.'- '.$_SESSION['settings'].'days'));
//            $failed=DB::table('transaction')->where('statut',15)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
//            $success=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
//            $total=DB::table('transaction')->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->count();
//            $totalmoney=DB::table('transaction')->where('statut',12)->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->where('client_id',Auth::id())->sum('montant');
//            $results=DB::table('transaction')->where('client_id',Auth::id())->orderBy('date_et_heure','desc')->paginate(5);
//        }

//        $result=[
//            'failed'=>$failed,
//            'success'=>$success,
//            'total'=>$total,
//            'totalmoney'=>$totalmoney
//        ];
        return redirect()->route('index');
       // return view('admin.dashboard',compact('results'));
    }

}