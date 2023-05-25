<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
    </a>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link active" aria-current="page">
                <div class="text-center">Dashboard</div>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.posts.index') }}" class="nav-link active" aria-current="page">
                <div class="text-center">Posts</div>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.projects.index') }}" class="nav-link active" aria-current="page">
                <div class="text-center">Progetti</div>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.types.index') }}" class="nav-link active" aria-current="page">
                <div class="text-center">Tipi</div>
            </a>
        </li>
    </ul>
</div>
