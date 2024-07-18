<form method="POST" action"{{ $action }}">
    @csrf
    {{ $slot }}
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
</form>