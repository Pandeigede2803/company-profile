 <div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Welcome to the Admin Dashboard</h1>
    <p class="mb-8">This is where you can manage admin tasks.</p>

    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Employee Management</h2>

        <a href="{{ route('employees.create') }}" class="bg-blue-600 text-white py-2 px-4 rounded">Add Employee</a>

        @if (session('success'))
            <div class="mt-4 p-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="table-auto w-full mt-4">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Position</th>
                    <th class="px-4 py-2">Phone</th>
                    <th class="px-4 py-2">Hire Date</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td class="border px-4 py-2">{{ $employee->name }}</td>
                        <td class="border px-4 py-2">{{ $employee->email }}</td>
                        <td class="border px-4 py-2">{{ $employee->position }}</td>
                        <td class="border px-4 py-2">{{ $employee->phone }}</td>
                        <td class="border px-4 py-2">{{ $employee->hire_date }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('employees.edit', $employee->id) }}" class=" bg-blue-600 text-white py-1 px-2 rounded">Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" bg-red-600 text-white py-1 px-2 rounded" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
