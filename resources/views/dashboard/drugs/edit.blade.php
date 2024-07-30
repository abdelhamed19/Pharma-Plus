<x-dashboard-layout title="Edit Drug">
    @section('content')
        <div class="container full-page-form">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Drug</h4>
                    <form action="{{ route('update.drug',$drug->id) }}" method="POST" class="forms-sample">
                        @csrf
                        @method('put')
                        <x-dashboard-form-input name="ar_name" value="{{ $drug->ar_name }}" label="الإسم باللغه العربية"
                            placeholder="الإسم باللغه العربية" />
                        <x-dashboard-form-input name="en_name" value="{{ $drug->en_name }}" label="Name in English" placeholder="Name in English" />
                        <x-dashboard-form-input name="en_description" value="{{ $drug->en_description }}" label="Description" placeholder="Description" />
                        <x-dashboard-form-input name="ar_description" value="{{ $drug->ar_description }}" label="الوصف باللغه العربية"
                            placeholder="الوصف باللغه العربية" />
                        <select name="status" class="form-control" id="exampleInputUsername1">
                            <option value="{{ $drug->status }}" selected>{{ $drug->status }}</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{ route('all.drugs') }}" type="button" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
