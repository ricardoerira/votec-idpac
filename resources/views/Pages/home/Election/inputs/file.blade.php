<input
    type="file"
    name="requirement[{{$requirement->id}}]"
    id="r{{$requirement->id}}"
    class="form-control fontform"
    @if ($requirement->obligatory == 1)
        required
    @endif
>