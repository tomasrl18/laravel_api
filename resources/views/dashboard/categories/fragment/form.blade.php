@csrf

<label for="title">Title</label>
<input type="text" name="title" id="title" class="input" value="{{ old("title", $category->title) }}">

<label for="slug">Slug</label>
<input type="text" name="slug" id="slug" class="input" value="{{ old("slug", $category->slug) }}">
