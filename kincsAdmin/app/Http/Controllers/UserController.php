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
            
            return redirect()->route('users.index')->with('modal', 'userCreated');
        }
        
        public function edit(User $user)
        {
            return view('users.edit', compact('user'));
        }
        
        public function update(Request $request, User $user)
        {
    
            $request->validate([
                'name' => 'required|unique:users,name,'.$user->id,
                'email' => 'required|email|unique:users,email,'.$user->id,
                'role' => 'required',
            ]);
            if ($request['password'] && $request['password'] !== null) {
                $request['password'] = bcrypt($request['password']);
                $user->update($request->all());
                return redirect()->route('users.index')->with('modal', 'editedWithPassword');
                
            }
            
            $input = request()->except(['password']);
            
            $user->update($input);
            return redirect()->route('users.index')->with('modal', 'editedBase');
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
    }
