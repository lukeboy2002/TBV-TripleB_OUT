{{--<x-link.btn-menu href="{{ route('admin.settings') }}" :active="request()->routeIs('admin.settings')">--}}
<x-links.btn-primary href="#" :active="request()->routeIs('admin.settings')">
    <i class="fa-solid fa-gauge mr-2"></i>Dashboard
</x-links.btn-primary>
