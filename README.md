# fake-news

### Description
First php-assignment for Webutvecklare 2018 @ Yrgo. Create a simple news feed mainly using php, html, and css.

### Installation Guide:

1. Clone the directory:  
    ```
    git clone https://github.com/majafilipsson/fake-news.git
    ```
2. Ensure your webserver root covers the cloned repository.

3. Open project in browser, enjoy!


<!-- TODO:

        TESTERS!

        -add descriptions in comments of what my code does

        -->


### Project structure:

- `index.php` - my main file where I will basically 'link'/require all other files; will basically contain the structure 'require data.php, require functions.php, require header.php, require articles.php, require footer.php'

- `data.php` - file containing arrays with data concerning articles
  - txt files - files containing text content of articles (to be linked to data.php) (to be found in folder 'content')
  - img folder - folder containing images for project


- `articles.php` - file containing foreach loop looping through articles and some html tags to structure content for each post

- `header.php` - Header for index.php, including html markup for nav bar

- `footer.php` - Footer for index.php

- `functions.php` - Contains getAuthor, compare, and getPblshDate functions


### Testers




### TO-DO list:

##### October 18, 2018

- [x] Plan project structure and create to-do list (README.md)
- [x] Read up on editorconfig
- [x] Create editorconfig
- [x] Create array for articles
- [x] Create array for authors
- [x] Create txt files and fill with content
- [x] Read up on file_get_contents function and implement for txt-files

##### October 24, 2018

- [x] Create html markup
- [x] Style with css
- [x] Create main loops and functions for index.php, make sure:
- All articles can be printed using foreach loop
- Author, title, content, likes, publishing date is included for all articles
- Create a function to fetch author(s)

##### October 27, 2018

- [x] Create function to order articles chronologically
- [x] Sanitize and improve array-content and txt files content
- [x] Go through assignment on github to ensure all requirements are met

##### October 29, 2018

- [ ] Test project on classmates' computers
- [ ] Trim and add finishing touches
- [x] .editorconfig, readme.md, license

##### Extras

- [ ] Create img folder and add images
- [ ] Create a way of fetching authors using the id
- [ ] Add some cool links to webpage (like Wikipedias for authors)
- [ ] Create real like-function using javascript for user interaction
- [ ] Figure out a way to display parts of content from txt files (use substr perhaps, but don't cut words in half), and include expand/continue reading link (would require javascript too most likely)
- [ ] Create a real database (instead of using the two arrays) and implement
- [ ] Add more descriptions in comments of what my code does
