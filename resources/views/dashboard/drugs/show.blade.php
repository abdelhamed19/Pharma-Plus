<x-dashboard-layout title="Drug" >
    @section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Drug</h1>
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
                                <th>الوصف باللغه العربية</th>
                                <th>Description in English</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $drug->ar_name }}</td>
                                <td>{{ $drug->en_name  }}</td>
                                <td>{{ $drug->ar_description }}</td>
                                <td>{{ $drug->en_description }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $drug->category->en_name }}</td>
                                <td>{{ $drug->status }}</td>
                                <td>{{ $drug->price }}</td>
                                <td>{{ $drug->stock }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
    </x-dashboard-layout>
