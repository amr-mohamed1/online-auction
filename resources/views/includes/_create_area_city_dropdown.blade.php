{{-- ===== cities ===== --}}
<div class="col-md-6">
    <div style="margin-bottom:40px" class="form-group">
        <label>City</label>
        <select name="city_id" class="ui city search dropdown w-100" id='city_id'>
            <option disabled selected value="">Choose City</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>

        @error('city_id')
            <p class="help text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>

{{-- ===== areas ===== --}}
<div class="col-md-6">
    <div style="margin-bottom:40px" class="form-group">
        <label>Area</label>
        <select name="area_id" class="ui area search dropdown w-100" id='area_id'>
            <option disabled selected value="">Choose Area</option>

        </select>


        @error('area_id')
            <p class="help text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>
