<fieldset id="r{{$requirement->id}}">
    <div class="form-check">
        @foreach (optionChoice( $requirement->id ) as $item)
        <input
            type="radio"
            value="{{ $item->id }}"
            class="form-check-input"
            id="r{{$requirement->id}}{{ $item->id }}"
        >
        <label for="answers[]" class="form-check-label">{{ $item->choice->name }}</label>
        <br>
        @endforeach
    </div>
</fieldset>