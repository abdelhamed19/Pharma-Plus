<x-dashboard-layout title="Create Drug">
    @section('content')
        <div class="container full-page-form">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Drug</h4>
                    <form action="{{ route('store.drug') }}" method="POST" class="forms-sample">
                        @csrf
                        <x-dashboard-form-input name="ar_name" value="{{ old('ar_name') }}" label="الإسم باللغه العربية"
                            placeholder="الإسم باللغه العربية" />
                        <x-dashboard-form-input name="en_name" value="{{ old('en_name') }}" label="Name in English" placeholder="Name in English" />
                        <x-dashboard-form-input name="en_description" value="{{ old('en_description') }}" label="Description" placeholder="Description" />
                        <x-dashboard-form-input name="ar_description" value="{{ old('ar_description') }}" label="الوصف باللغه العربية"
                            placeholder="الوصف باللغه العربية" />
                            <select name="category_id" class="form-control" id="exampleInputUsername1">
                                <option selected>Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->ar_name }}</option>
                                @endforeach
                            </select>
                            <br>
                        <select name="status" class="form-control" id="exampleInputUsername1">
                            <option selected>Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <br>
                        <x-dashboard-form-input name="price" value="{{ old('price') }}" label="price" placeholder="price" />
                        <x-dashboard-form-input name="stock" value="{{ old('stock') }}" label="stock" placeholder="stock" />

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{ route('all.categories') }}" type="button" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
