@csrf

<div class="mb-6">
    <label for="title" class="block text-gray-700 text-sm font-medium">Title</label>
    <input class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" type="text" name="title" id="title" value="{{ old("title", $post->title) }}">
</div>

<div class="mb-6">
    <label for="slug" class="block text-gray-700 text-sm font-medium">Slug</label>
    <input class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" type="text" name="slug" id="slug" value="{{ old("slug", $post->slug) }}">
</div>

<div class="mb-6">
    <label for="description" class="block text-gray-700 text-sm font-medium">Description</label>
    <textarea class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" name="description" id="description">{{ old("description", $post->description) }}</textarea>
</div>

<div class="mb-6">
    <label for="content" class="block text-gray-700 text-sm font-medium">Content</label>
    <textarea class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" name="content" id="content">{{ old("content", $post->content) }}</textarea>
</div>

<div class="mb-6">
    <label for="category_id" class="block text-gray-700 text-sm font-medium">Pick a category</label>
    <select name="category_id" id="category_id" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
        @foreach($categories as $title => $id)
            <option value="{{ $id }}" {{ old("category_id", $post->category_id) == $id ? 'selected' : '' }}>
                {{ $title }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-6">
    <label for="posted" class="block text-gray-700 text-sm font-medium">Published</label>
    <select name="posted" id="posted" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
        <option value="no" {{ old("posted", $post->posted) == 'no' ? 'selected' : '' }}>No</option>
        <option value="yes" {{ old("posted", $post->posted) == 'yes' ? 'selected' : '' }}>Yes</option>
    </select>
</div>

@if(isset($task) && $task == 'edit')
    <div class="mb-6">
        <label for="image" class="block text-gray-700 text-sm font-medium">Image</label>
        <input class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" type="file" name="image" id="image">
    </div>
@endif
