export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./storage/framework/views/*.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],

    safelist: [
        'opacity-0',
        'opacity-100',
        'scale-75',
        'scale-90',
        'scale-95',
        'scale-100',
        'scale-105',
        'translate-x-0',
        'translate-y-0',
        'flex',
        'grid',
        'items-center',
        'justify-center',
    ],

    theme: {
        extend: {},
    },

    plugins: [],
};
