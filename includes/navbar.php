<nav class="h-16 flex items-center">
    <div class="mx-auto w-full px-[15px] min-[576px]:max-w-[540px] min-[768px]:max-w-[720px] min-[992px]:max-w-[960px] min-[1200px]:max-w-[1140px] min-[1400px]:max-w-[1320px]">
        <div class="flex items-center justify-between"><a href="/"><img class="w-auto max-h-12 h-full" alt="Logo" src="images/logo.png"></a>
            <button type="button" class="md:hidden cursor-pointer" id="sidebar-toggle">
                <i class="bi bi-list text-2xl"></i>
            </button>
            <ul class="hidden md:flex items-center">
                <li class="mr-8"><a href="/">Home</a></li>
                <li class="mr-8"><a href="/about">About Us</a></li>
                <li class="mr-8"><a href="/gallery">Gallery</a></li>
                <li><a href="/contact">Get in Touch</a></li>
            </ul><button class="text-white px-6 py-2 rounded-full modal-button bg-[#101116] hidden md:inline-block" type="button"><span>Book Space</span></button>
        </div>
    </div>
</nav>

<nav id="sidebar" class="p-[15px] bg-white absolute h-screen w-60 -right-60 transition-all">
    <ul>
        <li class="mb-1"><a href="/">Home</a></li>
        <li class="mb-1"><a href="/about">About Us</a></li>
        <li class="mb-1"><a href="/gallery">Gallery</a></li>
        <li><a href="/contact">Get in Touch</a></li>
    </ul>
</nav>
