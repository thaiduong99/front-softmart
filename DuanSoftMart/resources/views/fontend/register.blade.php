@extends('fontend.base')
@section('content')
<div class="container mt-5 mb-5">
    <div class="box">
        <h1>Login</h1>
        <form action="">
            <div class="input-box">
                <input type="text" name="" required />
                <label for="">Username</label>
            </div>
            <div class="input-box">
                <input type="password" name="" required />
                <label for="">Password</label>
            </div>
            <div class="input-box">
                <input type="number" name="" required />
                <label for="">Phone</label>
            </div>
            <div class="input-box">
                <input type="text" name="" required />
                <label for="">Address</label>
            </div>
            <input type="submit" value="Submit" />
        </form>
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