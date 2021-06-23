<form>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label">Province</label>

        <div class="col-md-6">
            <select name="province" id="province" class="form-control">
                <option value="">== Select Province ==</option>
                @foreach ($provinces as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label">City</label>

        <div class="col-md-6">
            <select name="city" id="city" class="form-control">
                <option value="">== Select City ==</option>
            </select>
        </div>
    </div>
</form>