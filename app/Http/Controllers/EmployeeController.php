<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $employees = Employee::all();
        return view('admin.dashboard', compact('employees'));
    }
    public function dashboard()
    {
        // Ambil semua data karyawan dari database
        $employees = Employee::all();

        // Kirim data karyawan ke view dashboard
        return view('admin.dashboard', compact('employees'));
    }
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { return view('employees.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Employee::create($request->all());
        return redirect()->route('admin.dashboard');
        //
    }

    /**
     * Get the fillable attributes for the model.
     *
     * @return array
     */
    protected $fillable = [
        'name',
        'email',
        'position',
        'phone',
        'hire_date',
        '_token',
    ];

    /**
     * Display the specified resource.
     */
    // public function show(Employee $employee)
    // {
    //     //
    //     return view('employees.edit', compact('employee'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('admin.dashboard');
        //
    }


    /**
     * Remove the specified resource from storage.
     */
 
}
