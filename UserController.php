public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|unique:email',
            'phone' => 'required|numaric',
            'password' => 'required|min:6'
        ]);

        return view('insert');
    }
