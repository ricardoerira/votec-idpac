<input
    type="text"
    name="requirement[{{$requirement->id}}]"
    id="r{{$requirement->id}}"
    class="form-control fontform"
    @if ($requirement->obligatory == 1)
        required
    @endif
    @if($eu <> null)
        value = "{{valueRequirement($eu, $requirement->id)}}";
    @endif
>