var ckall = document.querySelector('#ckall')
var ckbox = document.querySelectorAll('tbody input')
var but1 = document.querySelector('.but1')
ckall.onclick = function () {
    for (var i = 0; i < ckbox.length; i++) {
        ckbox[i].checked = this.checked
    }
}
but1.onclick = function () {
    for (var i = 0; i < ckbox.length; i++) {
        if (ckbox[i].checked == true) {
            ckbox[i].checked = false
        }
        else {
            ckbox[i].checked = true
        }
    }
}