@if (session('success'))
<div id="success-message" class="bg-green-100 border-l-4 border-green-500 text-green-600 p-4 mb-4" role="alert">
    {{ session('success') }}
</div>
@endif


<script>

    document.addEventListener("DOMContentLoaded", function() {

        var successMessage = document.getElementById("success-message");

        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = "none";
            }, 2000);
        }
    });
</script>
