@csrf

<label for="title">Title</label>
<input type="text" name="title" id="title" class="input" value="{{ $post->title }}">

<label for="slug">Slug</label>
<input type="text" name="slug" id="slug" class="input" value="{{ $post->slug }}">

<label for="description">Description</label>
<textarea name="description" id="description" class="textarea">{{ $post->description ?? '' }}</textarea>

<label for="content">Content</label>
<textarea name="content" id="content" class="textarea">{{ $post->content ?? '' }}</textarea>

<label for="category_id">Pick a category</label>
<select name="category_id" id="category_id" class="select">
    @foreach($categories as $title => $id)
        <option value="{{ $id }}" {{ $post->category_id == $id ? 'selected' : '' }}>{{ $title }}</option>
    @endforeach
</select>

<label for="posted">Published</label>
<select name="posted" id="posted" class="select">
    <option value="no" {{ $post->posted == 'no' ? 'selected' : '' }}>No</option>
    <option value="yes" {{ $post->posted == 'yes' ? 'selected' : '' }}>Yes</option>
</select>
