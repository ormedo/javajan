
@if (count($errors) > 0 or ( isset($errorMessage) and $errorMessage != ''))
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>
        <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
                @if (( isset($errorMessage) and $errorMessage != ''))
                    <li>{{ $errorMessage }}</li>
                @endif
        </ul>
    </div>
@endif