module.exports = {
  theme: {
    extend: {
        boxShadow: {
            default: '0 0 5px 0 rgba(0, 0, 0, 0.08)',
        },
        colors: {
            page: 'var(--page-background-color)',
            button: 'var(--button-background-color)',
            card: 'var(--card-background-color)',
            header: 'var(--header-background-color)',
            default: 'var(--text-default-color)',
            muted: 'var(--text-muted-color)',
            'muted-light': 'var(--text-muted-light-color)',
            accent: 'var(--text-accent-color)',
            'accent-light': 'var(--text-accent-light-color)',
            error: 'var(--text-error-color)',

        },
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms'),
  ]
}
