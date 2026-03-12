<!-- ================= CAREER APPLY POPUP ================= -->
<div id="careerPopup" class="fixed inset-0 bg-black/60 hidden z-[999] flex items-center justify-center px-4">

    <div class="bg-white rounded-2xl max-w-lg w-full p-8 relative shadow-2xl animate-fadeIn">

        <!-- Close -->
        <button onclick="closeCareerForm()"
            class="absolute top-4 right-4 text-gray-400 hover:text-black text-xl">&times;</button>

        <h3 class="text-2xl font-bold mb-4 text-center text-gray-900"
            style="font-family:'Montserrat Alternates', sans-serif;">
            Apply For Career
        </h3>

        <!-- SUCCESS / ERROR MESSAGE -->
        <div id="careerMessage"
             class="hidden mb-4 px-4 py-3 rounded-lg text-sm font-semibold"></div>

        <form id="careerForm" enctype="multipart/form-data">

            @csrf

            <!-- Name -->
            <input type="text" name="name" placeholder="Full Name"
                class="form-input" required>

            <!-- Email -->
            <input type="email" name="email" placeholder="Email Address"
                class="form-input" required>

            <!-- Phone -->
            <input type="text" name="phone" placeholder="Phone Number"
                class="form-input" required>

            <!-- Profile -->
            <select name="profile" id="careerProfile" class="form-input" required>
                <option value="">Select Profile</option>
                <option>Social Media Marketing</option>
                <option>Web Developer</option>
                <option>Graphic Designer</option>
                <option>HR & Marketing</option>
            </select>

            <!-- Resume Upload -->
            <label class="block text-sm font-semibold mt-2">Upload Resume (PDF/Word)</label>
            <input type="file" name="resume" id="resumeInput" accept=".pdf,.doc,.docx"
                class="form-input bg-gray-50" required onchange="previewResume(this)">

            <!-- Resume Preview -->
            <div id="resumePreview" class="hidden mt-2 text-sm text-blue-600 font-semibold">
                📄 <span id="resumeName"></span>
                <a id="resumeViewBtn" href="#" target="_blank" class="ml-3 underline hidden">View</a>
            </div>

            <!-- Submit -->
            <button type="submit" id="careerSubmitBtn"
                class="w-full mt-6 bg-blue-600 text-white py-3 rounded-lg font-semibold
                hover:bg-blue-700 transition flex items-center justify-center gap-2">

                <span id="careerBtnText">Submit Application</span>

                <!-- Loader -->
                <span id="careerBtnLoader"
                      class="hidden w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
            </button>
        </form>
    </div>
</div>

<!-- ================= STYLES ================= -->
<style>
.form-input {
    width: 100%;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    padding: 12px 14px;
    margin-bottom: 14px;
    font-size: 14.5px;
}
.form-input:focus {
    outline: none;
    border-color: #2563EB;
}
.animate-fadeIn {
    animation: fadeIn .4s ease;
}
@keyframes fadeIn {
    from {opacity:0; transform:scale(.9);}
    to {opacity:1; transform:scale(1);}
}
</style>

<!-- ================= SCRIPT ================= -->
<script>
function openApplyPopup(profile){
    document.getElementById("careerPopup").classList.remove("hidden");
    document.getElementById("careerProfile").value = profile;
}

function closeCareerForm(){
    document.getElementById("careerPopup").classList.add("hidden");
}

/* Resume Preview */
function previewResume(input){
    const file = input.files[0];
    if(file){
        document.getElementById("resumePreview").classList.remove("hidden");
        document.getElementById("resumeName").innerText = file.name;

        const viewBtn = document.getElementById("resumeViewBtn");
        const fileURL = URL.createObjectURL(file);
        viewBtn.href = fileURL;
        viewBtn.classList.remove("hidden");
    }
}

/* AJAX SUBMIT WITH LOADER */
document.getElementById("careerForm").addEventListener("submit", function(e){
    e.preventDefault();

    let form = this;
    let formData = new FormData(form);

    let btn = document.getElementById("careerSubmitBtn");
    let btnText = document.getElementById("careerBtnText");
    let btnLoader = document.getElementById("careerBtnLoader");
    let msgBox = document.getElementById("careerMessage");

    // UI Loading
    btn.disabled = true;
    btnText.innerText = "Submitting...";
    btnLoader.classList.remove("hidden");

    fetch("{{ route('career.apply') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        body: formData
    })
    .then(res => res.json())
    .then(data => {

        btn.disabled = false;
        btnText.innerText = "Submit Application";
        btnLoader.classList.add("hidden");
        msgBox.classList.remove("hidden");

        if(data.status){
            msgBox.className = "mb-4 px-4 py-3 rounded-lg text-sm font-semibold bg-green-100 text-green-700";
            msgBox.innerText = data.message;

            form.reset();
            document.getElementById("resumePreview").classList.add("hidden");

            setTimeout(() => {
                closeCareerForm();
                msgBox.classList.add("hidden");
            }, 2000);

        } else {
            msgBox.className = "mb-4 px-4 py-3 rounded-lg text-sm font-semibold bg-red-100 text-red-700";
            msgBox.innerText = "Something went wrong. Try again!";
        }
    })
    .catch(() => {
        btn.disabled = false;
        btnText.innerText = "Submit Application";
        btnLoader.classList.add("hidden");

        msgBox.classList.remove("hidden");
        msgBox.className = "mb-4 px-4 py-3 rounded-lg text-sm font-semibold bg-red-100 text-red-700";
        msgBox.innerText = "Upload failed. Please try again later.";
    });
});
</script>
