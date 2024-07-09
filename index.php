<!DOCTYPE html>
<html lang="en">

<?php include "includes/head.php" ?>

<body>
    <?php include "includes/navbar.php" ?>

    <header class="bg-center bg-no-repeat bg-cover" style="height: calc(100vh - 64px); background-image: url('/images/home-hero-bg.jpg')">
        <div class="h-full w-full bg-gradient-to-t flex flex-col justify-center align-center bg-[#101116]/50">
            <div class="mx-auto w-full px-[15px] min-[576px]:max-w-[540px] min-[768px]:max-w-[720px] min-[992px]:max-w-[960px] min-[1200px]:max-w-[1140px] min-[1400px]:max-w-[1320px]">
                <h1 class="text-white text-2xl lg:text-7xl text-center font-bold">MTI Tanzania Hub</h1>
                <p class="text-center text-white text-lg">Where great ideas come to life!</p>
                <p class="text-center text-white">Join a community of freelancers, remote workers &amp; entreprenuers</p>
                <d class="w-full flex items-center justify-center gap-6 mt-8"><button class="text-white px-6 py-2 rounded-full modal-button bg-[#101116]" type="button">Book Space</button><a class="text-white px-6 py-2 bg-primary rounded-full" href="/gallery.php">View our Gallery</a></d>
            </div>
        </div>
    </header>

    <div class="py-20">
        <div class="mx-auto w-full px-[15px] min-[576px]:max-w-[540px] min-[768px]:max-w-[720px] min-[992px]:max-w-[960px] min-[1200px]:max-w-[1140px] min-[1400px]:max-w-[1320px]">
            <div class="gap-4 grid lg:grid-cols-2 md:grid-cols-2 xl:grid-cols-3">
                <div class="flex-1 mb-8 lg:px-6 lg:mb-0">
                    <div class="mb-2"><i class="bi bi-people text-primary text-4xl"></i></div>
                    <h3 class="text-lg">High quality &amp; co-sharing space</h3>
                    <p class="text-slate-500">Experience top-tier co-sharing spaces designed for quality and collaboration.</p>
                </div>
                <div class="flex-1 mb-8 lg:px-6 lg:mb-0">
                    <div class="mb-2"><i class="bi bi-printer text-primary text-4xl"></i></div>
                    <h3 class="text-lg">Access to printing &amp; scanning</h3>
                    <p class="text-slate-500">Enjoy easy access to printing and scanning facilities at your convenience.</p>
                </div>
                <div class="flex-1 mb-8 lg:px-6 lg:mb-0">
                    <div class="mb-2"><i class="bi bi-cup-hot text-primary text-4xl"></i></div>
                    <h3 class="text-lg">Pantry (coffee) &amp; water station</h3>
                    <p class="text-slate-500">Fuel up with coffee and refresh at our water station.</p>
                </div>
                <div class="flex-1 mb-8 lg:px-6 lg:mb-0">
                    <div class="mb-2"><i class="bi bi-router text-primary text-4xl"></i></div>
                    <h3 class="text-lg">High speed WiFi</h3>
                    <p class="text-slate-500">Stay connected with blazing-fast, high-speed WiFi for uninterrupted surfing and streaming.</p>
                </div>
                <div class="flex-1 mb-8 lg:px-6 lg:mb-0">
                    <div class="mb-2"><i class="bi bi-person text-primary text-4xl"></i></div>
                    <h3 class="text-lg">Flexible &amp; dedicated desk</h3>
                    <p class="text-slate-500">Choose from flexible or dedicated desk options tailored to your needs.</p>
                </div>
                <div class="flex-1 mb-8 lg:px-6 lg:mb-0">
                    <div class="mb-2"><i class="bi bi-phone text-primary text-4xl"></i></div>
                    <h3 class="text-lg">Breakout, kitchen, lounge &amp; think stations</h3>
                    <p class="text-slate-500">Relax in breakout areas, enjoy kitchen amenities, lounge spaces, and innovative think stations.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-20">
        <div class="mx-auto w-full px-[15px] min-[576px]:max-w-[540px] min-[768px]:max-w-[720px] min-[992px]:max-w-[960px] min-[1200px]:max-w-[1140px] min-[1400px]:max-w-[1320px]">
            <h1 class="text-4xl font-bold mb-10">Tailored Packages for Every Professional</h1>
            <div class="gap-4 grid-cols-1 grid lg:flex md:grid-cols-2 lg:grid-cols-4">
                <div class="mb-4 flex-1">
                    <div class="p-8 rounded bg-white border flex flex-col package min-h-[687px]">
                        <h5 class="text-center text-xl font-medium mb-4">Flexible Desk</h5>
                        <p class="text-center italic text-slate-500">Flexible workspace with access to any available desk in our common area.</p>
                        <div class="text-center mt-10"><span class="text-3xl">$</span><span class="text-3xl font-bold">150</span><span>/month</span></div>
                        <div class="w-full bg-slate-200 my-10 h-[1px]"></div>
                        <ul class="mb-8">
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Single desk space</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>High speed WiFi</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Printing &amp; scanning</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Pantry, coffee and snack</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Access to boardroom</span></li>
                        </ul>
                        <div class="mt-auto">
                            <div class="text-center"><span class="text-3xl">$</span><span class="text-3xl font-bold">9</span><span>/day</span></div><button class="bg-slate-900 text-white rounded-full py-2 px-6 modal-btn w-full mt-8" type="button">Book Space</button>
                        </div>
                        <div class="fixed flex inset-0 items-center justify-center bg-gray-800 bg-opacity-50 z-50 hidden modal">
                            <div class="bg-white rounded shadow-lg p-6 w-1/3">
                                <form action="/mail.php" method="post"> <div class="flex justify-between items-center pb-4 border-b">
                                <input type="hidden" name="package" value="Flexible Desk" />
                                        <h3 class="text-xl font-semibold">Book Flexible Desk</h3><button class="close-modal text-gray-500 text-lg hover:text-gray-700" type="button"><i class="bi bi-x-lg"></i></button>
                                    </div>
                                    <div class="pt-4">
                                        <div class="mb-4"><label class="mb-2 inline-block" for="name">Name</label><input class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" id="name" name="name" placeholder="Your full name" required="required" type="text"></div>
                                        <div class="mb-4"><label class="mb-2 inline-block" for="mobile">Mobile</label><input class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" id="mobile" name="mobile" placeholder="Your mobile number" required="required" type="text"></div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="mb-2 inline-block" for="from">From</label>
                                        <input type="datetime-local" name="from" id="from" class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900">
                                    </div>
                                    <div class="mb-4">
                                        <label class="mb-2 inline-block" for="to">To</label>
                                        <input type="datetime-local" name="to" id="to" class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900">
                                    </div>
                                    <div class="flex justify-end pt-4 border-t gap-6 items-center"><button class="cancel-btn " type="button">Cancel</button><button class="bg-slate-900 text-white rounded py-2 px-6" type="submit">Book Space</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 flex-1">
                    <div class="p-8 rounded bg-white border flex flex-col package min-h-[687px]">
                        <h5 class="text-center text-xl font-medium mb-4">Dedicated Desk</h5>
                        <p class="text-center italic text-slate-500">Your personal reserved desk with storage and all essential amenities.</p>
                        <div class="text-center mt-10"><span class="text-3xl">$</span><span class="text-3xl font-bold">200</span><span>/month</span></div>
                        <div class="w-full bg-slate-200 my-10 h-[1px]"></div>
                        <ul class="mb-8">
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Reserved desk space</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>High speed WiFi</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Printing &amp; scanning</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Pantry, coffee and snack</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Secure storage locker</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Access to boardroom</span></li>
                        </ul>
                        <div class="mt-auto">
                            <div class="text-center"><span class="text-3xl">$</span><span class="text-3xl font-bold">11</span><span>/day</span></div><button class="bg-slate-900 text-white rounded-full py-2 px-6 modal-btn w-full mt-8" type="button">Book Space</button>
                        </div>
                        <div class="fixed flex inset-0 items-center justify-center bg-gray-800 bg-opacity-50 z-50 hidden modal">
                            <div class="bg-white rounded shadow-lg p-6 w-1/3">
                                <form action="/mail.php" method="post"> <div class="flex justify-between items-center pb-4 border-b">
                                <input type="hidden" name="package" value="Dedicated Desk" />
                                        <h3 class="text-xl font-semibold">Book Dedicated Desk</h3><button class="close-modal text-gray-500 text-lg hover:text-gray-700" type="button"><i class="bi bi-x-lg"></i></button>
                                    </div>
                                    <div class="pt-4">
                                        <div class="mb-4"><label class="mb-2 inline-block" for="name">Name</label><input class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" id="name" name="name" placeholder="Your full name" required="required" type="text"></div>
                                        <div class="mb-4"><label class="mb-2 inline-block" for="mobile">Mobile</label><input class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" id="mobile" name="mobile" placeholder="Your mobile number" required="required" type="text"></div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="mb-2 inline-block" for="from">From</label>
                                        <input type="datetime-local" name="from" id="from" class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900">
                                    </div>
                                    <div class="mb-4">
                                        <label class="mb-2 inline-block" for="to">To</label>
                                        <input type="datetime-local" name="to" id="to" class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900">
                                    </div>
                                    <div class="flex justify-end pt-4 border-t gap-6 items-center"><button class="cancel-btn " type="button">Cancel</button><button class="bg-slate-900 text-white rounded py-2 px-6" type="submit">Book Space</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 flex-1">
                    <div class="p-8 rounded bg-white border flex flex-col package min-h-[687px]">
                        <h5 class="text-center text-xl font-medium mb-4">Boardroom</h5>
                        <p class="text-center italic text-slate-500">Executive boardroom perfect for productive meetings and presentations.</p>
                        <div class="text-center mt-10"><span class="text-3xl">$</span><span class="text-3xl font-bold">25</span><span>/hour</span></div>
                        <div class="w-full bg-slate-200 my-10 h-[1px]"></div>
                        <ul class="mb-8">
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>High speed WiFi</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Printing &amp; scanning</span></li>
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Pantry, coffee and snack</span></li>
                        </ul>
                        <div class="mt-auto"><button class="bg-slate-900 text-white rounded-full py-2 px-6 modal-btn w-full mt-8" type="button">Book Space</button></div>
                        <div class="fixed flex inset-0 items-center justify-center bg-gray-800 bg-opacity-50 z-50 hidden modal">
                            <div class="bg-white rounded shadow-lg p-6 w-1/3">
                                <form action="/mail.php" method="post"> <div class="flex justify-between items-center pb-4 border-b">
                                <input type="hidden" name="package" value="Board Room" />
                                        <h3 class="text-xl font-semibold">Book Boardroom</h3><button class="close-modal text-gray-500 text-lg hover:text-gray-700" type="button"><i class="bi bi-x-lg"></i></button>
                                    </div>
                                    <div class="pt-4">
                                        <div class="mb-4"><label class="mb-2 inline-block" for="name">Name</label><input class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" id="name" name="name" placeholder="Your full name" required="required" type="text"></div>
                                        <div class="mb-4"><label class="mb-2 inline-block" for="mobile">Mobile</label><input class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" id="mobile" name="mobile" placeholder="Your mobile number" required="required" type="text"></div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="mb-2 inline-block" for="from">From</label>
                                        <input type="datetime-local" name="from" id="from" class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900">
                                    </div>
                                    <div class="mb-4">
                                        <label class="mb-2 inline-block" for="to">To</label>
                                        <input type="datetime-local" name="to" id="to" class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900">
                                    </div>
                                    <div class="flex justify-end pt-4 border-t gap-6 items-center"><button class="cancel-btn " type="button">Cancel</button><button class="bg-slate-900 text-white rounded py-2 px-6" type="submit">Book Space</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 flex-1">
                    <div class="p-8 rounded bg-white border flex flex-col package min-h-[687px]">
                        <h5 class="text-center text-xl font-medium mb-4">Customized Package</h5>
                        <p class="text-center italic text-slate-500">Enjoy personalized solutions, customized just for you on demand.</p>
                        <div class="text-center mt-10"><span class="text-3xl">$</span><span class="text-3xl font-bold">XX</span><span>/month</span></div>
                        <div class="w-full bg-slate-200 my-10 h-[1px]"></div>
                        <ul class="mb-8">
                            <li class="mb-2"><i class="bi bi-check-square-fill mr-4 text-primary"></i><span>Everything customized on demand</span></li>
                        </ul>
                        <div class="mt-auto">
                            <div class="text-center"><span class="text-3xl">$</span><span class="text-3xl font-bold">XX</span><span>/day</span></div><button class="bg-slate-900 text-white rounded-full py-2 px-6 modal-btn w-full mt-8" type="button">Book Space</button>
                        </div>
                        <div class="fixed flex inset-0 items-center justify-center bg-gray-800 bg-opacity-50 z-50 hidden modal">
                            <div class="bg-white rounded shadow-lg p-6 w-1/3">
                                <form action="/mail.php" method="post"> <div class="flex justify-between items-center pb-4 border-b">
                                        <input type="hidden" name="package" value="Customized" />
                                        <h3 class="text-xl font-semibold">Book Customized Package</h3><button class="close-modal text-gray-500 text-lg hover:text-gray-700" type="button"><i class="bi bi-x-lg"></i></button>
                                    </div>
                                    <div class="pt-4">
                                        <div class="mb-4"><label class="mb-2 inline-block" for="name">Name</label><input class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" id="name" name="name" placeholder="Your full name" required="required" type="text"></div>
                                        <div class="mb-4"><label class="mb-2 inline-block" for="mobile">Mobile</label><input class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" id="mobile" name="mobile" placeholder="Your mobile number" required="required" type="text"></div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="mb-2 inline-block" for="from">From</label>
                                        <input type="datetime-local" name="from" id="from" class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900">
                                    </div>
                                    <div class="mb-4">
                                        <label class="mb-2 inline-block" for="to">To</label>
                                        <input type="datetime-local" name="to" id="to" class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900">
                                    </div>
                                    <div class="flex justify-end pt-4 border-t gap-6 items-center"><button class="cancel-btn " type="button">Cancel</button><button class="bg-slate-900 text-white rounded py-2 px-6" type="submit">Book Space</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[#101116]">
        <div class="mx-auto w-full px-[15px] min-[576px]:max-w-[540px] min-[768px]:max-w-[720px] min-[992px]:max-w-[960px] min-[1200px]:max-w-[1140px] min-[1400px]:max-w-[1320px]">
            <h1 class="text-4xl font-bold text-white mb-10">What our community is saying</h1>
            <div class="gap-4 lg:flex">
                <div class="flex-1 mb-4">
                    <div class="p-10 rounded shadow bg-[#1f1f27]">
                        <div class="mb-4"><i class="bi bi-quote text-white text-5xl"></i></div>
                        <p class="text-white">Exceptional co-working space with modern amenities and a productive atmosphere. Highly recommended!</p>
                        <div class="flex items-center mt-2 gap-2"><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i></div>
                        <div class="mt-6 flex items-center">
                            <img class="rounded-full h-16 w-16 mr-4" src="images/testimonials/norman.jpeg" alt="Norman Karamaga">
                            <div>
                                <h5 class="text-white">Norman Karamaga</h5><span class="text-sm text-white">Chaja Africa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="flex-1 mb-4">
                    <div class="p-10 rounded shadow bg-[#1f1f27]">
                        <div class="mb-4"><i class="bi bi-quote text-white text-5xl"></i></div>
                        <p class="text-white">Fantastic co-working space! Modern design, reliable Wi-Fi, and a vibrant, inspiring community.</p>
                        <div class="flex items-center mt-2 gap-2"><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i></div>
                        <div class="mt-6 flex items-center">
                        <img class="rounded-full h-16 w-16 mr-4" src="{{ asset('images/testimonials/tony.jpg') }}" alt="Norman Karamaga">
                            <div>
                                <h5 class="text-white">Tony Mlella</h5><span class="text-sm text-white">Manager</span>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="flex-1">
                    <div class="p-10 rounded shadow bg-[#1f1f27]">
                        <div class="mb-4"><i class="bi bi-quote text-white text-5xl"></i></div>
                        <p class="text-white">Its an amazing hub with convenient parking, friendly staff, and a perfect location for productivity.</p>
                        <div class="flex items-center mt-2 gap-2"><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i><i class="bi bi-star-fill text-primary"></i></div>
                        <div class="mt-6 flex items-center">
                            <img class="rounded-full h-16 w-16 mr-4" src="images/testimonials/tony.jpg" alt="Norman Karamaga">
                            <div>
                                <h5 class="text-white">Tony Mlella</h5><span class="text-sm text-white">Chaja Africa</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/partners.php" ?>

    <?php include "includes/footer.php" ?>
</body>

</html>
