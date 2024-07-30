<x-dashboard-layout title="Category" >
    @section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Category</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>الإسم باللغه العربية</th>
                                <th>Name in English</th>
                                <th># of drugs</th>
                                <th>Status</th>
                                <th>الوصف</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $category->ar_name }}</td>
                                <td>{{ $category->en_name  }}</td>
                                <td>{{ $category->drugs_count }}</td>
                                <td>{{ $category->status }}</td>
                                <td>{{ $category->en_description }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
    </x-dashboard-layout>
