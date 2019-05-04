# Random background rotation
Random background rotation is a php script that returns a random image

## Prerequisites
PHP >= 4.3

## Installation
Put **index.php** in a new web folder, put yout images in the same folder

## Uses
- Xenforo

  Login into your Xenforo admin interface
  
  go to *Appearance* and find the theme setting
  
  Change any background url reference with the url of the **index.php**

- HTML pages
  
  Insert in the body tag:
  ```
  <body style="background: url(/path/to/dir/index.php) no-repeat fixed center; background-size: cover;" >
  ```
  
- CSS files
  
  Insert in your CSS file:
  ```
  body {
      background: url(/path/to/dir/index.php) no-repeat fixed center;
      background-size: cover;
      ...
  }
  ```


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
