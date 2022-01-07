<?php
    
    namespace App\Http\Controllers;
    
    use App\Http\Resources\UserResource;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;
    use Symfony\Component\Console\Input\Input;
    
    class UserController extends Controller
    {
        public function index()
        {
            
            $users = User::all();
            return view('users.index', compact('users'));
        }
        
        public function create()
        {
            return view('users.create');
        }
        
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|unique:users',
                'email' => 'required|unique:users|email',
                'role' => 'required',
                'password' => 'required|confirmed'
            ]);
            User::create($request->all());
            
            return redirect()->route('users.index')->with('modal', 'createdUser');
        }
        
        public function edit(User $user)
        {
            return view('users.edit', compact('user'));
        }
        
        public function update(Request $request, User $user)
        {
            if ($request['password'] && $request['password'] !== null) {
                $request['password'] = bcrypt($request['password']);
                $user->update($request->all());
                return redirect()->route('users.index')->with('modal', 'editedwithpassword');
                
            }
            
            $input = request()->except(['password']);
            
            $user->update($input);
            return redirect()->route('users.index')->with('modal', 'editedbase');
        }
        
        public function delete(User $user)
        {
            if (Auth::user()->getAuthIdentifier() !== $user->getAuthIdentifier()) {
                $currUser = Auth::user();
                Auth::setUser($user);
                Auth::logout();
                Auth::login($currUser);
                $user->delete();
                $user->tokens()->delete();
                return redirect()->route('users.index')->with('modal', 'userdeletesuccess');
            } else {
                
                return redirect()->route('users.index')->with('modal', 'userdeleteerror');
            }
            
        }
        
        public function me()
        {
            return response(Auth::user(), 200);
        }
        
        public function editme(Request $request)
        {
            $id = Auth::user()->getAuthIdentifier();
            $user = User::findOrFail($id);
            if ($request['password']) {
                $request['password'] = bcrypt($request['password']);
            }
            $user->update($request->all());
            return response($user, 200);
        }
        
        public function deleteme(Request $request)
        {
            $id = Auth::user()->getAuthIdentifier();
            $user = User::findOrFail($id);
            $user->tokens()->delete();
            $user->delete();
            Auth::logout();
            return response(null, 204);
            
        }
    }
