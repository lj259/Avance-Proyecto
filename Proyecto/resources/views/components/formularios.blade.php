<form action="{{ $ruta }}" method="{{ $metodo }}">
    @foreach($campos as $campo)
        @if($campo['type'] == 'text')
            <div>
                <label for="{{ $campo['name'] }}">{{ $campo['label'] }}</label>
                <input type="text" name="{{ $campo['name'] }}" id="{{ $campo['name'] }}" value="{{ old($campo['name']) }}">
            </div>
        @elseif($campo['type'] == 'textarea')
            <div>
                <label for="{{ $campo['name'] }}">{{ $campo['label'] }}</label>
                <textarea name="{{ $campo['name'] }}" id="{{ $campo['name'] }}">{{ old($campo['name']) }}</textarea>
            </div>
        @elseif($campo['type'] == 'select')
            <div>
                <label for="{{ $campo['name'] }}">{{ $campo['label'] }}</label>
                <select name="{{ $campo['name'] }}" id="{{ $campo['name'] }}">
                    @foreach($campo['options'] as $value => $option)
                        <option value="{{ $value }}">{{ $option }}</option>
                    @endforeach
                </select>
            </div>
        @endif
    @endforeach

    <button type="submit">Submit</button>
</form>
