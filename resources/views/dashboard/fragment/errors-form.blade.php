@if($errors->any())
    <div class="error-container">
        @foreach($errors->all() as $error)
            <div class="error-message">
                {{ $error }}
            </div>
        @endforeach
    </div>
@endif

<style>
    .error-container {
        margin-bottom: 1.5rem;
        padding: 1rem;
        background-color: #ffe5e5;
        border: 1px solid #f5c2c2;
        border-radius: 4px;
    }

    .error-message {
        color: #d32f2f;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    .error-message:last-child {
        margin-bottom: 0;
    }
</style>
