<form method="post" action="{{ route('products.update', ['product' => $product]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <div class="col-2">
            <label for="category_id" class="required">Category Id</label>
            <select id="category_id"
                    name="category_id"
                    class="form-control @error('category_id') is-invalid @enderror"
                    required>
                    <option value="" selected>Choose</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        @if ($errors->any() && old('category_id') == $category->id)
                        selected
                        @elseif(!$errors->any() && is_null(old('category_id')) && $product->category_id == $category->id)
                        selected
                        @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-4">
            <label for="subcategory_id">Subcategory Id</label>
            <select id="subcategory_id"
                    name="subcategory_id"
                    class="form-control @error('subcategory_id') is-invalid @enderror">
                <option value="" selected>Choose</option>
                @foreach($product->category->subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}"
                        @if($errors->any() && old('subcategory_id') == $subcategory->id)
                        selected
                        @elseif(!$errors->any() && is_null(old('subcategory_id')) && $product->subcategory_id == $subcategory->id)
                        selected
                        @endif>
                        {{ $subcategory->name }}
                    </option>
                @endforeach
            </select>
            @error('subcategory_id')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2">
            <label for="name" class="required">Name</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control @error('name') is-invalid @enderror"
                   value="@if($errors->any()){{ old('name') }}@else{{ $product->name }}@endif"
                   required>
            @error('name')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-2">
            <label class="pt-2 mt-30" for="is_active">Is Active</label>
            <input type="checkbox"
                   name="is_active"
                   id="is_active"
                   class="@error('is_active') is-invalid @enderror"
                   @if($errors->any() && old('is_active') == 'on' || $product->is_active == true) checked @endif>
            @error('is_active')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>

        <div class="col-2">
            <label class="pt-2 mt-30" for="is_actual">Is Actual</label>
            <input type="checkbox"
                   name="is_actual"
                   id="is_actual"
                   class="@error('is_actual') is-invalid @enderror"
                   @if($errors->any() && old('is_actual') == 'on' || $product->is_actual == true) checked @endif>
            @error('is_actual')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label for="description"  class="required">Description</label>
            <textarea name="description"
                    id="description"
                    class="form-control editor @error('description') is-invalid @enderror"
                    rows="5">
                    @if($errors->any()){{ old('description') }}@else{{ $product->description }}@endif</textarea>
            @error('description')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label for="hover_description"  class="required">Hover Description</label>
            <textarea name="hover_description"
                    id="hover_description"
                    class="form-control editor @error('hover_description') is-invalid @enderror"
                    rows="5">@if($errors->any()){{ old('hover_description') }}@else{{ $product->hover_description }}@endif</textarea>
            @error('hover_description')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>


    <div class="form-group row">
        <div class="col-6">
            <label for="images">Images</label>
            <input type="file" name="images[]" class="form-control @error('images*') is-invalid @enderror" multiple>
            @error('images*')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            @foreach ($product->images as $image)
                <div class="delete-product-image-container">
                    <button type="button" class="close delete-product-image" data-id="{{ $image->id }}" data-product_id="{{ $product->id }}">
                        <span>&times;</span>
                    </button>
                    <img src="{{ Storage::disk('product')->url($product->id .'/'. $image->image) }}" class="product-image">
                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-lg-2 col-3">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
        <div class="col-md-2 col-lg-2 col-3">
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-block">Cancel</a>
        </div>
    </div>
</form>
