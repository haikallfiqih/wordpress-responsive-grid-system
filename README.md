# WordPress Responsive Grid System

![WordPress](https://img.shields.io/badge/WordPress-5.0%2B-blue)
![License](https://img.shields.io/badge/license-GPL--2.0%2B-green)
![Version](https://img.shields.io/badge/version-1.0.0-orange)

A lightweight and flexible grid system plugin for WordPress websites. Create responsive layouts easily with a 12-column grid system.

## 🚀 Features

- **12-Column Grid System**: Flexible and customizable layout options
- **Responsive Breakpoints**: Support for all device sizes (xs, sm, md, lg, xl)
- **Easy to Use**: Simple class naming convention
- **Lightweight**: No bloat, just what you need
- **WordPress Optimized**: Built specifically for WordPress

## 📦 Installation

### From GitHub:
1. Download the latest release
2. Upload the `wordpress-responsive-grid` folder to your `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

### From WordPress Plugin Repository:
1. Go to Plugins > Add New in your WordPress admin
2. Search for "WordPress Responsive Grid System"
3. Click "Install Now" and then "Activate"

## 🎯 Usage

Basic example:
```html
<div class="container">
    <div class="row">
        <div class="col md6">Left Column</div>
        <div class="col md6">Right Column</div>
    </div>
</div>
```

### Available Classes

#### Container
- `container`: Main wrapper class

#### Row
- `row`: Flex container for columns

#### Columns
Base class: `col` with breakpoint prefixes:
- `xs`: 0px and up
- `sm`: 576px and up
- `md`: 768px and up
- `lg`: 992px and up
- `xl`: 1200px and up

Examples:
```html
<div class="col xs12">Full width on extra small devices</div>
<div class="col sm6">Half width on small devices and up</div>
<div class="col md4">One-third width on medium devices and up</div>
<div class="col lg3">Quarter width on large devices and up</div>
```

## 🤝 Contributing

Contributions are welcome! Feel free to:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/newFeature`)
3. Commit your changes (`git commit -m 'Add some Amazing Feature'`)
4. Push to the branch (`git push origin feature/newFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the GPL v2 or later - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

Created by [Haikal Fiqih](https://github.com/haikallfiqih)

## 🙏 Acknowledgments

- Inspired by modern CSS grid systems
- Built for the WordPress community
