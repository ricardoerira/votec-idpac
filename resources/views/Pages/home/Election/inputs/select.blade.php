
<select
    name="requirement[{{$requirement->id}}]"
    id="r{{$requirement->id}}"
    class="form-control w-50"
>
    @foreach (optionChoice( $requirement->id ) as $item)
        <option value = "{{$item->choice->id}}">{{$item->choice->name}}</option>
    @endforeach
</select>
