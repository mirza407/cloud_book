<ul class="list-group">
    @foreach ($sections as $section)
        <li class="list-group-item">
            {{ $section->title }}
            <span class="float-right">
                <a href="{{ route('sections.edit', $section->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('sections.destroy', $section->id) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to delete this section?')">Delete</button>
                </form>
            </span>
            @if ($section->children->count() > 0)
                @include('sections.partials.subsections', ['sections' => $section->children])
            @endif
        </li>
    @endforeach
</ul>
