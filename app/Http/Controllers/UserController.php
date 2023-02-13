<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function __construct () {
        //$this->middleware('auth');
        
        //autorização via Policy para resource controller
       // $this->authorizeResource(User::class);
    }

    //listar todos os usuários do sistema
    //so admin pode fazer isso
    public function index() {

        $users = User::where('id', '<>', Auth::id())->get();
        return view('users.index',[
            'users' => $users
        ]);
    }

    //definir um usuário como super admin
    public function superAdmin (Request $request, User $user) {        
        
        //$this->authorize('superAdmin');        

        $user = User::find($user->id);
        $user->admin = 1;
        $user->save();
        
        return back();

    }


    public function show (Request $request, User $user) {

        $path = "/perfil/" .$user->photo;
        $full_path = Storage::path($path);
        $base64 = base64_encode(Storage::get($path));
        $image_data = 'data:'.mime_content_type($full_path) . ';base64,' . $base64;

        return view ('users.show', [
            'user'=> $user,
            'photo'=>$image_data,
        ]);
    }

    //editar dados
    public function edit(Request $request, User $user) {
        return view('users.edit', [
            'user'=>$user
        ]);
    }

    //salvar dados editados
    public function update(Request $request, User $user) {       
        

        //obter image
        $extension = $request->file('photo')->getClientOriginalExtension();
        $filename = 'ftperfil'.$user->id.'.'.$extension;
        $file = $request->file('photo')->storeAs('perfil', $filename);
        
        // return $file;

        //atualizar os dados
        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'photo' => $filename,
        ]);

        $user->photo = $filename;
        $user->save();
        return redirect(url('users/show', [$user->id]));

    }
}
