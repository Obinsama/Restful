<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;



class TransactionController extends Controller
{
    public function index(){
        $result=DB::table('transaction')->get();
        return response()->json($result,200);
    }
    public function create(Request $request){
        // $result["transaction"] = array();
        $montant = $request->input("montant");
        $numero = $request->input("numero");
        $motif = 'Achat data';
        $client_id=$request->input("client_id");
        $date_et_heure = date('Y-m-d H:i:s');
       DB::table('transaction')->insert([
            'client_id'=>$client_id,
            'numero_tel'=>intval($numero),
            'montant'=>intval($montant),
            'motif'=>$motif,
            'date_et_heure'=>$date_et_heure,
            'statut'=>10
        ]);
//        $result=creerTransaction($bdd,$client_id,$numero,$montant,$motif,$date_et_heure); //si les parametres sont ok l'api va creer une transaction avec lesdits parametres
        $result=DB::table('transaction')->where('client_id',$client_id)->get()->last();
        return response()->json($result,201);
    }
    public function show($client_id,$numero,$montant){

    }
    public function addToQueue(){
        DB::table('transaction')->where('statut',10)->limit(1)->update(['statut'=>15]);
        $result["response"]=DB::table('transaction')->where('statut',15)->limit(1)->get();
        DB::table('transaction')->where('statut',15)->limit(1)->update(['statut'=>11]);
        return response()->json($result);
    }
    public function totalIncome(Request $request){
        $client_id=$request->input('client_id');
        $numberofdays=$request->input('numberofdays');
        $end=date('Y-m-d H:i:s');
        $start= date('Y-m-d H:i:s', strtotime($end.'- '.$numberofdays.'days'));
        $result=DB::table('transaction')->where('client_id',intval($client_id))->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->sum('montant');
      //  $result=['numberofdays'=>$numberofdays,'client_id'=>$client_id];

        return response()->json($result);
    }
    public function totalIncomeAdmin(Request $request){
        $numberofdays=$request->input('numberofdays');
        $end=date('Y-m-d H:i:s');
        $start= date('Y-m-d H:i:s', strtotime($end.'- '.$numberofdays.'days'));
        $result=DB::table('transaction')->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->sum('montant');
        return response()->json($result);
    }
    public function totalTransactions(Request $request){
        $client_id=$request->input('client_id');
        $numberofdays=$request->input('numberofdays');
        $end=date('Y-m-d H:i:s');
        $start= date('Y-m-d H:i:s', strtotime($end.'- '.$numberofdays.'days'));
        $result=DB::table('transaction')->where('client_id',intval($client_id))->where('date_et_heure','>=',$start)->where('date_et_heure','<=',$end)->count();
       //dd($result->count());
        return response()->json($result);

    }
    public function totalTransactionsAdmin(Request $request){
        $numberofdays=$request->input('numberofdays');
        $end=date('Y-m-d H:i:s');
        $start= date('Y-m-d H:i:s', strtotime($end.'-'.$numberofdays.'day'));
        $result=DB::table('transaction')->where('date_et_heure','>',$start)->where('date_et_heure','<',$end)->count();
        return response()->json($result,200);

    }
    public function listAllTransaction(Request $request){
        $client_id=$request->input('client_id');
        $numberofdays=$request->input('numberofdays');
        $end=date('Y-m-d H:i:s');
        $start= date('Y-m-d H:i:s', strtotime($end.'-'.$numberofdays.'day'));
        $result=DB::table('transaction')->where('date_et_heure','>',$start)->where('date_et_heure','<',$end)->get();
        return response()->json($result,200);
    }
    public function listTransactionByClient(Request $request){
        $client_id=$request->input('client_id');
        $numberofdays=$request->input('numberofdays');
        $end=date('Y-m-d H:i:s');
        $start= date('Y-m-d H:i:s', strtotime($end.'-'.$numberofdays.'day'));
        $result=DB::table('transaction')->where('client_id',intval($client_id))->where('date_et_heure','>',$start)->where('date_et_heure','<',$end)->get();
        return response()->json($result,200);
    }
    public function checkJson(Request $request){
        $json_sms['s_number']=$request->input('s_number');
        $json_sms['transaction_id']=$request->input('transaction_id');
        $json_sms['from_number']=$request->input('from_number');
        $json_sms['encoding']=$request->input('encoding');
        $json_sms['client_number']=$request->input('client_number');
        $json_sms['state']=$request->input('state');
        $json_sms['message']=$request->input('message');
        $json_sms['montant']=$request->input('montant');
        $json_sms['date_time']=$request->input('date_time');
        $json_sms['date_time']=strtotime($json_sms['date_time']);
        $this->saveJson($json_sms);
        $trans=DB::table('transaction')->where('numero_tel',intval($json_sms['client_number']))->where('statut',11)->get();
        if(!($trans->isEmpty())&&($json_sms['state']=='Retrait reussi')){
            DB::table('transaction')->where('transaction_id',intval($trans[0]['transaction_id']))->update(['statut'=>11]);
            $result='[PHP] CHECK SUCCESS :) MONEY RECEIVED FROM'.$json_sms['client_number'];
        }else{
            $result='[PHP] CHECK FAILED NO CASH ENTRANCE FROM'.$json_sms['client_number'];
        }
        return response()->json($result);
    }
    public function saveJson($json_sms){
        $date_et_heure = date('Y-m-d H:i:s');
        $result= DB::table(received_messages)->insert([
            'transaction_id'=>$json_sms['transaction_id'],
            's_number'=>$json_sms['s_number'],
            'from_number'=>$json_sms['from_number'],
            'message'=>$json_sms['message'],
            'client_number'=>$json_sms['client_number'],
            'montant'=>$json_sms['montant'],
            'encoding'=>$json_sms['encoding'],
            'date_time'=>$date_et_heure,
        ]);
        return response()->json($result);
    }
    public function takeTransactionId(Request $request){
        $client_number= $request->input('transaction');
        $result['response']=DB::table('transaction')->where('numero_tel',$client_number)->where('statut',11)->orderBy('date_et_heure','desc')->limit(1)->get();
        return response()->json($result);
    }
}