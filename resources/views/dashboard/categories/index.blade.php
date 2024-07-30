<x-dashboard-layout title="All Categories">
    @section('content')
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Categories</h1>
            <x-dashboard-flash-message />
            <!-- DataTales Example -->
            <div class="card shadow mb-8">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('create.category') }}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Add Category</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <form id="searchForm" class="form-inline float-right">
                                        <div class="form-group">
                                            <input type="text" name="search" id="searchInput" value="{{ request('search') }}" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-primary ml-2">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>الإسم باللغه العربية</th>
                                    <th>Name in English</th>
                                    <th># of drugs</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->ar_name }}</td>
                                        <td><a href="{{ route('show.category', $category->id) }}">{{ $category->en_name }}</a>
                                        </td>
                                        <td>{{ $category->drugs_count }}</td>
                                        <td>{{ $category->status }}</td>
                                        <td>
                                            <div class="btn-circle btn-lg">
                                                <form action="{{ route('delete.category', $category->id) }}" method="POST" onsubmit="return confirmDelete()">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('edit.category',$category->id) }}"
                                                class="btn btn-info btn-circle">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No categories found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <x-dashboard-pagination :paginator="$categories" />
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script>
        $(document).ready(function() {
            $('#searchForm').on('submit', function(event) {
                event.preventDefault();
                var query = $('#searchInput').val();
                $.ajax({
                    url: '{{ URL::current() }}',
                    method: 'GET',
                    data: { search: query },
                    success: function(response) {
                        $('#results').html(response);
                    },
                    error: function(xhr) {
                        console.error('An error occurred:', xhr.responseText);
                    }
                });
            });
        });
    </script>
</x-dashboard-layout>
