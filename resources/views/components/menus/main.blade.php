<x-links.btn-primary class="text-xs font-medium" href="/" :active="request()->routeIs('home')">
    <i class="fa-sharp fa-solid fa-house mr-2"></i>
    home
</x-links.btn-primary>
<x-links.btn-primary class="text-xs font-medium" href="#">
{{--<x-link.btn-menu class="text-xs font-medium" href="{{ route('members.index') }}" :active="request()->routeIs('members.*')">--}}
    <i class="fa-solid fa-people-group mr-2"></i>
    Team
</x-links.btn-primary>
<x-links.btn-primary class="text-xs font-medium" href="#">
    <i class="fa-solid fa-blog mr-2"></i>
    Blog
</x-links.btn-primary>
<x-links.btn-primary class="text-xs font-medium" href="#">
    <i class="fa-solid fa-images mr-2"></i>
    Albums
</x-links.btn-primary>
<x-links.btn-primary class="text-xs font-medium" href="#">
    <i class="fa-solid fa-calendar-days mr-2"></i>
    Calender
</x-links.btn-primary>
