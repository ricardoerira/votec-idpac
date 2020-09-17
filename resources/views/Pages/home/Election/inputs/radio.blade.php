<fieldset name="requirement[{{$requirement->id}}]">
    <div class="form-check">
        @foreach (optionChoice( $requirement->id ) as $item)
        <input
            type="radio"
            name="requirement[{{$requirement->id}}]"
            value="{{ $item->choice->id }}"
            class="form-check-input fontform"
            id="r{{$requirement->id}}{{ $item->id }}"
            @if ($requirement->obligatory == 1)
                required
            @endif
            @if($eu <> null)
                @if(valueRequirement($eu, $requirement->id) == $item->choice->id)
                    checked
                @endif
            @endif
        >
        <label for="answers[]" class="form-check-label fontform">{{ $item->choice->name }}</label>
        <br>
        @endforeach
    </div>
</fieldset>