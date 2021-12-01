let u = document.getElementById("username1")
let p1 = document.getElementById("password1")
let m = document.getElementById("message")
function checkPasswords()
{
    if(p1.value.length < 8 || p2.value.length < 8){
        document.write("Password must be at least 8 characters long")
    } else if(p1.value != p2.value){
        document.write("Passwords must match")
    } else {
        document.write("Passwords match!")
    }
}