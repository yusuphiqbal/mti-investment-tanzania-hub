<div class="fixed flex inset-0 items-center justify-center bg-gray-800 bg-opacity-50 z-50 hidden booking-modal">
    <div class="bg-white rounded shadow-lg p-6 w-1/3">
        <form action="mail.php" method="post">
            <div class="flex justify-between items-center pb-4 border-b">
                <h3 class="text-xl font-semibold">Book Space</h3><button class="close-modal text-gray-500 text-lg hover:text-gray-700" type="button"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="pt-4">
                <div class="mb-4"><label class="mb-2 inline-block" for="name">Name</label><input class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" id="name" name="name" placeholder="Your full name" required="" type="text"></div>
                <div class="mb-4"><label class="mb-2 inline-block" for="mobile">Mobile</label><input class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" id="mobile" name="mobile" placeholder="Your mobile number" required="" type="text"></div>
                <div class="mb-4"><label class="mb-2 inline-block" for="package">Package</label><select class="block bg-slate-100 w-full rounded p-2" id="package" name="package" placeholder="Your mobile number" type="text">
                        <option value="Flexible Desk">Flexible Desk</option>
                        <option value="Dedicated Desk">Dedicated Desk</option>
                        <option value="Boardroom">Boardroom</option>
                        <option value="Customized Package">Customized Package</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="mb-2 inline-block" for="from">From</label>
                    <input type="datetime-local" name="from" id="from" class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" required>
                </div>
                <div class="mb-4">
                    <label class="mb-2 inline-block" for="to">To</label>
                    <input type="datetime-local" name="to" id="to" class="block bg-slate-100 w-full rounded p-2 outline-none border focus:border-slate-900" required>
                </div>
            </div>
            <div class="flex justify-end pt-4 border-t gap-6 items-center"><button class="cancel-btn" type="button">Cancel</button><button class="bg-slate-900 text-white rounded py-2 px-6" type="submit">Book Space</button></div>
        </form>
    </div>
</div>
