@csrf

<div class="mb-6">
    <label for="title" class="block text-gray-700 text-sm font-medium">Title</label>
    <input class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" type="text" name="title" id="title" value="{{ old('title', $category->title) }}">
</div>

<div class="mb-6">
    <label for="slug" class="block text-gray-700 text-sm font-medium">Slug</label>
    <input class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" type="text" name="slug" id="slug" value="{{ old('slug', $category->slug) }}">
</div>
