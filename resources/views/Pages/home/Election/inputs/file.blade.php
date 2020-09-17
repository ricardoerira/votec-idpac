<input
    type="file"
    name="requirement[{{$requirement->id}}]"
    id="r{{$requirement->id}}"
    class="form-control fontform"
    @if ($requirement->obligatory == 1)
        required
    @endif
    @if($eu <> null)
        @if(valueRequirement($eu, $requirement->id) <> "")
            value = "{{ Storage::url(valueRequirement($eu, $requirement->id)) }}"
        @endif
    @endif
>
<a href="{{ Storage::url(valueRequirement($eu, $requirement->id)) }}">{{(pathinfo(valueRequirement($eu, $requirement->id), PATHINFO_FILENAME)) }}</a>