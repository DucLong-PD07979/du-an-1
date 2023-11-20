<div class="login-section">
    <div class="min-h-[200px] w-full flex items-center justify-center flex-col mb-7" style="background:linear-gradient(0deg, rgba(0,0,0,0.8), rgba(0,0,0,0.3)), url(../assets/images/breadcrumb.jpg) no-repeat center;">
        <h3 class="text-[36px] text-white font-sans font-bold mb-3">Đăng nhập tài khoản</h3>
        <div class="flex items-center justify-center text-white">
            <a href="#" class="hover:text-primary text-sm">Trang chủ</a>
            <span class="block px-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
            <p class="text-primary text-sm">Đăng nhập tài khoản</p>
        </div>
    </div>
    <div class="flex items-center justify-center">
        <div class="max-w-[400px] w-full mb-7">
            <form class="">
                <div class="flex items-center">
                    <a class="w-full text-center uppercase border-b border-gray-600 block py-1" href="?page=login">Đăng nhập</a>
                    <a class="w-full text-center uppercase border-b border-gray-200 block py-1" href="?page=register">Đăng ký</a>
                </div>
                <h3 class="text-center my-4 text-2xl">Đăng nhập</h3>
                <div class="group-input mb-4">
                    <input type="email" class="p-2 w-full border border-gray-600 rounded" placeholder="email" require>
                    <p class="error-mes mt-2 text-red"></p>
                </div>
                <div class="group-input mb-4">
                    <input type="password" class="p-2 w-full border border-gray-600 rounded" placeholder="password" require>
                    <p class="error-mes mt-2 text-red"></p>
                </div>
                <button type="submit" class="w-full text-white rounded py-3 bg-gray-900 hover:bg-gray-700 transition-colors">Đăng Nhập</button>
            </form>
            <a class="my-2 text-center block hover:text-primary" href="#">Quên mật khẩu</a>
            <p class="my-4 text-center">Hoặc đăng nhập bằng</p>
            <div class="flex items-center justify-center gap-2">
                <div class="rounded py-1 px-6 text-white bg-blue-600 cursor-pointer min-w-[160px] text-center">Facebook</div>
                <div class="rounded py-1 px-6 text-white  bg-red cursor-pointer min-w-[160px] text-center">Google</div>
            </div>
        </div>
    </div>
</div>