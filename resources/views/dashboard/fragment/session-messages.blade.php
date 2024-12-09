@if(session('status'))
    <div class="status-message">
        {{ session('status') }}
    </div>
@endif

<style>
    .status-message {
        max-width: 800px;
        margin: 1rem auto;
        padding: 1rem;
        border: 1px solid #4caf50;
        background-color: #e8f5e9;
        color: #2e7d32;
        border-radius: 8px;
        font-size: 1rem;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .status-message:hover {
        transform: translateY(-2px);
        opacity: 0.9;
    }
</style>
