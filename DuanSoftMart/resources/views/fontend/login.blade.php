@extends('fontend.base')
@section('content')
<div class="container mt-5 mb-5">
    <h1>Thông Tin Đăng Nhập</h1>
    <div class="text-center box">
        <div class="card-1">
            <!-- the text-input class will be used as parent for input styling -->
            <div class="text-input">
                <input id="username" type="text" placeholder="Username" autocomplete="off" required />
                <label for="username">Username</label>
            </div>
            <div class="text-input">
                <input id="password" type="password" placeholder="Password" autocomplete="off" required />
                <label for="password">Password</label>
            </div>
            <div class="cart-button">
                <button type="button" class="btn btn-primary"><a href="#">Submit</a></button>
                <button type="button" class="btn btn-primary"><a href="#">Đăng Ký</a></button>
            </div>
        </div>


    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}
</script>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active-1");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}
</script>
@endsection