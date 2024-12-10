@if($errors->any())
    <div class="mb-6 p-4 bg-red-100 border border-red-300 rounded-lg">
        @foreach($errors->all() as $error)
            <div class="text-red-600 text-sm mb-2 last:mb-0">
                {{ $error }}
            </div>
        @endforeach
    </div>
@endif
