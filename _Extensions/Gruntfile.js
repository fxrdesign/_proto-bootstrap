module.exports = function(grunt){
    grunt.initConfig({
        uglify: {
            my_target: {
                files: {
                   'js/scripts.js': ['_Components/javascripts/bootstrap/collapse.js']
                }//files
            }//my_target
        },//uglify
        compass: {
            dev: {
                options: {
                    config: 'config.rb'
                }//options
            }//dev
        },//compass
        watch: {
            scripts: {
                files: ['_Components/javascripts/bootstrap/*.js'],
                tasks: ['uglify']
            },//scripts
            sass: {
                files: ['_Components/sass/*.scss'],
                tasks: ['compass:dev']
            }//sass
        }//watch
    }) //initConfig
    
    //Load my plugins
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    
    grunt.registerTask('default','watch');
}//exports