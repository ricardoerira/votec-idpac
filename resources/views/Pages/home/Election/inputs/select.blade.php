
<select
    name="requirement[{{$requirement->id}}]"
    id="r{{$requirement->id}}"
    class="form-control w-50 fontform"
    @if ($requirement->obligatory == 1)
        required
    @endif
>
    @foreach (optionChoice( $requirement->id ) as $item)
        <option value = "{{$item->choice->id}}"
            @if($eu <> null)
                @if(valueRequirement($eu, $requirement->id) == $item->choice->id)
                    selected
                @endif
            @endif
            >{{$item->choice->name}}</option>
    @endforeach
</select>
