# fake-news

### Description
First php-assignment for Webutvecklare 2018 @ Yrgo. Create a simple news feed mainly using php.


<!-- TODO:

    Questions to be ckecked with supervisor:

        -naming conventions: should I call an item in an array name-name or nameName ? for consistency... (see 'pblsh-date' in $articles array)

        -authors array: Should I include the ID to be displayed on the webpage?
                        Is there a way of creating an ID and fetching the author name by checking for matching ID between the two arrays?

        -make sure my .editorconfig and readme-files are approved

        -->


### Project structure:

- index.php - my main file where I will basically 'link'/require all other files; to be run in browser; will basically contain the structure 'require data.php, require header.php, require posts.php, require footer.php'

- data.php - file containing array with data concerning articles
  - txt files - files containing text content of articles (to be linked to data.php)
  - img folder - folder containing images for articles (also to be 'linked' in data.php)



- posts.php - file containing foreach loop looping through articles and some html tags to structure content for each post (will be 'required' in index.php)

- header.php - will contain header for index.php

- footer.php - will contain footer for index.php

- functions.php - (not yet sure if to be created) (would contain functions)


### TO-DO list:

##### October 18, 2018

- [x] Plan project structure and create to-do list (README.md)
- [x] Read up on file_get_contents function and implement for txt-files
- [ ] Read up on editorconfig
- [ ] Create editorconfig
- [x] Create array for articles
- [x] Create array for authors
- [x] Create txt files and fill with content

##### October 24, 2018

- [x] Create html markup
- [x] Style with css
- [x] Create main loops and functions for index.php, make sure:
- All articles can be printed using foreach loop
- Author, title, content, likes, publishing date is included for all articles
- Create a function to fetch author(s)

##### October 27, 2018

- [ ] Create function to order articles chronologically
- [ ] Sanitize and improve array-content and txt files content
- [ ] Go through assignment on github to ensure all requirements are met

##### October 29, 2018

- [ ] Test project on classmates' computers
- [ ] Trim and add finishing touches
- [ ] .editorconfig, readme.md, license

##### Extras

- [ ] Create img folder and add images
- [ ] Create a way of fetching authors using the id
- [ ] Add some cool links to webpage (like Wikipedias for authors)
- [ ] Figure out a way to display parts of content from txt files (use substr perhaps, but don't cut words in half), and include expand/continue reading link
- [ ] Create a real database (instead of using the two arrays) and implement
