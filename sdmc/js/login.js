function userclr() {
    document.getElementById("username").style.border = "2.5px solid blue";
}

function pwdclr() {
    document.getElementById("password").style.border = "2.5px solid blue";


}

function original() {
    //     document.getElementById("password").style.borderColor = "gray";
    //     document.getElementById("username").style.borderColor = "gray";
    document.getElementById("password").style.border = "thin solid gray";
    document.getElementById("username").style.border = "thin solid gray";
}

function loginBtnClr() {
    document.getElementById("button1").style.backgroundColor = "#3f5e8c";
}

function resetBtnClr() {
    document.getElementById("button2").style.backgroundColor = "#3f5e8c";
}

function resetOriginal() {
    document.getElementById("button2").style.backgroundColor = "rgba(0, 102, 255, 0.89)";
}

function loginOriginal() {
    document.getElementById("button1").style.backgroundColor = "rgba(0, 102, 255, 0.89)";
}