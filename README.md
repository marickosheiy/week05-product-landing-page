# KŌMAKI 🍣

## Week 05 – Product Landing Page

# 1. Project Title

## KŌMAKI – Japanese Restaurant Product Landing Page

KŌMAKI is a modern Japanese-inspired product landing page developed for the Week 05 Product Landing Page activity. The website presents the brand and its featured Japanese food products through an elegant, visually engaging, and responsive user interface.

The project focuses on creating a professional landing page that provides a consistent experience across desktop, tablet, and mobile devices.

---

# 2. Introduction

## What is a Product Landing Page?

A Product Landing Page is a dedicated web page designed to introduce and present a product, service, brand, or business to potential users or customers.

It usually focuses on presenting important information in a clear and visually engaging way. A landing page commonly includes a navigation bar, hero section, product or feature sections, call-to-action buttons, and other information that encourages users to explore the website.

For this project, the landing page was designed to introduce **KŌMAKI**, a Japanese-inspired food brand that offers different varieties of maki.

## Why Are Landing Pages Important for Businesses?

Landing pages are important because they help businesses communicate their products and brand identity effectively. A well-designed landing page can create a strong first impression and guide visitors toward important information or actions.

Landing pages help businesses:

- Introduce products and services clearly.
- Establish a strong brand identity.
- Create a positive first impression.
- Highlight important products or features.
- Improve user engagement.
- Provide clear calls to action.
- Present information in an organized and visually appealing way.

A responsive and well-designed landing page also allows businesses to reach users across different devices.

## Purpose of the Project

The purpose of this project is to apply modern web development and user interface design principles in creating a responsive Product Landing Page.

The project focuses on the practical use of:

- Responsive Web Design
- Tailwind CSS
- Laravel Blade templates
- Modern user interface design
- Responsive navigation
- Flexbox and CSS Grid
- Mobile-friendly layouts
- Visual hierarchy
- Consistent spacing and typography

The goal is to create an elegant and responsive landing page that effectively presents the KŌMAKI brand and its featured food products.

---

# 3. Objectives

The following learning objectives were accomplished during the activity:

- Create a modern and visually engaging Product Landing Page.
- Apply Responsive Web Design principles.
- Develop layouts for desktop, tablet, and mobile devices.
- Use Tailwind CSS for styling.
- Apply utility-first CSS principles.
- Use responsive utility classes.
- Implement Flexbox for responsive layouts.
- Implement CSS Grid for organizing content.
- Create a responsive navigation bar.
- Improve the usability of the website across different screen sizes.
- Apply consistent spacing and typography.
- Use a harmonious and limited color palette.
- Improve visual hierarchy through layout and typography.
- Use Laravel Blade for structuring the interface.
- Understand the importance of reusable and modular user interface development.
- Organize the project and document its development process using GitHub.

---

# 4. Responsive Web Design

Responsive Web Design is an approach to web development that allows a website to adapt its layout, content, and interface according to the screen size and device being used.

The KŌMAKI Product Landing Page was designed to provide a consistent user experience across different devices, including:

- Desktop computers
- Laptops
- Tablets
- Mobile phones

## Mobile-First Design

Mobile-first design is an approach where the interface is first designed for smaller screens before enhancements are applied to larger screens.

This approach is important because mobile devices have limited screen space. Content must remain readable, organized, and easy to navigate.

Tailwind CSS supports a mobile-first workflow by applying default utility classes to smaller screens and using breakpoint prefixes for larger screens.

For example:

```html
<div class="flex flex-col md:flex-row">
```

In this example:

- `flex-col` displays the content vertically on smaller screens.
- `md:flex-row` changes the layout to a horizontal row on medium-sized screens and larger.

This allows the layout to adapt naturally to different devices.

## Responsive Breakpoints

Responsive breakpoints allow the interface to change according to screen size.

Tailwind CSS provides breakpoint prefixes such as:

```text
sm:
md:
lg:
xl:
2xl:
```

These prefixes can be used to modify elements for larger screens.

Example:

```html
<h1 class="text-4xl md:text-6xl lg:text-7xl">
    Japanese Dining Experience
</h1>
```

The heading uses a smaller font size on mobile devices and becomes larger on tablets and desktop screens.

Responsive breakpoints help maintain readability and proper visual hierarchy across different devices.

## Flexbox

Flexbox is a CSS layout system used to arrange elements in rows or columns.

It is useful for:

- Navigation bars
- Hero sections
- Buttons
- Content alignment
- Product layouts

Example:

```html
<div class="flex flex-col lg:flex-row items-center">
```

On smaller screens, the content is arranged vertically.

On larger screens, the layout changes to a horizontal arrangement.

Flexbox helps create flexible and responsive layouts with proper alignment and spacing.

## CSS Grid

CSS Grid is used to organize multiple elements into rows and columns.

It is useful for sections containing multiple cards or products.

Example:

```html
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
```

This layout provides:

- One column on mobile devices.
- Two columns on medium-sized screens.
- Three columns on large screens.

CSS Grid helps organize content while maintaining a clean and responsive structure.

## User Experience (UX)

Responsive design plays an important role in improving User Experience.

