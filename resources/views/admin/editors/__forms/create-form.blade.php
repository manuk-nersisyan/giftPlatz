<form method="post" action="{{ route('editors.store') }}">
    @csrf
    <div class="form-group row">
        <div class="col-2">
            <label for="name" class="required">Name</label>
            <input type="text"
                   name="name"
                   id="name_arm"
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}"
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
                   value="{{ old('email') }}"
                   required>
            @error('email')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-2">
            <label for="password" class="required">Password</label>
            <input type="password"
                   name="password"
                   id="password"
                   class="form-control @error('password') is-invalid @enderror"
                   value="{{ old('password') }}"
                   required>
            <span class="fa fa-fw fa-eye field-icon change-password"></span>
            @error('password')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-lg-2 col-3">
            <button type="submit" class="btn btn-primary btn-block">Create</button>
        </div>
        <div class="col-md-2 col-lg-2 col-3">
            <a href="{{ route('editors.index') }}" class="btn btn-primary btn-block">Cancel</a>
        </div>
    </div>
</form>

