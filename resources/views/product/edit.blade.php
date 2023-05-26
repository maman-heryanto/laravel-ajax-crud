<div class="p2">
    <div class="form-group">
        <input type="text" name="name" id="name" value="{{ $data->name }}" class="form-control"
            placeholder="Name Product">
    </div>
    <div class="form-group mt-3">
        <button class="btn btn-warning" onClick="update({{ $data->id }})">update</button>
    </div>
</div>
