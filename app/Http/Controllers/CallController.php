<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\Call;
use App\Notifications\PedidoNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SistemaMail;
use App\Models\User;

class CallController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        $tasks = Call::where('user_id', Auth::id())->get();

        return view('visibility.calls', [
        'tasks' => $tasks,
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {

        $call = Call::create([
            
            'size' => $request->input('size'),
            'flavor' => $request->input('flavor'),
            'endereco' => $request->input('endereco'),
            'user_id' => Auth::id()
        ]);
        $call->save();

        Auth::user()->notify(new PedidoNotification());

        $user = User::factory()->make();
        //esse email tem o intuito de ir para o admin do sistema, avisando que um usuario fez um pedido
        $user->email = 'jesus.maria@escolar.ifrn.edu.br';
        Mail::to($user)->send(new SistemaMail);

        return redirect(url('/calls'));
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