Users access websites using different devices and screen sizes. A website that only works properly on a desktop may become difficult to use on a phone or tablet.

Responsive design helps ensure that:

- Text remains readable.
- Images fit properly within the screen.
- Navigation remains accessible.
- Buttons are easy to interact with.
- Content does not overflow.
- Layouts remain organized.
- Important information remains visible.

Responsive design is important in modern web applications because it allows users to have a consistent and accessible experience regardless of the device they use.

---

# 5. Tailwind CSS

## Utility-First CSS

Tailwind CSS follows a utility-first approach to styling.

Instead of creating many custom CSS classes, styling is applied by combining utility classes directly in HTML or Blade templates.

Example:

```html
<button class="bg-red-600 text-white px-6 py-3 rounded-full hover:bg-red-700 transition">
    Explore Menu
</button>
```

The utility classes define:

- Background color
- Text color
- Horizontal padding
- Vertical padding
- Border radius
- Hover effects
- Transitions

This approach makes it easier to create consistent designs without writing large amounts of custom CSS.

## Advantages of Tailwind CSS

Tailwind CSS provides several advantages during development.

These include:

- Faster interface development.
- Consistent spacing values.
- Responsive utility classes.
- Easy layout customization.
- Reduced need for large custom CSS files.
- Consistent design patterns.
- Easy implementation of hover and transition effects.

Tailwind also allows developers to work directly with responsive layouts using utility classes.

## Responsive Utility Classes

Tailwind CSS provides responsive prefixes that allow styles to change depending on screen size.

Example:

```html
<div class="px-4 sm:px-6 md:px-10 lg:px-16">
```

This adjusts the horizontal padding as the screen becomes larger.

Another example is:

```html
<nav class="hidden lg:flex">
```

In this example:

- The navigation is hidden on smaller screens.
- The navigation becomes a flex container on large screens.

This is useful when creating separate desktop and mobile navigation experiences.

## Component Styling

Tailwind utility classes can be combined to create consistent component styles.

For example, a call-to-action button can use:

```html
<a href="#menu"
   class="bg-red-600 text-white px-6 py-3 rounded-full
          hover:bg-red-700 transition duration-300">
    Explore Menu
</a>
```

This creates a button with:

- A red background.
- White text.
- Consistent padding.
- Rounded corners.
- A hover effect.
- A smooth transition.

Using similar utility combinations throughout the project helps maintain visual consistency.

---

# 6. Blade Components

## What Are Blade Components?

Blade Components are reusable user interface elements created using Laravel's Blade templating system.

Instead of writing the same HTML structure repeatedly, a developer can create a reusable component and use it in different parts of the application.

Examples of reusable components may include:

- Navigation bars
- Hero sections
- Buttons
- Product cards
- Feature cards
- Testimonials
- Footers

A Blade component can be used using syntax such as:

```blade
<x-navbar />
```

or:

```blade
<x-footer />
```

Blade Components help organize the interface into smaller and more manageable parts.

## Why Reusable Components Improve Maintainability

Reusable components improve maintainability because common elements are stored in one location.

For example, instead of repeating the same navigation bar code on multiple pages, the navigation can be created once as a component.

If changes are needed, the developer only needs to update the component once.

This provides several advantages:

- Less duplicated code.
- Easier maintenance.
- Faster development.
- More consistent user interfaces.
- Easier debugging.
- Easier future updates.

## Benefits of Modular UI Development

Modular UI development divides a large interface into smaller and reusable sections.

For example:

```text
components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── product-card.blade.php
└── footer.blade.php
```

This approach makes the project easier to understand because each component has a specific responsibility.

It also improves scalability because new pages can reuse existing components.

## Sample Blade Code

A reusable Blade component may look like this:

```blade
<nav class="flex items-center justify-between">
    <a href="/">KŌMAKI</a>

    <div class="hidden lg:flex gap-6">
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="#about">About</a>
    </div>
</nav>
```

The component can then be included in a page:

```blade
<x-navbar />
```

This modular approach helps keep the main page cleaner and easier to maintain.

---

# 7. User Interface Design

The KŌMAKI Product Landing Page uses a Japanese-inspired modern interface.

The design focuses on visual consistency, readability, contrast, and clear interaction.

## Color Palette

The website uses a limited and harmonious color palette.

The primary colors include:

- Dark backgrounds
- Red accent colors
- White primary text
- Gray secondary text

The dark background creates an elegant and premium appearance.

Red is used as an accent color to draw attention to:

- Buttons
- Interactive elements
- Important information
- Brand-related elements

Using a limited color palette helps maintain consistency and prevents the interface from appearing visually overwhelming.

## Typography

Typography is used to create visual hierarchy and improve readability.

Different font sizes and font weights help distinguish between:

- Main headings
- Section headings
- Body text
- Navigation links
- Buttons

Large and bold headings attract the user's attention, while smaller text provides supporting information.

Consistent typography helps users understand the relationship between different sections of the page.

## Iconography

Icons are used to support interaction and navigation.

For example, mobile navigation may use a menu icon to provide access to navigation links without taking up too much screen space.

