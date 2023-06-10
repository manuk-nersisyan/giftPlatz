<form method="post" action="{{ route('editors.update', ['editor' => $editor]) }}">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <div class="col-2">
            <label for="name" class="required">Name</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control @error('name') is-invalid @enderror"
                   value="@if($errors->any()){{ old('name') }}@else{{ $editor->name }}@endif"
                   required>
            @error('name')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-2">
            <label for="email" class="required">Email</label>
            <input type="email"
                   name="email"
                   id="email"
                   class="form-control @error('email') is-invalid @enderror"
                   value="@if($errors->any()){{ old('email') }}@else{{ $editor->email }}@endif"
                   required>
            @error('email')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-2">
            <label for="password">Password</label>
            <input type="password"
                   name="password"
                   id="password"
                   class="form-control @error('password') is-invalid @enderror"
                   value="{{ old('password') }}">
            <span class="fa fa-fw fa-eye field-icon change-password"></span>
            @error('password')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
        <div class="col-2">
            <a href="{{ route('editors.index') }}" class="btn btn-primary btn-block">Cancel</a>
        </div>
    </div>
</form>
