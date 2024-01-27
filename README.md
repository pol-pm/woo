# `Woo`Commerce Resources Library by Jacek Poleszak

Welcome to the `Woo`Commerce Resources Library, a comprehensive and evolving collection of knowledge and tools curated by Jacek Poleszak. This repository aims to serve as an essential guide for developers, designers, and eCommerce enthusiasts diving into the world of WooCommerce.

## Introduction

This library is an ongoing project, reflecting Jacek's journey through the complexities and nuances of WooCommerce. As the owner of [jkp.agency](https://jkp.agency), Jacek shares his expertise and learnings in a structured, accessible manner, ensuring that this repository remains a relevant and valuable resource for the community.

## WooCommerce Customization Notes

### Best Practices
- Avoid direct editing of WooCommerce Pages to preserve Woo shortcodes. Utilize hooks for modifications.
- Utilize `do_action()` for custom functions without overriding WooCommerce templates.
- Refer to `includes/class-wc-shortcodes.php` for a comprehensive list of available shortcodes.

### Code Implementation
- Incorporate custom functions into the `functions.php` file of your child theme.
- Use the `do_action()` hook for specifying where to run custom functions.
- By default, `priority` is set to `10` and `arguments` to `1`.

### Hooks and Filters
- WordPress Filter Hooks enable content editing before processing by WordPress.
- Use `apply_filters( 'hook_name' )` to modify content prior to processing.

### Ongoing Updates
- Additional content on child theme customization and CSS best practices will be included regularly.

### Examples
Providing practical code examples, such as custom actions in product saving or cart customization.

## Comprehensive Resources

### Key Resources
- Official sources for WooCommerce, WordPress development, child themes, hooks, and more.
- Visual guides for WooCommerce hooks in various contexts like emails, account pages, and product pages.

### Additional Learning
- Planned exploration of advanced topics such as custom fields in products.
- Recommendations for useful plugins like WooCommerce HookMeUp and WP Hooks Finder.

## Contributing
This repository welcomes contributions from the WooCommerce community. Share your insights or suggest improvements through pull requests or issues.

## About Jacek Poleszak
Jacek Poleszak, the curator of this library, is a seasoned eCommerce consultant and the founder of [JKP.Agency](https://jkp.agency). His passion for sharing knowledge and helping others succeed in the eCommerce space drives this project.
