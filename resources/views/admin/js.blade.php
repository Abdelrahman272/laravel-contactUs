<script>
    // Automatically hide the flash message after 1 second (1000 milliseconds)
    setTimeout(function() {
        const flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 2000);

</script>


{{--     /
/ <!--フォームのアクションを設定するJavaScript-- >

    // function openDeleteModal(itemId, itemName) {
    //     var modal = document.getElementById("deleteModal");
    //     var form = document.getElementById("deleteForm");
    //     form.action = "{{ route('admin.users.destroy', '') }}/" + itemId;
    //     var itemNameElement = document.getElementById("itemName");
    //     itemNameElement.innerText = itemName + " を削除してもよろしいですか？";
    //     modal.style.display = "block";
    // }

    // function closeDeleteModal() {
    //     var modal = document.getElementById("deleteModal");
    //     modal.style.display = "none";
    // } --}}
