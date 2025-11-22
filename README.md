
# Pace Creative Theme

Starter theme for wordpress projects
## Installation

Install my-project with npm

```bash
  cd theme directory
  composer install / composer update
  npm install
  npm start 
```
    
## Documentation

### Creating blocks
To create an ACF block, navigate to the "blocks" folder in the main theme directory and create a new folder with the desired block name. Follow the examples of "pace-hero" and "pace-testimonial.


### Styles
You can use any CSS library you want, such as Tailwind, Bootstrap, or an existing SCSS solution SCSS solution.

### Scripts
It's better, in most cases, to include a script that is related to a specific block so that we can improve the website speed. You can see some block examples.
In other cases, you can use the scripts folder. If we are using Ajax, it's better to make use of the wp_localize script.

### Hooks & Functions 
All new functions can be placed in the "modules" folder, avoiding the need to put them directly into the functions.php file. The modules folder automatically autoloads functions to functions.php, so you don't need to include anything in functions.php.


## Features

- Gutenberg + ACF blocks
- Stoutlogic library
- Breakpoints assets/scss/global/breakpoints.scss
- Basic menu structure
- Laravel mix compiling

