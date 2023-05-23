/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html, js, php}", "./pages/**/*.{html, php}"],
  theme: {
    extend: {
      colors: {
        azul: "#00236B",
        crema: "#FFECD4",
        transparent: "transparent",
      },
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      spacing: {
        spacerS: "clamp(12px, 6.615383px + 1.538462vw, 22px)",
        spacerM: "clamp(24px, 15.384617px + 2.461538vw, 40px)",
        spacerL: "clamp(1.875rem, 0.3345rem + 6.5728vw, 6.25rem)",
      },
      fontSize: {
        fontL: "clamp(2rem, 1.4366rem + 2.4038vw, 3.6rem)",
        fontM: "clamp(1.2rem, 0.9887rem + 0.9014vw, 1.8rem)",
        fontS: "clamp(1rem, 0.8592rem + 0.6009vw, 1.4rem);",
        fontXS: "clamp(0.8rem, 0.7296rem + 0.3005vw, 1rem);",
      },
    },
  },
  plugins: [],
};
