# Field Day Website - Development Guide

## CSS Development Workflow

### Quick Start
```bash
# Install dependencies (first time only)
npm install

# Start auto-compilation (recommended)
npm run dev
# or
gulp

# Manual compilation only
npm run build
# or
gulp compileSass
```

### How It Works

1. **Auto-Compilation**: Run `npm run dev` to automatically compile SCSS when you save files
2. **Dynamic Cache Busting**: CSS files now use PHP-generated timestamps to prevent caching issues
3. **Source Maps**: Generated for easier debugging in browser dev tools
4. **Notifications**: Desktop notifications when compilation completes

### File Structure
- **SCSS Source**: `assets/scss/` - Edit these files
- **Compiled CSS**: `assets/css/styles_ver3.css` - Auto-generated, don't edit directly
- **Cache Busting**: `includes/header.php` - Uses `filemtime()` for dynamic timestamps

### Troubleshooting

**CSS changes not appearing?**
1. Make sure you're running `npm run dev` (auto-compilation)
2. Hard refresh browser (Ctrl+F5 / Cmd+Shift+R)
3. Check browser dev tools for compilation errors

**Manual compilation:**
```bash
npm run build
```

### Available Commands
- `npm run dev` - Start auto-compilation with file watching
- `npm run build` - One-time compilation
- `npm run watch` - Watch mode only
- `gulp compileSass` - Direct Gulp compilation

