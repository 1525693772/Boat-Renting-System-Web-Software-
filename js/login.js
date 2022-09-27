var btn = document.querySelectorAll('.control a')
var formContainer = document.querySelector('.div-form')
var form = document.querySelectorAll('.div-form form')

// 切换注册页面
btn[0].addEventListener('click', function (e) {
    // 切换显示的表单
    form[0].classList.add('disappear')
    form[1].classList.remove('disappear')
    formContainer.style.transform = 'rotateY(180deg)'
})

// 切换登录页面
btn[1].addEventListener('click', function (e) {
    // 切换显示的表单
    form[1].classList.add('disappear')
    form[0].classList.remove('disappear')
    formContainer.style.transform = 'none'
})