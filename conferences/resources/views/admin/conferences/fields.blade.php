<p>
    <label for="title">{{ __('messages.conference_title') }}</label><br>
    <input id="title" name="title" type="text" value="{{ old('title') }}" required>

    @error('title')
        <br><strong>{{ $message }}</strong>
    @enderror
</p>

<p>
    <label for="description">{{ __('messages.description') }}</label><br>
    <textarea id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
    @error('description')
        <br><strong>{{ $message }}</strong>
    @enderror
</p>

<p>
    <label for="speaker">{{ __('messages.speakers') }}</label><br>
    <input id="speaker" name="speaker" type="text" value="{{ old('speaker') }}" required>
    @error('speaker')
        <br><strong>{{ $message }}</strong>
    @enderror
</p>

<p>
    <label for="date">{{ __('messages.date') }}</label><br>
    <input id="date" name="date" type="date" value="{{ old('date') }}" required>
    @error('date')
        <br><strong>{{ $message }}</strong>
    @enderror
</p>

<p>
    <label for="time">{{ __('messages.time') }}</label><br>
    <input id="time" name="time" type="time" value="{{ old('time') }}" required>
    @error('time')
        <br><strong>{{ $message }}</strong>
    @enderror
</p>

<p>
    <label for="address">{{ __('messages.address') }}</label><br>
    <input id="address" name="address" type="text" value="{{ old('address') }}" required>
    @error('address')
        <br><strong>{{ $message }}</strong>
    @enderror
</p>