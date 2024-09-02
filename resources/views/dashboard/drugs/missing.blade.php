<x-dashboard-layout title="All Drugs">
    @section('content')
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Missing Drugs</h1>
            <x-dashboard-flash-message />
            <!-- DataTales Example -->
            <div class="card shadow mb-8">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('all.drugs') }}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            {{-- <i class="fas fa-plus"></i> --}}
                                        </span>
                                        <span class="text">Go Back</span>
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
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Force Delete</th>
                                    <th>Restore</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($drugs as $drug)
                                    <tr>
                                        <td>{{ $drug->id }}</td>
                                        <td>{{ $drug->ar_name }}</td>
                                        <td><a href="{{ route('show.drug', $drug->id) }}">{{ $drug->en_name }}</a>
                                        </td>
                                        <td>{{ $drug->category->en_name }}</td>
                                        <td>{{ $drug->status }}</td>
                                        <td>
                                            <div class="btn-circle btn-lg">
                                                <form action="{{ route('force.delete.drug', $drug->id) }}" method="POST" onsubmit="return confirmDelete()">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <form class="btn btn-info btn-circle" action="{{ route('restore.drug',$drug->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="fas fa-edit"></button>
                                            </form>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Drugs found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <x-dashboard-pagination :paginator="$drugs" />
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
