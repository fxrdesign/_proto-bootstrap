# Starting a new Bootstrap project? Awesome
### Here is what needs to happen to build out your hub and make all systems nominal
-----------------------------------------------------------------------------------

1. Install gems for sass and bootstrap:
    1. `$ gem install compass`
    2. `$ gem install bootstrap-sass`
    
2. Setup Project Hub directory: 
    1. `$ compass create [Project-Name]-Hub -r bootstrap-sass --using bootstrap`
    2. **Create** new folder in [Project-Name]-Hub: **_Components** 
    3. Move /sass and /javascripts into /_Components
    4. Rename /stylesheets to /css
    5. **Create** new folder in [Project-Name]-Hub: **js**
    6. Edit config.rb
        * _css\_dir = "stylesheets"_ becomes _css_dir = "css"_
        * _sass\_dir = "sass"_ becomes _sass_dir = "_Components/sass"_
        * _javascripts_dir = "javascripts"_ becomes _javascripts_dir = "js"_
        * Add _output_style = ":compact"_
    7. Move files and folders from with /_Elements into <<Project-Name>>-Hub
    
3. Copy files to root of [Project-Name]-Hub from \_proto/_Extensions
    * Gruntfile.js
    * package.json
    
4. Install nodes for Grunt
    * `$ npm install -g grunt-cli`
    * `$ cd [Project-Name]-Hub`
    * `$ npm install`
    
5. Update Gruntfile.js as needed
    * Most likely update uglify: >> my_target: >> files: >> array of js to uglify, to include only javacsripts/bootstrap/<the js module you need>.js
    
6. Run grunt
    * If not there: `$ cd [Project-Name]-Hub` 
    * `$ grunt`
    
7. Uncomment and update following styles in [Project-Name]-Hub/_Components/sass/_variables.scss (Brackets indicate [ suggested values ])
    * `$brand-primary: [ #07a; ]` 
    * `$link-color: $brand-primary;`
    * `$font-family-sans-serif: [ 'Karla', 'Arial', sans-serif;` 
        ** //NOTE: suggested is a google and must be added in main index `<!-- Google Font --><link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700' rel='stylesheet' type='text/css'>`
    * `$font-family-base: $font-family-sans-serif;`
    * `$icon-font-path: [ "https://c9.io/fxruizx/fxrdesign/workspace/Test-Hub/css/fonts/bootstrap/"; ]`
    * `$navbar-height: 40px;`
    * `$navbar-default-bg: [ #F5F5F5; ]`
    * `$navbar-default-link-color: $brand-primary;`

# Change Log

** 0.1 of the Hub Build Out Doc - Updated May 18, 2014 **
** 0.2 Update July 2, 2014 - Added 7. and project files rearranged in prep for putting in Git repo
** 0.3 Update July 3, 2014 - Revised 2.6 to include js directory changes
** 0.4 Update July 17, 2014 - Made clearer markdown
