
SKILLS: Laravel, HTML, Javascript, Blade 

App include: Sessions and Cookies, Custom Requests and validations

 1- Simple page form with 5 inputs - Title, Short Description, Photo (url), post (text 
area) and Author. After the inputs are submitted, the user is redirected to a page that shows all of the info:
● The title of the post is: $title
● The short description of the post is: $desc
● The url of the photo is: $photo
● The post is: $post
● The author of the post is: $author
● The date of the post is: $date

 2- Login page have inputs for username, password, date and email. After sending the 
request for logging in, in the controller i have created different methods for validation.
● The username is  equal or bigger than 6 characters and contain at least one number
● Password is with at least 8 characters and contain at least one number and one uppercase letter.

If the validation fails, the user is redirected to an error page that says “Validation error! Try 
again!”. If the validation succeeds, the user is redirected to a page that says: Validation is ok!


3- Additional ValidationRequest with Sessions 
adding validation for date (required and needs to be a date) and email (required and it needs to be a valid email address).
If there’s an error, the error should appear on top of the login form, and the form should remember the old values the inputs had.
If the validation was successful, save the username in session and redirect the
user to a new page, home, that has a header that says “Hi $username!”.

4- I have a three links on the top of the page: Home that brings you to the home page(the one we just created in the previous exercise), Comment and Log out.
- If the user is logged in and tries to visit the login page, he should be redirected to home. 
- If the user is not logged in and tries to visit the homepage or the comment page, an error should appear saying “You need to be logged in to get to this page”.
- 
The comment page is another form that has 3 inputs: title, description and image url.
When the user submits the comment, it should be validated. 
- The title is required and it can have a maximum of 40 characters.
- The description is required and can be a maximum of 100 characters.
- The url is required and has to be a valid url.
  
If the validation fails, the errors should appear on top of the form, and the old values should 
remain in the inputs. If the validation is successful, save the values in session and redirect the 
user to the homepage, where underneath the username and the links, there should be a header 
that reads “Your latest comment:” and display their last comment (title, then the picture, not just 
the url, and the description). The log out link should delete everything from the session, and 
redirect the user to the login page.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
