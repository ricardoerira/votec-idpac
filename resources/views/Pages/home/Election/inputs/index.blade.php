
<input type="hidden" class = "" name="requeriments" value="{{ $requirement->id }}">
<label class = "" for="answers[{{$requirement->id}}]">
    {{ $requirement->name }}
</label>
@if ( $requirement->inputType->name == "Text" )
@include('pages.home.election.inputs.text')
@endif

@if ( $requirement->inputType->name == "File" )
@include('pages.home.election.inputs.file')
@endif

@if ( $requirement->inputType->name == "Select" )
@include('pages.home.election.inputs.select')
@endif

@if ( $requirement->inputType->name == "Radio" )
@include('pages.home.election.inputs.radio')
@endif

@if ( $requirement->inputType->name == "Date" )
@include('pages.home.election.inputs.date')
@endif