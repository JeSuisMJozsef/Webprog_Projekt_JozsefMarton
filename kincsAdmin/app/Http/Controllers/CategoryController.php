<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Category;
    use Illuminate\Http\Request;
    
    class CategoryController extends Controller
    {
        public function index()
        {
            $categories = Category::all();
            return view('categories.index', compact('categories'));
        }
        
        public function create()
        {
            return view('categories.create');
        }
        

        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|unique:categories',
                'description' => 'required'
            ]);
            Category::create($request->all());
            return redirect()->route('categories.index')->with('modal', 'categoryCreated');
        }
        public function show(Category $category)
        {
            $cat = Category::find($category->id);
            $prod = Category::find($category->id)->products;
        
            return view('categories.show', compact(['cat', 'prod']));
        }
    
    
        public function edit(Category $category)
        {
            return view('categories.edit', compact('category'));
        }
        
        public function update(Request $request, Category $category)
        {
            $request->validate([
                'name' => 'required|unique:categories,name,'.$category->id,
                'description' => 'required'
            ]);
            $category->update($request->all());
            return redirect()->route('categories.index')->with('modal', 'categoryEdited');
        }
        
        public function delete(Category $category)
        {
            $category->delete();
            return redirect()->route('categories.index')->with('modal', 'categoryDeleted');
        }
        
    }