Effective iconography should be:

- Simple
- Recognizable
- Consistent
- Easy to understand

Using familiar icons improves usability and helps users understand available interactions.

## Button Styles

Buttons use a consistent visual style throughout the interface.

The button design includes:

- Red accent colors.
- Clear text.
- Adequate padding.
- Rounded corners.
- Hover effects.
- Smooth transitions.

Example:

```html
<a class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-full transition">
    Explore Menu
</a>
```

Consistent button styling makes interactive elements easy to recognize.

## Card Design

Cards are useful for organizing content into visually separate sections.

For a product landing page, cards can be used to present:

- Featured products
- Menu items
- Features
- Testimonials
- Pricing options

A good card design usually includes:

- Clear spacing.
- Consistent padding.
- Rounded corners.
- Images or icons.
- Readable typography.

Cards help users scan and understand information more easily.

## Layout Consistency

Layout consistency is maintained through the repeated use of:

- Consistent spacing.
- Similar typography.
- Repeated button styles.
- Harmonious colors.
- Organized content sections.
- Consistent alignment.

Consistency improves the user experience because users become familiar with how the interface works as they navigate through the page.

---

# 8. Folder Structure

The project uses an organized folder structure to separate views, components, assets, and documentation.

```text
week05-product-landing-page/
│
├── public/
│   ├── images/
│   └── build/
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   ├── js/
│   │   └── app.js
│   │
│   └── views/
│       ├── layouts/
│       ├── components/
│       └── pages/
│
├── screenshots/
│
├── documentation/
│
├── routes/
│   └── web.php
│
└── README.md
```

## resources/views/layouts

The `layouts` folder contains reusable page layouts.

Layouts may contain common elements such as:

- HTML document structure.
- Head section.
- Shared styles.
- Navigation.
- Footer.
- Scripts.

Using layouts prevents the need to repeat the same structure across multiple pages.

## resources/views/components

The `components` folder contains reusable Blade Components.

Examples may include:

- Navigation bar.
- Hero component.
- Buttons.
- Product cards.
- Feature cards.
- Footer.

Reusable components help reduce duplicated code and improve consistency.

## resources/views/pages

The `pages` folder contains the main pages of the application.

For this project, the main KŌMAKI Product Landing Page can be stored and organized as a page within this folder.

Separating pages from components makes the project structure easier to understand and maintain.

## public

The `public` folder contains publicly accessible files and assets.

Examples include:

- Images.
- Logos.
- Food photography.
- Public website assets.
- Compiled Vite files.

Files inside the `public` folder can be accessed by the browser.

## screenshots

The `screenshots` folder is intended to contain images that document different views and sections of the completed project.

These screenshots provide visual evidence of the responsive design and project implementation.

## documentation

The `documentation` folder is intended to contain supporting documentation images.

For this project, it is used to store the Before-and-After comparison images that demonstrate how the interface developed from the initial prototype to the final polished design.

---

# Before-and-After Comparison

## Before

The initial version of the project focused on creating the basic structure of the Product Landing Page.

The early prototype included:

- A basic page layout.
- Initial navigation.
- Basic content structure.
- Initial section arrangement.
- Minimal styling.

The primary goal of the early design was to establish the structure and organization of the landing page before applying the final visual design.

## After

The final version improved the interface through:

- A more polished Japanese-inspired visual design.
- Improved visual hierarchy.
- Consistent typography.
- Improved spacing.
- Responsive layouts.
- Improved navigation.
- Professional food imagery.
- A harmonious dark and red color palette.
- Better usability across different screen sizes.

The final design provides a more visually engaging and user-friendly experience compared to the initial prototype.

The Before-and-After comparison demonstrates the evolution of the interface from an early layout into a polished responsive Product Landing Page.

---

# Design Principles Applied

The following design principles were considered during the development of the project:

- Follow a modern design system.
- Maintain consistent spacing.
- Maintain consistent typography.
- Use a limited and harmonious color palette.
- Ensure sufficient color contrast for readability.
- Create clear visual hierarchy.
- Develop responsive layouts.
- Improve navigation and usability.
- Avoid directly copying existing websites.

The final interface was developed as an original implementation using Japanese-inspired visual design concepts.

---

# Technologies Used

The following technologies were used to develop the project:

- Laravel
- PHP
- Blade Templates
- Tailwind CSS
- HTML
- JavaScript
- Vite
- Git
- GitHub

---

# Installation and Setup

## Clone the Repository

```bash
git clone https://github.com/marickosheiy/week05-product-landing-page.git
```

## Navigate to the Project Folder

```bash
cd week05-product-landing-page
```

## Install PHP Dependencies

```bash
composer install
```

## Install JavaScript Dependencies

```bash
npm install
```

## Start the Laravel Development Server

```bash
php artisan serve
```

## Start Vite

```bash
npm run dev
```

After starting the Laravel server, open the project in a browser.

```text
http://127.0.0.1:8000
```

---

# Author

**Maricko Sheiy L. Villacorta**

Week 05 – Product Landing Page

---

# Repository

Repository Name:

```text
week05-product-landing-page
```

The repository is hosted publicly on GitHub.