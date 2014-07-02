If the project is going to use Sass/Compass/Grunt 
do the following after you have copied the 
_html-project to your project:

1. Copy these files to the Project-Hub directory:
    config.rb
    Gruntfile.js
    package.json

2. From Terminal run:
    $ npm install -g grunt-cli
    $ npm install
    $ gem install compass

3. Wait for all node-modules to be installed, should include:
    grunt-contrib-watch
    grunt-contrib-uglify
    grunt-contrib-compass
    matchdep

4. Configure Gruntfile.js as needed

5. All Done! 