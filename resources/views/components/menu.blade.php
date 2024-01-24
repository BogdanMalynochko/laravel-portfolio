<div class="container">
    <div class="flex justify-between items-center">
        <div class="flex gap-4">
            <x-icon-name/>
            <a href="/" class="text-white text-2xl">bmalynochko</a>
        </div>
        <div class="blue-border rounded-full py-3 px-8">
            <ul class="flex justify-between items-center gap-10">
                <li>
                    <a href="/" class="bg-dark block px-4 py-2.5 rounded-3xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <g clip-path="url(#clip0_1_1535)">
                                <path d="M1.6665 10.1699C1.6665 8.26287 1.6665 7.30936 2.09917 6.51891C2.53184 5.72847 3.32229 5.23789 4.9032 4.25673L6.56986 3.22235C8.24099 2.1852 9.07656 1.66663 9.99984 1.66663C10.9231 1.66663 11.7587 2.1852 13.4298 3.22235L15.0965 4.25673C16.6774 5.23789 17.4678 5.72847 17.9005 6.51891C18.3332 7.30936 18.3332 8.26287 18.3332 10.1699V11.4374C18.3332 14.6882 18.3332 16.3135 17.3569 17.3234C16.3805 18.3333 14.8092 18.3333 11.6665 18.3333H8.33317C5.19047 18.3333 3.61913 18.3333 2.64281 17.3234C1.6665 16.3135 1.6665 14.6882 1.6665 11.4374V10.1699Z" stroke="white" stroke-width="1.5"/>
                                <path d="M10 12.5L10 15" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1_1535">
                                <rect width="20" height="20" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <x-menu-item>About</x-menu-item>
                <x-menu-item>Projects</x-menu-item>
                <x-menu-item>Contact me</x-menu-item>
                @auth
                    <form id="logout-form" method="POST" action="/logout">
                        @csrf
                        <button class="text-white">Log Out</button>
                    </form>
                @else
                    <x-menu-item href="/login/">Login</x-menu-item>
                    <x-menu-item href="/register/">Register</x-menu-item>
                @endauth
            </ul>
        </div>
        <div class="flex gap-1">
            <x-button>Hire Me</x-button>
            @auth
                <x-button link="/admin/dashboard/" class="admin-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <rect width="20" height="20" stroke="url(#paint0_linear_1_1548)"/>
                        <circle cx="9.99984" cy="4.99996" r="3.33333" stroke="black" stroke-width="1.5"/>
                        <ellipse cx="9.99984" cy="14.1667" rx="5.83333" ry="3.33333" stroke="black" stroke-width="1.5"/>
                    </svg>
                </x-button>
            @endauth
        </div>
    </div>
</div>