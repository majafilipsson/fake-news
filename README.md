# fake-news

### Description
First php-assignment for Webutvecklare 2018 @ Yrgo. Create a simple news feed mainly using php.


<!-- TODO:
        -create array for articles

        -create 'function'/feature/way of ordering news items chronologically
        -create content files and fill with text
        -create image folder for images
        -read up on file_get_contents function and implement
        -figure out how to 'style' content which is stored in txt files

        -->


### Project structure:

- index.php - my main file where I will basically 'link'/require all other files; to be run in browser; will basically contain the structure 'require data.php, require header.php, require posts.php, require footer.php'

- data.php - file containing array with data concerning articles
  - txt files - files containing text content of articles (to be linked to data.php)
  - img folder - folder containing images for articles (also to be 'linked' in data.php)



- posts.php - file containing foreach loop looping through articles and some html tags to structure content for each post (will be 'required' in index.php)

- header.php - will contain header for index.php

- footer.php - will contain footer for index.php

- functions.php - (not yet sure if to be created) (would contain functions) (would be used to require for example data.php using a function, so that only the function need be called in index.php, to simplify use of databases.) (in conslusion, will only be created if I decide to use database and sql, meaning, 2nd version if time allows.)


### TO-DO list:

##### October 18, 2018

- [x] Plan project structure and create to-do list (README.md)
- [ ] Read up on editorconfig
- [ ] Create editorconfig
- [ ] Create array for articles
- [ ] Create array for authors
- [ ] Create txt files for text content
- [ ] Create img folder and add images
