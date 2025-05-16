// script.js

document.addEventListener('DOMContentLoaded', () => {
    // نمونه: نمایش هشدار ساده برای دکمه ارسال فرم تماس
    const contactForm = document.querySelector('form');
    if(contactForm){
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault(); // جلوگیری از ارسال واقعی (برای تست)
            alert('پیام شما با موفقیت ارسال شد! به زودی پاسخ داده می‌شود.');
            contactForm.reset();
        });
    }

    // اینجا می‌توان انیمیشن‌ها یا قابلیت‌های دیگه اضافه کرد
});
