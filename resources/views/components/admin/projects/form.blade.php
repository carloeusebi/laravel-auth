<div class="row row-cols-md-2 gap-2">
    <div class="col">

        <form class="needs-validation" novalidate method="POST" action={{ route($action) }}>
            @csrf
            @method($method)

            {{-- NAME --}}
            <div class="mb-2">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" value="{{ old('name', $project->name) }}" required>
                <div class="invalid-feedback">
                    {{-- todo --}}
                </div>
            </div>

            {{-- thumbnail --}}
            <div class="mb-2">
                <label for="thumbnail" class="form-label">Project thumbnail</label>
                <input type="text" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail"
                    name="thumbnail" value="{{ old('thumbnail', $project->thumbnail) }}" required>
                <div class="invalid-feedback">
                    {{-- todo --}}
                </div>
            </div>

            {{-- URL --}}
            <div class="mb-2">
                <label for="url" class="form-label">Project url</label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" id="url"
                    name="url" value="{{ old('url', $project->url) }}" required>
                <div class="invalid-feedback">
                    {{-- todo --}}
                </div>
            </div>

            {{-- URL --}}
            <div class="mb-2">
                <label for="github_url" class="form-label">Github Url</label>
                <input type="text" class="form-control @error('github_url') is-invalid @enderror" id="github_url"
                    name="github_url" value="{{ old('github_url', $project->github_url) }}" required>
                <div class="invalid-feedback">
                    {{-- todo --}}
                </div>
            </div>


            <div class="mb-2">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description', $project->description) }}</textarea>
            </div>
    </div>

    <hr class="my-3">

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
    </form>
</div>
<div class="col">
    {{-- todo SHOW THUMBNAIL --}}

</div>
</div>
