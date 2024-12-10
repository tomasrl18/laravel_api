@if(session('status'))
    <div class="max-w-xl mx-auto mt-4 mb-4 p-4 bg-green-100 text-green-950 border-l-4 border-green-500 rounded-lg text-center uppercase font-bold">
        {{ session('status') }}
    </div>
@endif
