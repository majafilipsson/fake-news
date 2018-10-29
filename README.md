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

    Questions to be ckecked with supervisor:


    TESTERS!

        -naming conventions: should I call an item in an array name-name or nameName ? for consistency... (see 'pblsh-date' in $articles array)

        -authors array: Should I include the ID to be displayed on the webpage?
                        Is there a way of creating an ID and fetching the author name by checking for matching ID between the two arrays?

        -make sure my .editorconfig and readme-files are approved

        -type declarations for compare function can't be used!

        -should I put the usort() function in functions.php?
        -should I declare types within my functions too? Look at functions.. like the compare function for instance.
        (add those blocks with @param before functions)
        -add descriptions in comments of what my code does

        -which functions should go in functions.php file?

        -ask about how things are supposed to be divided - (header.php, index.php, footer.php - where do types declarations go, where do I require functions.php)

        -indentation in index.php (and header.php and footer.php)

        -are docblocks mandatory?

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
- [ ] Go through assignment on github to ensure all requirements are met

##### October 29, 2018

- [ ] Test project on classmates' computers
- [ ] Trim and add finishing touches
- [ ] .editorconfig, readme.md, license

##### Extras

- [ ] Create img folder and add images
- [ ] Create a way of fetching authors using the id
- [ ] Add some cool links to webpage (like Wikipedias for authors)
- [ ] Create real like-function for user interaction
- [ ] Figure out a way to display parts of content from txt files (use substr perhaps, but don't cut words in half), and include expand/continue reading link
- [ ] Create a real database (instead of using the two arrays) and implement
