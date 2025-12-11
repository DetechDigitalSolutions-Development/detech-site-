<div class="drawer-block">
    <div class="drawer-heading text text-18">Our Services</div>
    <ul class="drawer-additional-menu list-unstyled flex-direction-column">
        @foreach(config('menu.servicesMenu.items') as $item)  
            <li class="nav-item"><a class="menu-link" href="{{ route('services.show', $item['id']) }}">{{ $item['title'] }}</a></li>
        @endforeach
    </ul>
</div>
<div class="drawer-block drawer-block-contact">
    <div class="drawer-heading text text-18">Quick Contact</div>
    <ul class="drawer-additional-menu list-unstyled flex-direction-column">
        <li class="nav-item">
            <div class="menu-link no-hover">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                </svg>
                {{setting('company_address', $default = null)}}
            </div>
        </li>
        <li class="nav-item">
            <a class="menu-link" href="tel:{{setting('company_tel_no', $default = null)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z"/>
                </svg>
                {{setting('company_tel_no', $default = null)}}
            </a>
        </li>
        <li class="nav-item">
            <a class="menu-link" href="mailto:{{setting('company_email', $default = null)}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z"/>
                </svg>
                {{setting('company_email', $default = null)}}
            </a>
        </li>
    </ul>
</div>