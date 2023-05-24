{{-- ===== cities ===== --}}
<div class="col-md-6">
    <div style="margin-bottom:40px" class="form-group">
        <label>City</label>
        <select name="city_id" class="ui search city dropdown w-100" id='city_id'>
            @foreach ($cities as $city)
                <option {{$city->id == $admin->city_id ? 'selected' : ''}} value="{{ $city->id }}">{{ $city->name }}</option>
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
        <select name="area_id" class="ui search dropdown area w-100" id='area_id'>
            @foreach ($city_areas as $area)
            <option {{ $area->id == $admin->area_id ? 'selected' : ''}} value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select>

        @error('area_id')
            <p class="help text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>
