@switch($name)
    @case('user')
        <svg class="{{ $class }}" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 0114 0H3z"/>
        </svg>
        @break

    @case('home')
        <svg class="{{ $class }}" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2L2 9h3v9h10V9h3L10 2z"/>
        </svg>
        @break

    @case('briefcase')
        <svg class="{{ $class }}" fill="currentColor" viewBox="0 0 20 20">
            <path d="M6 2a2 2 0 00-2 2v2h12V4a2 2 0 00-2-2H6zM4 8v8a2 2 0 002 2h8a2 2 0 002-2V8H4z"/>
        </svg>
        @break

    @case('store')
        <svg class="{{ $class }}" fill="currentColor" viewBox="0 0 20 20">
            <path d="M4 3h12l1 5H3l1-5zm1 7h10v7H5v-7z"/>
        </svg>
        @break

    @case('tag')
        <svg class="{{ $class }}" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 10l6 6 10-10V2H10L2 10z"/>
        </svg>
        @break

    @default
        <svg class="{{ $class }}" fill="currentColor" viewBox="0 0 20 20">
            <circle cx="10" cy="10" r="10"/>
        </svg>
@endswitch
