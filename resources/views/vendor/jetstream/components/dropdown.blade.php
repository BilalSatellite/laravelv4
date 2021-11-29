@props(['id'])

<li class="nav-item dropdown menu-open">
    <a id="{{ $id }}" {!! $attributes->merge(['class' => 'nav-link']) !!} role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $trigger }}
    </a>

    <ul class="nav nav-treeview" aria-labelledby="{{ $id }}">
        {{ $content }}
    </ul>
</li>
