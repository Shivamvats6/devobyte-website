<!-- ================= CONTACT POPUP ================= -->
<div id="contactPopup"
     class="fixed inset-0 bg-black/60 z-[999]
            hidden items-center justify-center px-4">

    <!-- Popup Box -->
    <div id="popupBox"
         class="bg-white w-full max-w-4xl rounded-2xl relative
                transform scale-95 opacity-0
                transition-all duration-300
                overflow-hidden">

        <!-- Close Button -->
        <button onclick="closeContactPopup()"
                class="absolute top-4 right-4 z-50
                       text-gray-400 hover:text-black text-xl">
            ✕
        </button>

        <!-- GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- ================= LEFT IMAGE ================= -->
            <div class="relative flex items-center justify-center"
                 style="
                    background: #000428;
                    background: -webkit-linear-gradient(to right, #004e92, #000428);
                    background: linear-gradient(to right, #004e92, #000428);
                 ">

                <img src="/assets/images/Untitled-1.png"
                     alt="Contact">
            </div>

            <!-- ================= RIGHT FORM ================= -->
            <div class="p-8">

                <h3 class="text-3xl font-extrabold mb-2"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Get in <span class="text-blue-500">Touch</span>
                </h3>

                <p class="text-sm text-gray-500 mb-6 font-inter">
                    Contact us for a quote, help or to join the team
                </p>

                <!-- FORM -->
                <form method="POST" action="{{ route('contact.submit') }}"
                      class="space-y-5 font-inter">
                    @csrf

                    <input type="text" name="name" placeholder="Full Name" required
                           class="w-full border-b py-2 focus:outline-none">

                    <input type="email" name="email" placeholder="Email" required
                           class="w-full border-b py-2 focus:outline-none">

                    <input type="text" name="phone" placeholder="Phone"
                           class="w-full border-b py-2 focus:outline-none">

                    <select name="service"
                            class="w-full border-b py-2 focus:outline-none">
                        <option value="">Select Service</option>
                        <option>Website Development</option>
                        <option>Digital Marketing</option>
                        <option>SEO Optimization</option>
                        <option>Social Media Marketing</option>
                        <option>Others</option>
                    </select>

                    <textarea name="message" rows="3"
                              placeholder="Your message"
                              class="w-full border rounded-lg p-3"></textarea>

                    <button type="submit"
                            class="w-full bg-blue-600 text-white py-3 rounded-xl
                                   font-semibold hover:bg-blue-700 transition">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function openContactPopup() {
    const popup = document.getElementById('contactPopup');
    const box = document.getElementById('popupBox');

    popup.classList.remove('hidden');
    popup.classList.add('flex');

    setTimeout(() => {
        box.classList.remove('scale-95','opacity-0');
        box.classList.add('scale-100','opacity-100');
    }, 20);
}

function closeContactPopup() {
    const popup = document.getElementById('contactPopup');
    const box = document.getElementById('popupBox');

    box.classList.add('scale-95','opacity-0');

    setTimeout(() => {
        popup.classList.add('hidden');
        popup.classList.remove('flex');
    }, 300);

    // Mark popup as shown in this session
    sessionStorage.setItem('contactPopupShown', 'yes');
}
</script>

<script>
window.addEventListener('load', () => {

    // Check if popup already shown in this session
    const popupAlreadyShown = sessionStorage.getItem('contactPopupShown');

    if (!popupAlreadyShown) {
        setTimeout(() => {
            openContactPopup();
            sessionStorage.setItem('contactPopupShown', 'yes');
        }, 5000); // 5 seconds delay
    }

});
</script>

{{-- SUCCESS TOAST (UNCHANGED) --}}
@if(session('popup_success'))
<div id="successToast"
     class="fixed top-6 right-6 z-[9999]
            bg-green-500 text-white
            px-6 py-4 rounded-xl shadow-xl
            flex items-center gap-3">

    <span class="text-xl">✔</span>
    <span class="text-sm font-semibold">
        {{ session('success_message') }}
    </span>
</div>

<script>
setTimeout(() => {
    document.getElementById('successToast')?.remove();
}, 4000);
</script>
@endif
