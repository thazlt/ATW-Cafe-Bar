<form action="{{url('user/recipe/')}}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ingridients') }}</label>

        <div class="col-md-6">
            <fieldset>
                <input type="checkbox" name="ingridients[]" value="Vodka">Vodka <br>
                <input type="checkbox" name="ingridients[]" value="Soju">Soju <br>
                <input type="checkbox" name="ingridients[]" value="Lemon">Lemon <br>
                <input type="checkbox" name="ingridients[]" value="Ice">Ice <br>
            </fieldset>

            @error('ingridients')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="guide" class="col-md-4 col-form-label text-md-right">{{ __('Guide') }}</label>

        <div class="col-md-6">
            <textarea id="guide" type="guide" class="form-control @error('guide') is-invalid @enderror" name="guide" value="{{ old('guide') }}" autocomplete="name" autofocus></textarea>
            @error('guide')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Submit') }}
            </button>
        </div>
    </div>
</form>
