    
    const body = document.getElementById("body")
    
    const closeMenu = document.getElementById("menu-close")
    const openMenu = document.getElementById("menu-open")
    const menu = document.getElementById("menu")
    const freeMenu = document.getElementById("free_menu")

    const authContainer = document.getElementById("auth-form-container")
    const closeAuthLog = document.getElementById("close-auth-log")
    const closeAuthReg = document.getElementById("close-auth-reg")

    const openLogin = document.getElementById("openLogin")
    const openRegister = document.getElementById("openRegister")

    const loginForm = document.getElementById("login-form")
    const registerForm = document.getElementById("register-form")

    const changeToLog = document.getElementById("change-to-log")
    const changeToReg = document.getElementById("change-to-reg")
    
    const backToTop = document.getElementById("back-to-top")

    window.onscroll = function() {
        funcToTop()
    }


    function funcToTop() {
        if (window.scrollY > 500) {
            backToTop.classList.add("backToTopAnim")
        }
        else {
            backToTop.classList.remove("backToTopAnim")
        }
    }

    backToTop.addEventListener("click", () => {
        document.documentElement.scrollTop= 0
    })

    openMenu.addEventListener("click", () => {
        menu.classList.add("opened")
        freeMenu.classList.add("opened_free")
    })
    closeMenu.addEventListener("click", () => {
        menu.classList.remove("opened")
        freeMenu.classList.remove("opened_free")
        
    })
    
    freeMenu.addEventListener("click", () => {
        menu.classList.remove("opened")
        freeMenu.classList.remove("opened_free")
        
    })


    openLogin.addEventListener("click", () => {
        loginForm.classList.add("opened-auth")
        authContainer.classList.add("opened-container")
        body.style.overflow = "hidden";
    })

    openRegister.addEventListener("click", () => {
        registerForm.classList.add("opened-auth")
        authContainer.classList.add("opened-container")
        body.style.overflow = "hidden";
    })

    closeAuthLog.addEventListener("click", () => {
        loginForm.classList.remove("opened-auth")
        authContainer.classList.remove("opened-container")
        body.style.overflow = "scroll";
    })

    closeAuthReg.addEventListener("click", () => {
        registerForm.classList.remove("opened-auth")
        authContainer.classList.remove("opened-container")
        body.style.overflow = "scroll";
    })

    changeToLog.addEventListener("click", () => {
        registerForm.classList.remove("opened-auth")
        loginForm.classList.add("opened-auth")
    })

    changeToReg.addEventListener("click", () => {
        registerForm.classList.add("opened-auth")
        loginForm.classList.remove("opened-auth")
    })


