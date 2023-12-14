/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/mail/*.blade.php",
    ],
    corePlugins: {
        preflight: false,
        backgroundOpacity: false,
        borderOpacity: false,
        boxShadow: false,
        divideOpacity: false,
        placeholderOpacity: false,
        textOpacity: false,
    },
    experimental: {
        optimizeUniversalDefaults: true
    }
}
