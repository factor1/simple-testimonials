# Simple Testimonials
A simple & straight forward WordPress plugin that allows you to create testimonials with citations and categories.

## Usage
To keep this plugin as flexible as possible, it outputs no styles or HTML structure
so you must use a WordPress Query in your theme template to get the testimonials.

The registered names for the post types and taxonomies are below:

- Post Type: `simple_testimonials`
- Categories: `simple_testimonials_categories`
- Tags: `simple_testimonials_tags`

### ACF Fields
There are a few ACF values that can be useful when integrating this plugin with your
template.

- `testimonial` - contains the body copy of the testimonial
- `citation` - contains the citation string for the testimonial

### Custom Functions
You can now include excerpts of these ACF fields with customizable word counts using the `simple_testimonials_excerpt()` function, which takes in two parameters, `$field` and `$words`.

Examples:

```
<?php $testimonial = get_field('testimonial');

// Displays 30-word excerpt of the $testimonial field
echo simple_testimonials_excerpt($testimonial, 30);

// Displays default 55-word excerpt of the $testimonial field
echo simple_testimonials_excerpt($testimonial); ?>
```

## Important Notes on Slugs

- Simple Testimonials uses a custom archive slug of `/testimonials/` to access testimonial archives.
- Simple Testimonials uses a custom permalink of `/testimonial/` for single posts.

## Issues, Questions, Contributions
If you find a bug, have a question, or want to make a contribution please open a issue or pull request.

##### Developed and maintained by the fine folks @ [factor1](https://factor1studios.com)
