<script src="https://unpkg.com/lucide@latest"></script>

@php
    $currentRoute = request()->path(); // ngambil path url sekarang, misal: 'kasir' atau 'bayar'
@endphp

<div class="fixed bottom-0 left-0 right-0 bg-white p-3 flex justify-around items-center shadow-md">
    <a href="/kasir" class="flex flex-col items-center text-xs {{ $currentRoute == 'kasir' ? 'text-green-600' : 'text-gray-400' }}">
        <i data-lucide="home" class="h-5 w-5 mb-1"></i>
        Home
    </a>
    <a href="/bayar" class="flex flex-col items-center text-xs {{ $currentRoute == 'bayar' ? 'text-green-600' : 'text-gray-400' }}">
        <i data-lucide="layout-dashboard" class="h-5 w-5 mb-1"></i>
        Kasir
    </a>
    <a href="/settings" class="flex flex-col items-center text-xs {{ $currentRoute == 'settings' ? 'text-green-600' : 'text-gray-400' }}">
        <i data-lucide="settings" class="h-5 w-5 mb-1"></i>
        Settings
    </a>
</div>

<script>
    lucide.createIcons();
</script>
