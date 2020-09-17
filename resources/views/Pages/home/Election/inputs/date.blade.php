<input
    type="date"
    name="requirement[{{$requirement->id}}]"
    id="r{{$requirement->id}}"
    class="form-control w-50 fontform"
    @if ($requirement->obligatory == 1)
        required
    @endif
    @if($eu <> null)
        value = "{{valueRequirement($eu, $requirement->id)}}";
    @endif
    >